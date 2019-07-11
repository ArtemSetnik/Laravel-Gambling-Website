<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title')->comment('标题');
            $table->string('subtitle')->nullable()->comment('副标题');
            $table->string('title_img')->nullable()->comment('列表图片');
            $table->text('content')->nullable()->comment('活动说明');

            $table->tinyInteger('type')->default(3)->comment('1返水2红利3充值');

            $table->decimal('money')->nullable()->comment('活动所需达到的金额');

            $table->string('rate', 50)->nullable()->comment('赠送比例');

            $table->decimal('gift_limit_money')->nullable()->comment('赠送的上限金额');

            $table->string('date_desc')->nullable()->comment('活动时间描述');

            $table->timestamp('start_at')->nullable()->comment('活动开始时间');
            $table->timestamp('end_at')->nullable()->comment('活动截止时间');

            $table->tinyInteger('on_line')->default(1)->comment('0上线1下线');
            $table->tinyInteger('is_hot')->default(0)->comment('0正常1热门');

            $table->unsignedInteger('sort')->default(1)->comment('排序');

            $table->text('title_content')->nullable()->comment('标题内容');
            $table->text('rule_content')->nullable()->comment('活动规则');


            $table->timestamps();
        });

        Schema::create('api_activity', function (Blueprint $table) {
            $table->integer('api_id')->unsigned();
            $table->integer('activity_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activities');
    }
}
