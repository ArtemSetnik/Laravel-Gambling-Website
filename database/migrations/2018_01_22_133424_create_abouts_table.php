<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->increments('id');


            $table->string('title')->comment('标题');
            $table->string('subtitle')->nullable()->comment('副标题');
            $table->string('title_img')->nullable()->comment('列表图片');
            $table->text('content')->nullable()->comment('活动说明');

            $table->tinyInteger('type')->default(1)->comment('1关于我们');


            $table->tinyInteger('on_line')->default(1)->comment('0上线1下线');
            $table->tinyInteger('is_hot')->default(0)->comment('0正常1热门');

            $table->unsignedInteger('sort')->default(1)->comment('排序');

            $table->text('title_content')->nullable()->comment('标题内容');
            $table->text('rule_content')->nullable()->comment('活动规则');

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
        Schema::dropIfExists('abouts');
    }
}
