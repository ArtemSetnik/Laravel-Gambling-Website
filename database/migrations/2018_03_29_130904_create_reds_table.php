<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reds', function (Blueprint $table) {
            $table->increments('id');

            $table->decimal('min_amount', 16, 2)->defult(0)->comment();
            $table->decimal('max_amount', 16, 2)->defult(0)->comment();

            $table->tinyInteger('times')->defult(1)->comment();

            $table->tinyInteger('min_rate')->defult(1)->comment();
            $table->tinyInteger('max_rate')->defult(1)->comment();

            $table->tinyInteger('on_line')->default(0)->comment('0上线1下线');

            $table->unsignedInteger('sort')->default(10)->comment('排序');

            $table->tinyInteger('type')->default(1)->comment('');

            $table->timestamps();
        });

        Schema::create('red_logs', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('recharge_id')->comment('');
            $table->decimal('money',16 ,2)->default(0)->comment('');

            $table->timestamps();
        });

        Schema::create('distill_red_logs', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('recharge_id')->comment('');
            $table->tinyInteger('times')->default(0)->comment('');

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
        Schema::dropIfExists('reds');
    }
}
