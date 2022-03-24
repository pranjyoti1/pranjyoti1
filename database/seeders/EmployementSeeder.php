<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EmployementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employment_status')->insert([
            [
                'emp_status_id'=>1,
                'emp_status_description'=>'Employed'
            ],
            [
                'emp_status_id' => 2,
                'emp_status_description' => 'Unemployed'
            ], [
                'emp_status_id' => 3,
                'emp_status_description' => 'Apprentice - Act'
            ], [
                'emp_status_id' => 4,
                'emp_status_description' => 'Apprentice - Non Act'
            ], [
                'emp_status_id' => 5,
                'emp_status_description' => 'Employed - Private'
            ], [
                'emp_status_id' => 6,
                'emp_status_description' => 'Employed - Full Time Regular'
            ],
            [
                'emp_status_id' => 7,
                'emp_status_description' => 'Employed - Full Time Temporary'
            ], [
                'emp_status_id' => 8,
                'emp_status_description' => 'Employed Part Time Regular'
            ], [
                'emp_status_id' => 9,
                'emp_status_description' => 'Employed Part Time Temporary'
            ],
            [
                'emp_status_id' => 10,
                'emp_status_description' => 'Self Employed'
            ], [
                'emp_status_id' => 11,
                'emp_status_description' => 'Employed on Daily Wage'
            ],
        ]);
    }
    }

