<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //系统网站配置
        Schema::create('system_config', function(Blueprint $table)
        {
            //$table->engine = 'InnoDB';
            $table->increments('id');

            $table->string('site_logo')->nullable()->comment('网站logo');
            $table->string('m_site_logo')->nullable()->comment('手机站网站logo');
            $table->string('site_name', 150)->nullable()->comment('网站名称');
            $table->string('site_title', 150)->nullable()->comment('网站标题');
            $table->string('keyword')->nullable()->comment('关键字');
            $table->string('phone1', 50)->nullable()->comment('客户电话1');
            $table->string('phone2', 50)->nullable()->comment('客户电话2');
            $table->string('site_domain')->nullable()->comment('网站主域名');
            $table->string('qq', 50)->nullable()->comment('qq');
            $table->string('service_link')->nullable()->comment('客服链接');
            $table->string('app_link')->nullable()->comment('APP链接');
            $table->string('wap_qrcode')->nullable()->comment('APP链接');
            $table->string('pic_link')->nullable()->comment('pic链接');
            //
            $table->tinyInteger('is_maintain')->default(0)->comment('0 正常1维护');
            $table->string('maintain_desc')->nullable()->comment('维护提示语');

            //活跃用户月充值金额
            $table->decimal('active_member_money', 16, 2)->default(0)->comment('活跃用户月充值金额');

            //支付宝账号
            $table->string('alipay_nickname')->nullable()->comment('支付宝昵称');
            $table->string('alipay_account')->nullable()->comment('支付宝账号');
            $table->string('alipay_qrcode')->nullable()->comment('支付宝 二维码图片');
            //微信支付
            $table->string('wechat_nickname')->nullable()->comment('微信昵称');
            $table->string('wechat_account')->nullable()->comment('微信账号');
            $table->string('wechat_qrcode')->nullable()->comment('微信 二维码图片');

            //QQ支付
            $table->string('qq_nickname')->nullable()->comment('微信昵称');
            $table->string('qq_account')->nullable()->comment('微信账号');
            $table->string('qq_qrcode')->nullable()->comment('微信 二维码图片');

            $table->tinyInteger('is_qq_on')->default(0)->comment('0上线1下线');
            $table->tinyInteger('is_alipay_on')->default(0)->comment('0上线1下线');
            $table->tinyInteger('is_wechat_on')->default(0)->comment('0上线1下线');
            $table->tinyInteger('is_bankpay_on')->default(0)->comment('0上线1下线');
            $table->tinyInteger('is_thirdpay_on')->default(1)->comment('0上线1下线');

            //第三方支付
            $table->string('third_version', 50)->nullable()->comment('版本');
            $table->string('third_userid', 150)->nullable()->comment('id');
            $table->string('third_userkey', 150)->nullable()->comment('key');
            $table->string('third_pay_url')->nullable()->comment('提交链接');

            $table->string('web_domain')->nullable()->comment('网站域名');

            //短信验证
            $table->tinyInteger('is_sms_on')->default(1)->comment('0上线1下线');
            $table->string('sms_id')->nullable()->comment('短信 ID');
            $table->string('sms_key')->nullable()->comment('短信 key');
            $table->string('sms_token')->nullable()->comment('短信 token');
            $table->string('sms_temp_id')->nullable()->comment('模板 ID');

            $table->string('alert_img')->nullable()->comment('弹框图片');
            $table->tinyInteger('is_alert_on')->default(1)->comment('0上线1下线');

            $table->string('left_img')->nullable()->comment('左侧悬浮图片');
            $table->tinyInteger('is_left_on')->default(1)->comment('0上线1下线');

            $table->string('right_img')->nullable()->comment('右侧悬浮图片');
            $table->tinyInteger('is_right_on')->default(1)->comment('0上线1下线');
            $table->tinyInteger('is_ctr_on')->default(1)->comment('0上线1下线');

            $table->decimal('big_amount',16,2)->default(10000)->comment('');
            $table->unsignedInteger('transfer_times')->default(5)->comment('');


            $table->tinyInteger('is_transfer_on')->default(0)->comment('');

            $table->timestamps();
        });

        //ip 限制
        Schema::create('black_list_ip', function(Blueprint $table)
        {
            //$table->engine = 'InnoDB';
            $table->increments('id');

            $table->string('ip')->comment('IP 地址');
            $table->text('remark')->nullable()->comment('备注');

            $table->timestamps();
        });

        //公告
        Schema::create('system_notice', function(Blueprint $table)
        {
            //$table->engine = 'InnoDB';
            $table->increments('id');

            $table->string('title', 50)->nullable()->comment('标题 系统公告 活动公告');
            $table->string('content')->nullable()->comment('公告内容');
            $table->integer('sort')->default(0)->comment('排序');

            $table->string('url')->nullable()->commnet('跳转链接');

            $table->tinyInteger('on_line')->default(1)->comment('0上线 1下线');

            $table->timestamps();
        });

        Schema::create('bank_cards', function (Blueprint $table) {
            // $table->engine = 'InnoDB';
            $table->COMMENT = '银行卡';
            $table->increments('id');

            $table->string('card_no', 150)->comment('卡号');
            $table->tinyInteger('card_type')->default(1)->comment('卡类型 储蓄卡');
            $table->integer('bank_id')->comment('银行ID');
            $table->string('phone', 50)->nullable()->comment('办卡预留手机号');
            $table->string('username', 150)->comment('持卡人姓名');
            $table->string('bank_address')->nullable()->comment('持卡人姓名');

            $table->tinyInteger('on_line')->default(1)->comment('0 上线1下线');

            $table->timestamps();
        });

        Schema::create('feedback', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('member_id')->comment('');
            $table->tinyInteger('type')->default(1)->comment('反馈类型');

            $table->text('content')->nullable()->comment('内容');

            $table->string('phone')->nullable()->comment('手机');

            $table->tinyInteger('is_read')->default(0)->comment('0未读1已读');

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
