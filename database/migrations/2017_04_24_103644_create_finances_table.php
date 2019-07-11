<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //财务表 充值即存款
        Schema::create('recharge', function(Blueprint $table)
        {
            //$table->engine = 'InnoDB';
            $table->integer('id', true);

            $table->string('bill_no')->comment('交易流水号');
            $table->integer('member_id')->comment('用户id');
            $table->string('name')->nullable()->comment('充值人名称、昵称');
            $table->decimal('money',16 ,2)->default(0)->comment('充值金额');
            $table->tinyInteger('payment_type')->default(1)->comment('转账类型 1支付宝2微信3银行转账');
            $table->string('account')->comment('账户 支付宝账户 微信账户 银行卡号 例子 ： 11231@qq.com');
            $table->string('payment_desc')->nullable()->commnet('转账类型描述 如：建设银行');
            $table->tinyInteger('status')->default(1)->comment('1待确认2充值成功3充值失败');
            $table->decimal('diff_money', 16, 2)->default(0)->comment('赠送金额');
            $table->decimal('before_money', 16, 2)->default(0)->comment('充值前金额');
            $table->decimal('after_money', 16, 2)->default(0)->comment('充值后金额');
            $table->decimal('score')->default(0)->comment('积分');
            $table->text('fail_reason')->nullable()->comment('失败原因');

            $table->timestamp('hk_at')->nullable()->comment('客户填写的汇款时间');
            $table->timestamp('confirm_at')->nullable()->comment('确认转账时间');

            $table->integer('user_id')->default(0)->comment('管理员ID');

            $table->timestamps();
        });

        //财务表 提款
        Schema::create('drawing', function(Blueprint $table)
        {
            //$table->engine = 'InnoDB';
            $table->integer('id', true);

            $table->string('bill_no')->comment('交易流水号');
            $table->integer('member_id')->comment('用户id');
            $table->string('name')->nullable()->comment('充值人名称、昵称');
            $table->decimal('money',16 ,2)->default(0)->comment('提款金额');
            $table->string('payment_desc')->nullable()->commnet('转账类型描述 如：建设银行');
            $table->string('account')->comment('账户 支付宝账户 微信账户 银行卡号');
            $table->tinyInteger('status')->default(1)->comment('1待确认2成功3失败');
            $table->decimal('before_money', 16, 2)->default(0)->comment('提款前金额');
            $table->decimal('after_money', 16, 2)->default(0)->comment('提款后金额');
            $table->decimal('score')->default(0)->comment('积分');
            $table->decimal('counter_fee', 16 , 2)->default(0)->comment('手续费');
            $table->text('fail_reason')->nullable()->comment('失败原因');
            //
            $table->string('bank_name')->nullable()->comment('银行名称');
            $table->string('bank_card')->nullable()->comment('银行卡号');
            $table->string('bank_address')->nullable()->comment('开户地址');

            $table->timestamp('confirm_at')->nullable()->comment('确认提款成功时间');

            $table->integer('user_id')->default(0)->comment('管理员ID');

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
        Schema::drop('huikuan');
    }
}
