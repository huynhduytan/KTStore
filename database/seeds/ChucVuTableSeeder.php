<?php

use Illuminate\Database\Seeder;

class ChucVuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];
        
        // //1-Quản trị, 2-Kế toán, 3-Thủ kho
        
        array_push($list, [
            'nv_ma'        => 1,
            'role_id'         => 2
        ]);
        array_push($list, [
            'nv_ma'        => 2,
            'role_id'         => 2
        ]);
        array_push($list, [
            'nv_ma'        => 3,
            'role_id'         => 3
        ]);
        array_push($list, [
            'nv_ma'        => 4,
            'role_id'         => 3
        ]);
        
        // Admin
        array_push($list, [
            'nv_ma'        => 100,
            'role_id'         => 1
        ]);
        DB::table('chucvu')->insert($list);
    }
    
}
