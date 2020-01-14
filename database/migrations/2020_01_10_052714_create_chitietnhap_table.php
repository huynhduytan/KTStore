<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietnhapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietnhap', function (Blueprint $table) {
            $table->unsignedBigInteger('pn_ma');
            $table->unsignedBigInteger('sp_ma');
            $table->unsignedTinyInteger('k_ma')->comment('kho nhập vào');
            $table->unsignedTinyInteger('dvt_ma')->comment('Đơn vị tính');

            // $table->unsignedTinyInteger('m_ma');
            $table->unsignedSmallInteger('ctn_soLuong')->default('1')->comment('Số lượng sản phẩm nhập kho');
            $table->unsignedInteger('ctn_donGia')->default('1')->comment('Giá nhập kho của sản phẩm');
            
           // $table->primary(['pn_ma', 'sp_ma', 'm_ma']);
            $table->primary(['pn_ma', 'sp_ma']);
            //$table->foreign('m_ma')->references('m_ma')->on('mau')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('pn_ma')->references('pn_ma')->on('phieunhap')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('sp_ma')->references('sp_ma')->on('sanpham')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('dvt_ma')->references('dvt_ma')->on('donvitinh')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('k_ma')->references('k_ma')->on('kho')->onDelete('CASCADE')->onUpdate('CASCADE');

            //phieunhapchitiet: id, phieunhapid, idkho, sp_Ten, soluongsp, gianhap, donvitinh

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitietnhap');
    }
}
