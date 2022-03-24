<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CasteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('castes')->insert([
            [
                'caste_id'=>1,
                'caste_description'=>'General'
            ],
            [
                'caste_id' => 2,
                'caste_description' => 'OBC'
            ], [
                'caste_id' => 3,
                'caste_description' => 'Others'
            ], [
                'caste_id' => 4,
                'caste_description' => 'SC'
            ], [
                'caste_id' => 5,
                'caste_description' => 'ST'
            ],
        ]);
    }
    }

