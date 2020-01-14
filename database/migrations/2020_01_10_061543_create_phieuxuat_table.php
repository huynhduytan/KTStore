<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhieuxuatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieuxuat', function (Blueprint $table) {
            $table->bigIncrements('px_ma');
            $table->string('px_soHoaDon', 15);
            $table->dateTime('px_ngayXuatKho')->nullable()->default(NULL);
            $table->unsignedTinyInteger('nv_nguoiLapPhieu');
            $table->dateTime('px_ngayLapPhieu')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Ngay` lập phiếu xuất kho');
            $table->unsignedTinyInteger('nv_thuKho')->default('1')->comment('Thủ kho: 1-chưa phân công');
            $table->tinyInteger('px_trangThai')->default('2')->comment('Trạng thái phiếu xuất: 1-khóa, 2-lập phiếu, 3-thanh toán, 4-xuất kho');
            $table->text('px_ghiChu');

            $table->unique(['px_soHoaDon']);
            $table->foreign('nv_nguoiLapPhieu')->references('nv_ma')->on('nhanvien')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('nv_thuKho')->references('nv_ma')->on('nhanvien')->onDelete('CASCADE')->onUpdate('CASCADE');

            //thêm httt, xuat tu kho nào
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phieuxuat');
    }
}
