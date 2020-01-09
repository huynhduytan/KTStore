<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXuathangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xuathang', function (Blueprint $table) {
            $table->bigIncrements('xk_ma')->comment('Ma nhập hàng');
            $table->datetime('xk_ngaylap')->commentO('Ngày lập ');
            $table->bigIncrements('sp_ma')->comment('Mã sản phẩm');
            $table->string('sp_ten', 191)->comment('Tên sản phẩm # Tên sản phẩm');  
            $table->string('xk_ton')->comment('Sản phẩm tồn trong kho');
            $table->string('xk_soluong',50)->default('100;100')->comment('so luong');
            $table->unsignedInteger('sp_giaGoc')->default('0')->comment('Giá gốc # Giá gốc của sản phẩm');            $table->unsignedInteger('sp_giaBan')->default('0')->comment('Giá bán # Giá bán hiện tại của sản phẩm');
            $table->unsignedInteger('sp_giaBan')->default('0')->comment('Giá bán # Giá bán hiện tại của sản phẩm');
            $table->unsignedInteger('xk_phaithu')->default('0')->comment('Tiền phải thu');
            $table->unsignedInteger('xk_vat')->default('0')->comment('Giá thuế');
            $table->bigIncrements('km_ma')->comment('Ma khuyen mai');
            $table->bigIncrements('kh_ma')->comment('Mã khách hàng');
            $table->string('kh_hoTen', 100)->comment('Họ tên # Họ tên');
            $table->string('xh_thukhach')->default('0')->comment('Tiền phải thu khách');
            $table->text('xh_ghichu')->comment('ghi chú nhập');
            
            $table->foreign('sp_ma')->references('sp_ma')->on('sanpham')->onDelete('cascade')->onUpdate('cascade'); 
            $table->foreign('sp_ten')->references('sp_ten')->on('sanpham')->onDelete('cascade')->onUpdate('cascade'); 
            $table->foreign('sp_giaGoc')->references('sp_giaGoc')->on('sanpham')->onDelete('cascade')->onUpdate('cascade');   
            $table->foreign('sp_giaBan')->references('sp_giaBan')->on('sanpham')->onDelete('cascade')->onUpdate('cascade'); 
            $table->foreign('km_ma')->references('km_ma')->on('khuyenmai')->onDelete('cascade')->onUpdate('cascade');    
            $table->foreign('kh_ma')->references('kh_ma')->on('khachhang')->onDelete('cascade')->onUpdate('cascade');    
            $table->foreign('kh_hoTen')->references('kh_hoTen')->on('khachhang')->onDelete('cascade')->onUpdate('cascade');    

        });
        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xuathang');
    }
}
