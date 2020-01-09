<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhaphangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhaphang', function (Blueprint $table) {
            $table->bigIncrements('nh_ma')->comment('Ma nhập hàng');
            $table->datetime('nh_ngaylap')->commentO('Ngày lập ');
            $table->bigIncrements('sp_ma')->comment('Mã sản phẩm');
            $table->string('sp_ten', 191)->comment('Tên sản phẩm # Tên sản phẩm');  
            $table->string('nh_soluong',50)->default('100;100')->comment('so luong');
            $table->unsignedInteger('sp_giaGoc')->default('0')->comment('Giá gốc # Giá gốc của sản phẩm');
            $table->unsignedInteger('nh_thanhtien')->default('0')->comment('Thanh tien');
            $table->unsignedInteger('nh_vat')->default('0')->comment('Giá thuế');
            $table->unsignedInteger('nh_phaitra')->default('0')->comment('Tiền phải trả');
            $table->smallIncrements('ncc_ma')->comment('Mã nhà cung cấp, 1-Tự tạo');
            $table->string('ncc_ten', 100)->comment('Tên nhà cung cấp # Tên nhà cung cấp');
            $table->text('nh_ghichu')->comment('ghi chú nhập');
            
            $table->foreign('sp_ma')->references('sp_ma')->on('sanpham')->onDelete('cascade')->onUpdate('cascade'); 
            $table->foreign('sp_ten')->references('sp_ten')->on('sanpham')->onDelete('cascade')->onUpdate('cascade'); 
            $table->foreign('sp_giaGoc')->references('sp_giaGoc')->on('sanpham')->onDelete('cascade')->onUpdate('cascade');   
            $table->foreign('ncc_ma')->references('ncc_ma')->on('nhacungcap')->onDelete('cascade')->onUpdate('cascade'); 
            $table->foreign('ncc_ten')->references('ncc_ten')->on('nhacungcap')->onDelete('cascade')->onUpdate('cascade');    
   

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhaphang');
    }
}
