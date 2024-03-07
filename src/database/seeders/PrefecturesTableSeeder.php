<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrefecturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'prefecture_name' => '東京都'
        ];
        DB::table('prefectures')->insert($param);

        $param = [
            'prefecture_name' => '大阪府'
        ];
        DB::table('prefectures')->insert($param);

        $param = [
            'prefecture_name' => '福岡県'
        ];
        DB::table('prefectures')->insert($param);
    }
}
