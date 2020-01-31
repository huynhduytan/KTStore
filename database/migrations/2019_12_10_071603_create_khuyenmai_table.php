<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhuyenmaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khuyenmai', function (Blueprint $table) {
        $table->bigIncrements('km_ma')->comment('Ma khuyen mai');
        $table->string('km_ten',200)->comment('ten khuyen mai');
        $table->text('km_noidung')->comment('Noi dung khuyen mai');
        $table->datetime('km_batdau')->comment('bat dau khuyen mai');
        $table->datetime('km_ketthuc')->nullable()->comment('ket thuc khuyen mai');
        $table->string('km_giatri',50)->default('100;100')->comment('gia tri khuyen mai');
        $table->unsignedSmallInteger('nv_nguoilap')->comment('Nhan vien lap');
        $table->datetime('nv_ngaylap')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('nhan vien ngay lap');
        $table->unsignedSmallInteger('nv_kynhay')->default('1')->comment('nhan vien ky nhay');
        $table->datetime('km_ngaykynhay')->nullable()->comment('khuyen mai ngay ky nhay');
        $table->unsignedSmallInteger('nv_kyduyet')->default('1')->comment('nhan vien ky duyet');
        $table->datetime('km_ngayduyet')->nullable()->comment('ngay duyet khuyen mai');
        $table->timestamp('km_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('tao moi khuyen mai');
        $table->timestamp('km_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('cap nhat khuyen mai');
        $table->unsignedTinyInteger('km_trangthai')->default('2')->comment('trang thai khuyen mai');

        $table->foreign('nv_nguoiLap')->references('nv_ma')->on('nhanvien')->onDelete('cascade')->onUpdate('cascade'); 
        $table->foreign('nv_kyNhay')->references('nv_ma')->on('nhanvien')->onDelete('cascade')->onUpdate('cascade'); 
        $table->foreign('nv_kyDuyet')->references('nv_ma')->on('nhanvien')->onDelete('cascade')->onUpdate('cascade');    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khuyenmai');
    }
}
