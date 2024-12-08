<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use League\Csv\Reader;

class WomensdbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // CSV ファイルのパス
        $csvFilePath = database_path('db.csv');

        // CSV を読み込む
        $csv = Reader::createFromPath($csvFilePath, 'r');
        $csv->setHeaderOffset(0); // ヘッダー行をスキップ

        // 各行をテーブルに挿入
        foreach ($csv as $record) {
            DB::table('womensdb')->insert([
                'com_no' => $record['com_no'],
                'a_salary' => $record['a_salary'],
                'a_age' => $record['a_age'],
                'rev' => $record['rev'],
                'op_prof_mar' => $record['op_prof_mar'],
                'net_prof_mar' => $record['net_prof_mar'],
                'com_name' => $record['com_name'],
            ]);
        }
    }
}

