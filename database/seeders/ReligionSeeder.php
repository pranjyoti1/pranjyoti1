<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('religions')->insert([
            [
                'religion_id' => 1,
                'religion_description' => 'Buddhism'

            ],
            [
                'religion_id' => 2,
                'religion_description' => 'Christianity'

            ],     [
                'religion_id' => 3,
                'religion_description' => 'Hinduism'

            ],     [
                'religion_id' => 4,
                'religion_description' => 'Islam'

            ],     [
                'religion_id' => 5,
                'religion_description' => 'Jainism'

            ],     [
                'religion_id' => 6,
                'religion_description' => 'Sikhism'

            ],     [
                'religion_id' => 7,
                'religion_description' => 'Others'

            ],
        ]);
    }
}

