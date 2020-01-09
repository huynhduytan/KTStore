<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhieunhapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieunhap', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('pn_ma')->comment('Mã phiếu nhập');
            $table->bigIncrements('sp_ma')->comment('Mã sản phẩm');
            $table->string('sp_ten', 191)->comment('Tên sản phẩm # Tên sản phẩm');
            $table->string('pn_soluong')->comment('Số lượng nhập');
            $table->unsignedInteger('pn_dongia')->default('0')->comment('Đơn giá nhập');
            $table->string('pn_vat')->comment('thuế nhập');
            $table->unsignedInteger('pn_thanhtien')->comment('Thành tiền nhập hàng');
            $table->text('pn_ghiChu')->comment('Ghi chú # Ghi chú phiếu nhập');

            $table->foreign('sp_ma')->references('sp_ma')->on('sanpham')->onDelete('cascade')->onUpdate('cascade'); 
            $table->foreign('sp_ten')->references('sp_ten')->on('sanpham')->onDelete('cascade')->onUpdate('cascade'); 

            
        });
        DB::statement("ALTER TABLE `phieunhap` comment 'Phiếu nhập # Phiếu nhập'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phieunhap');
    }
}
