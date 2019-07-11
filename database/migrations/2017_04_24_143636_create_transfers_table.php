<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //额度转换表
        Schema::create('transfers', function(Blueprint $table)
        {
            //$table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('bill_no')->nullable();
            $table->boolean('api_type')->default(1)->comment('1 AG账户 2BBIN 账户 3MG账户');
            $table->integer('member_id')->comment('用户ID');
            $table->tinyInteger('transfer_type')->nullable()->default(0)->comment('0 转入游戏 1转出游戏');
            $table->tinyInteger('type')->default(1)->comment('转换类型 1 中心账户转入MG账户');
            $table->decimal('money', 16, 2)->default(0)->comment('用户填写的转换金额');
            $table->decimal('diff_money', 16,2)->default(0)->comment('差价金额，即红利');
            $table->decimal('real_money', 16, 2)->default(0)->comment('实际转换金额');
            $table->decimal('before_money', 16)->default(0)->comment('转账前的金额');
            $table->decimal('after_money', 16)->default(0)->comment('转账后的金额');
            $table->string('transfer_in_account')->nullable()->comment('转入账户');
            $table->string('transfer_out_account')->nullable()->comment('转出账户');
            $table->tinyInteger('status')->default(0);
            $table->text('result')->nullable();

            $table->timestamps();
        });

        //红利表
        Schema::create('dividend', function(Blueprint $table)
        {
            //$table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->default(0)->comment('用户ID');
            $table->integer('member_id')->comment('用户ID');
            $table->tinyInteger('type')->default(1)->comment('转换类型 1充值红利2平台红利3返水');
            $table->string('describe')->nullable()->comment('描述');
            $table->decimal('money', 16, 2)->default(0)->comment('金额');
            $table->decimal('before_money', 16)->default(0)->comment('发生前的金额');
            $table->decimal('after_money', 16)->default(0)->comment('发生后的金额');
            $table->tinyInteger('status')->default(0)->comment('状态');
            $table->string('remark')->nullable()->comment('备注');

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
