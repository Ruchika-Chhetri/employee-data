<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            ['name' => 'Aron', 'email' => 'a_employee@gmail.in', 'phone'=> '9874563210', 'gender'=>'male'],
            ['name' => 'Kashyap', 'email' => 'c_employee@gmail.in', 'phone'=> '9874563210', 'gender'=>'female'],
            ['name' => 'Rohan', 'email' => 'e_employee@gmail.in', 'phone'=> '9874563210', 'gender'=>'male'],
            ['name' => 'Somiya', 'email' => 'm_employee@gmail.in', 'phone'=> '9874563210', 'gender'=>'female'],
            ['name' => 'Rahul', 'email' => 'n_employee@gmail.in', 'phone'=> '9874563210', 'gender'=>'male'],
            ['name' => 'Mukund', 'email' => 'f_employee@gmail.in', 'phone'=> '9874563210', 'gender'=>'female'],
            ['name' => 'Krishna', 'email' => 'b_employee@gmail.in', 'phone'=> '9874563210', 'gender'=>'male'],
            ['name' => 'Bala', 'email' => 'p_employee@gmail.in', 'phone'=> '9874563210', 'gender'=>'female'],
            ['name' => 'Ganesh', 'email' => 'l_employee@gmail.in', 'phone'=> '9874563210', 'gender'=>'male'],
            ['name' => 'Chandra', 'email' => 'k_employee@gmail.in', 'phone'=> '9874563210', 'gender'=>'female'],
            ['name' => 'Sushmita', 'email' => 't_employee@gmail.in', 'phone'=> '9874563210', 'gender'=>'male'],
            ['name' => 'Harish', 'email' => 's_employee@gmail.in', 'phone'=> '9874563210', 'gender'=>'female'],
            ['name' => 'Yadav', 'email' => 'd_employee@gmail.in', 'phone'=> '9874563210', 'gender'=>'male'],
            ['name' => 'Zeena', 'email' => 'y_employee@gmail.in', 'phone'=> '9874563210', 'gender'=>'female'],
            ['name' => 'Binod', 'email' => 'g_employee@gmail.in', 'phone'=> '9874563210', 'gender'=>'male'],
            ['name' => 'Rakhi', 'email' => 'Z_employee@gmail.in', 'phone'=> '9874563210', 'gender'=>'female'],
            ['name' => 'Lakshmi', 'email' => 'j_employee@gmail.in', 'phone'=> '9874563210', 'gender'=>'male'],
            ['name' => 'Karishma', 'email' => 'o_employee@gmail.in', 'phone'=> '9874563210', 'gender'=>'female'],
            ['name' => 'Prabha', 'email' => 'x_employee@gmail.in', 'phone'=> '9874563210', 'gender'=>'male'],

        ]);
    }
}
