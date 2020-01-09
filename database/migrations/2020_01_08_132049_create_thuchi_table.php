<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThuchiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thuchi', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('tc_ma')->comment('Mã góp ý');
            $table->dateTime('tc_thoiGian')->comment('Thời điểm # Thời điểm ');
            $table->text('tc_noiDung')->comment(' Nội dung thu/chi');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thuchi');
    }
}
