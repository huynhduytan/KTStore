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
            $table->engine = 'InnoDB';
            $table->bigIncrements('px_ma')->comment('Mã phiếu xuất');
            $table->bigIncrements('sp_ma')->comment('Mã sản phẩm');
            $table->string('sp_ten', 191)->comment('Tên sản phẩm # Tên sản phẩm');
            $table->string('px_soluong')->comment('Số lượng nhập');
            $table->unsignedInteger('px_dongia')->default('0')->comment('Đơn giá nhập');
            $table->string('px_vat')->comment('thuế nhập');
            $table->unsignedInteger('px_thanhtien')->comment('Thành tiền nhập hàng');
            $table->text('px_ghiChu')->comment('Ghi chú # Ghi chú phiếu nhập');

            $table->foreign('sp_ma')->references('sp_ma')->on('sanpham')->onDelete('cascade')->onUpdate('cascade'); 
            $table->foreign('sp_ten')->references('sp_ten')->on('sanpham')->onDelete('cascade')->onUpdate('cascade'); 

            
        });
        DB::statement("ALTER TABLE `phieuxuat` comment 'Phiếu nhập # Phiếu nhập'");
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
