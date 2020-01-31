<?php
use Illuminate\Database\Seeder;
use Illuminate\PhpVnDataGenerator\VnBase;
use Illuminate\PhpVnDataGenerator\VnFullname;
use Illuminate\PhpVnDataGenerator\VnPersonalInfo;
use Carbon\Carbon;
class ThanhtoanTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker= Faker\Factory::create('vi_VN');
        $now = new Carbon('2019-11-28','Asia/Ho_Chi_Minh');
        $list= [];
        for($i=1; $i <=100; $i++){
            $create = $now->copy()->addSeconds($faker->numberBetween(1,259200));
            $updated = $now->copy()->addSeconds($faker->numberBetween(300,172000));
            $data = [
               // 'tt_ten'=>$faker->text(100);
                'tt_dienGiai'=>$faker->paragraph(),
                'tt_taomoi'=>$create,
                'tt_capnhat'=>$create,
                'tt_trangthai'=>$faker->numberBetween(1, 2)
            ];
        
        array_push($list,$data);
        $now = $updated->copy();
         }
         DB::table('thanhtoan')->insert($list);
    }
}