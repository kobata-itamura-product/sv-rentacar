<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //追加
use Illuminate\Support\Str; //追加
use Illuminate\Support\Facades\Hash; //追加

class carmaker extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('makers')->insert([
            [
                'maker_id' => '1',
                'maker_name' => 'Mercedes-Benz',
            ],
            [
                'maker_id' => '2',
                'maker_name' => 'Mercedes-Benz',
            ],
            [
                'maker_id' => '3',
                'maker_name' => 'Audi',
            ],
            [
                'maker_id' => '4',
                'maker_name' => 'Volkswagen',
            ],
            [
                'maker_id' => '5',
                'maker_name' => 'PORSCHE',
            ],
            [
                'maker_id' => '6',
                'maker_name' => 'Maserati',
            ],
            [
                'maker_id' => '7',
                'maker_name' => 'BMW',
            ],
            [
                'maker_id' => '8',
                'maker_name' => 'MINI',
            ],
            [
                'maker_id' => '9',
                'maker_name' => 'LEXUS',
            ],
            [
                'maker_id' => '10',
                'maker_name' => 'TOYOTA',
            ],
            [
                'maker_id' => '11',
                'maker_name' => 'NISSAN',
            ],
        ]);
    }
}

