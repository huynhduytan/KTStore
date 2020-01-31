<?php

use Illuminate\Database\Seeder;

class KhoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [
            [
                'k_ma'       => 1,
                'k_ten'      => "Kho A",
                'k_diachi' => "Phường 1, Cần Thơ",
                'nv_phutrach'   => 4,
            ], 
            [
                'k_ma'       => 2,
                'k_ten'      => "Kho B",
                'k_diachi' => "Phường 2, Cần Thơ",
                'nv_phutrach'   => 4,
            ], 
            [
                'k_ma'       => 3,
                'k_ten'      => "Kho C",
                'k_diachi' => "Phường 3, Cần Thơ",
                'nv_phutrach'   => 4,
            ], 
        ];
        DB::table('kho')->insert($list);
    }
}
