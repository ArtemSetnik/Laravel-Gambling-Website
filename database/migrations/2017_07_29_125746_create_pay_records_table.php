<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pay_records', function (Blueprint $table) {
            $table->increments('id');

            $table->string('order_no',150)->unique()->comment('订单号 唯一');
            $table->string('opeNo')->nullable()->comment('支付订单号');
            $table->decimal('money', 16, 2)->default(0)->comment('金额');
            $table->integer('member_id')->comment('用户 ID');
            $table->tinyInteger('status')->default(0)->comment('状态');
            $table->timestamp('payTime')->nullable()->comment('支付时间');
            $table->tinyInteger('pay_type')->default(1)->comment('1网银支付2扫码支付');
            $table->string('bankId')->nullable()->comment('若为银行卡支付 银行代码');
            $table->string('typeId')->nullable()->comment('若为扫码 1支付宝2微信');
            $table->string('clientIp')->nullable()->comment('');

            $table->string('before_request_result')->nullable()->comment();
            $table->text('after_request_result')->nullable()->comment();

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
        Schema::dropIfExists('pay_records');
    }
}
