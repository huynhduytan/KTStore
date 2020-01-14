<?php

use Illuminate\Database\Seeder;

class LoaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];
        $types = ["Addidas", "Nike"  ];
        sort($types);
        $today = new DateTime('2020-01-14 13:00:00');
        for ($i=1; $i <= count($types); $i++) {
            array_push($list, [
                'l_ma'      => $i,
                'l_ten'     => $types[$i-1],
                'l_ngaytaoMoi'  => $today->format('Y-m-d H:i:s'),
                'l_ngaycapNhat' => $today->format('Y-m-d H:i:s')
            ]);
        }
        DB::table('loai')->insert($list);

    }
}
