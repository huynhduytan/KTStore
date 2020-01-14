<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kho', function (Blueprint $table) {
            $table->tinyIncrements('k_ma');            
            $table->string('k_ten')->comment('tên kho');
            $table->string('k_diachi');
            $table->unsignedTinyInteger('nv_phutrach');

            $table->unique(['k_ten']);
            $table->foreign('nv_phutrach')->references('nv_ma')->on('nhanvien')->onDelete('CASCADE')->onUpdate('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kho');
    }
}
