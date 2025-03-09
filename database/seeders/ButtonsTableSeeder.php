<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ButtonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $buttons = [];
        for ($i = 1; $i <= 9; $i++) {
            $buttons[] = [
                'id' => $i,
                'title' => '',
                'link' => '',
                'color' => 'white',
            ];
        }

        DB::table('buttons_data')->insert($buttons);
    }
}
