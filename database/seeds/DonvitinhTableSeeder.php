<?php

use Illuminate\Database\Seeder;

class DonvitinhTableSeeder extends Seeder
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
                'dvt_ma'       => 1,
                'dvt_ten'      => "Kg",
                
            ], 
            
        ];
        DB::table('donvitinh')->insert($list);
    }
}
