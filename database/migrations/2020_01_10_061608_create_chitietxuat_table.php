<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietxuatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietxuat', function (Blueprint $table) {
            $table->unsignedBigInteger('px_ma');
            $table->unsignedBigInteger('sp_ma');
            $table->unsignedTinyInteger('dvt_ma')->comment('Đơn vị tính');

            //$table->unsignedTinyInteger('m_ma');
            $table->unsignedSmallInteger('ctx_soLuong')->default('1')->comment('Số lượng sản phẩm nhập kho');
            $table->unsignedInteger('ctx_donGia')->default('1')->comment('Giá nhập kho của sản phẩm');
            $table->unsignedTinyInteger('k_ma')->comment('kho xuất');
            $table->unsignedTinyInteger('tt_ma')->comment('thanh toán bằng hình thức gì');
            
            //$table->primary(['px_ma', 'sp_ma', 'm_ma']);
            $table->primary(['px_ma', 'sp_ma']);
            //$table->foreign('m_ma')->references('m_ma')->on('mau')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('px_ma')->references('px_ma')->on('phieuxuat')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('sp_ma')->references('sp_ma')->on('sanpham')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('dvt_ma')->references('dvt_ma')->on('donvitinh')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('tt_ma')->references('tt_ma')->on('thanhtoan')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('k_ma')->references('k_ma')->on('kho')->onDelete('CASCADE')->onUpdate('CASCADE');
        //khoxuatid
        //báo cáo hàng tồn 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitietxuat');
    }
}
