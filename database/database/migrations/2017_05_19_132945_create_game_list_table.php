<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tcg_game_list', function (Blueprint $table) {
            $table->increments('id');

            $table->tinyInteger('displayStatus')->default(0)->comment('');
            $table->string('gameType', 150)->nullable()->comment('游戏类型');
            $table->string('name', 150)->nullable()->comment('中文名称');
            $table->string('gameName', 150)->nullable()->comment('游戏名称');
            $table->string('tcgGameCode', 150)->nullable()->comment('游戏代码');
            $table->string('productCode', 150)->nullable()->comment('产品名称');
            $table->string('platform', 150)->nullable()->comment('支持的平台 flash,html5');
            $table->integer('productType')->nullable()->comment('产品编号');
            $table->integer('sort')->default(1000)->comment('排序');
            $table->tinyInteger('on_line')->default(0)->comment('0上线1下线');

            $table->string('client_type', 50)->default('pc')->comment();
            $table->string('img')->nullable()->comment();

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
        //
    }
}
