<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MaritalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marital_status')->insert([
            [
                'marital_status_id'=>1,
                'marital_status_description'=>'Unmarried'
            ],
            [
                'marital_status_id' => 2,
                'marital_status_description' => 'Married'
            ], [
                'marital_status_id' => 3,
                'marital_status_description' => 'Widow/Wodower'
            ], [
                'marital_status_id' => 4,
                'marital_status_description' => 'Divorced'
            ], [
                'marital_status_id' => 5,
                'marital_status_description' => 'Seperated'
            ],
        ]);
    }
    }

