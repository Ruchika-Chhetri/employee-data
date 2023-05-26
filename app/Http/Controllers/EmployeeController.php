<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Gender;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
       /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public $genders,$name,$email,$phone,$gender;
    public function index()
    {
        $employees = Employee::orderBy('name','asc')->orderBy('email','asc')->paginate(10);
        return view('employees.index', compact('employees'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        // $genders= ['male' =>'male ' , 'female'];
        return view('employees.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required|digits:10|numeric',
            'gender' => 'required',
        ]);
      
    //     Employee::create([
    //         'name' => $this->name,
    //     'email' => $this->email,
    //     'phone' => $this->phone,
    //     'gender' => $this->name,
    // ]);

    Employee::create($request->all());

        return redirect()->route('employees.index')->with('success','Employee has been created successfully.');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Employee  $Employee
    * @return \Illuminate\Http\Response
    */
    public function show() : View
    {
        return view('employees.create', [
            'employees' => DB::table('employees')->paginate(15)
        ]);
        // return view('employees.show',compact('employee'));
    
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Employee  $Employee
    * @return \Illuminate\Http\Response
    */
    public function edit(Employee $employee )
    {
   
        return view('employees.edit',compact('employee'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Employee  $Employee
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required|digits:10|numeric',
            'gender' => 'required',
        ]);
        
        $employee->fill($request->post())->save();

        return redirect()->route('employees.index')->with('success','Employee Has Been updated successfully');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Employee  $Employee
    * @return \Illuminate\Http\Response
    */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success','Employee has been deleted successfully');
    }
}
