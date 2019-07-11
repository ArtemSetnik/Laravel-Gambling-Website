<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApiTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api', function(Blueprint $table)
        {
            //$table->engine = 'InnoDB';
            $table->increments('id');

            $table->string('api_name', 150)->comment('平台名称');
            $table->string('api_title', 150)->nullable()->comment('平台描述名称');
            $table->string('api_domain')->nullable()->comment('请求的基础域名');
            $table->string('api_id')->nullable()->comment('');
            $table->string('api_key')->nullable()->comment('key 值');
            $table->string('api_token')->nullable()->comment('');
            $table->string('api_username')->nullable()->comment('');
            $table->string('api_password')->nullable()->comment();
            $table->decimal('api_money', 16, 2)->default(0)->comment('余额');

            $table->tinyInteger('is_demo')->default(0)->comment('0正式 1测试');

            $table->string('prefix', 50)->nullable()->comment('账号前缀');

            $table->tinyInteger('on_line')->default(0)->comment('0上线1下线');

            $table->unsignedInteger('sort')->default(10)->comment('排序');

            $table->tinyInteger('type')->default(1)->comment('类型1b2d3bs4T');

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
