<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_lists', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('api_id')->nullable()->comment('平台ID');
            $table->string('api_name', 100)->nullable()->comment('游戏名称');
            $table->string('name', 100)->nullable()->comment('游戏名称');
            $table->string('en_name', 100)->nullable()->comment('英文名称');

            $table->tinyInteger('type')->default(1)->comment('游戏分类');

            $table->tinyInteger('client_type')->default(1)->comment('1PC 2手机');

            $table->tinyInteger('game_type')->default(1)->comment('游戏类型');

            $table->string('game_id', 100)->nullable()->comment('游戏ID');
            $table->string('game_name', 100)->nullable()->comment('游戏名');

            $table->string('img_path')->nullable()->comment('手机图片');

            $table->string('img_phone')->nullable()->comment('手机图片');

            $table->string('img_pc')->nullable()->comment('PC图片');

            $table->tinyInteger('on_line')->default(1)->comment('0上线1下线');
            $table->tinyInteger('is_hot')->default(0)->comment('0正常1热门');

            $table->unsignedInteger('sort')->default(100)->comment('排序');

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
        Schema::dropIfExists('game_lists');
    }
}
