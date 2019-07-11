<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCtrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ctrs', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('api_id')->comment('接口');
            $table->string('rate')->comment('概率');
            $table->tinyInteger('type')->default(1)->comment('类型');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ctrs');
    }
}
