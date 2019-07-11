<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            //$table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name',100)->unique();
            $table->string('real_name', 50)->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('qq')->nullable();
            $table->string('password');
            $table->string('original_password')->comment('原始密码');
            $table->tinyInteger('gender')->default(0)->comment('0男1女');
            $table->tinyInteger('is_daili')->default(0)->comment('1为代理');
            $table->integer('top_id')->default(0)->comment('上级 id');
            $table->string('invite_code', 100)->unique()->comment('邀请注册码');

            $table->string('qk_pwd', 100)->nullable()->comment('取款密码');

            $table->decimal('money',16,2)->default(0)->comment('中心账户余额');
            $table->decimal('fs_money',16,2)->default(0)->comment('反水账户余额');
            $table->decimal('total_amount',16,2)->default(0)->comment('平台总投注额');
            $table->integer('score')->default(0)->comment('积分');

            $table->string('register_ip')->nullable()->comment('注册IP');
            $table->string('last_login_ip')->nullable()->comment('最后登录ip');
            $table->timestamp('last_login_at')->nullable()->comment('最后登录时间');

            $table->string('bank_username')->nullable()->comment('开户人名字');
            $table->string('bank_name')->nullable()->comment('银行名称');
            $table->string('bank_branch_name')->nullable()->comment('开户行网点');
            $table->string('bank_card')->nullable()->comment('银行卡号');
            $table->string('bank_address')->nullable()->comment('开户地址');

            $table->tinyInteger('status')->default(0)->comment('状态');
            $table->tinyInteger('is_login')->default(0)->comment('0 未登录 1已登录');
            $table->string('o_password')->nullable()->comment('登录密码');
            $table->string('agent_uri')->nullable()->comment('代理链接');
            $table->string('agent_uri_pre')->nullable()->comment('代理链接前缀');

            $table->string('last_session', 100)->nullable()->comment('');

            $table->tinyInteger('is_tips_on')->default(1)->comment('是否开启登录提示');

            $table->tinyInteger('is_in_on')->default(1)->comment('是否内部账号');

            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });

        //用户登录日志
        Schema::create('member_login_log', function(Blueprint $table)
        {
            //$table->engine = 'InnoDB';
            $table->increments('id');

            $table->integer('member_id')->nullable();
            $table->string('ip', 20)->nullable()->comment('登录ip');
            $table->tinyInteger('is_login')->default(0)->comment('0登录 1登出');

            $table->timestamps();
        });

        //代理申请表
        Schema::create('member_daili_apply', function(Blueprint $table)
        {
            //$table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('member_id')->nullable();
            $table->string('name', 20)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('email', 20)->nullable();
            $table->string('msn_qq', 32)->nullable();
            $table->text('about')->nullable();
            $table->tinyInteger('status')->default(0)->comment('申请状态');
            $table->text('fail_reason')->nullable();

            $table->timestamps();
        });

        //代理佣金发放记录
        Schema::create('daili_money_log', function(Blueprint $table)
        {
            //$table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('member_id');
            $table->decimal('yl_money', 16)->default(0.00)->comment('盈利情况');
            $table->decimal('money', 16)->default(0.00)->comment('佣金');
            $table->string('remark')->nullable();
            $table->string('last_month', 10)->default(1);

            $table->timestamps();
        });

        Schema::create('member_api', function (Blueprint $table) {
            //$table->engine = 'InnoDB';
            $table->comment = '会员-api';
            $table->increments('id');

            $table->integer('member_id')->comment('');
            $table->integer('api_id')->comment('');
            $table->string('username', 100)->comment('平台账号');
            $table->string('password', 150)->comment('平台密码');
            $table->decimal('money', 16,2)->default(0)->comment('平台余额');

            $table->string('description')->nullable()->comment('描述');
            $table->timestamps();
        });

        //返水记录
        Schema::create('fs_log', function(Blueprint $table)
        {
            //$table->engine = 'InnoDB';
            $table->increments('id');

            $table->integer('member_id')->comment('用户ID');
            $table->decimal('bet_money', 12)->default(0.00)->comment('下注金额');
            $table->decimal('yx_money', 12)->default(0.00)->comment('有效投注');
            $table->decimal('yingli', 12)->default(0.00)->comment('网站盈利');
            $table->tinyInteger('fs_level')->comment('返水等级');
            $table->decimal('fs_rate', 10)->default(0.00)->comment('返水比率%');
            $table->decimal('fs_money', 12)->default(0.00)->comment('返水金额');
            $table->string('fs_order', 20)->nullable()->comment('返水批次号');

            $table->timestamps();
        });

        //返水等级
        Schema::create('fs_level', function(Blueprint $table)
        {
            //$table->engine = 'InnoDB';
            $table->increments('id');

            $table->tinyInteger('game_type')->default(1)->comment('游戏类型');
            $table->tinyInteger('level')->default(0)->comment('等级');
            $table->string('name')->comment('等级名称');
            $table->decimal('quota', 16, 2)->default(0)->comment('额度');
            $table->string('rate', 10)->default(0)->comment('返水比例');

            $table->timestamps();
        });

        //站内信
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title', 50)->nullable()->comment('标题 系统公告 活动公告');
            $table->string('content')->nullable()->comment('公告内容');
            $table->string('url')->nullable()->comment('跳转链接');

            $table->timestamps();
        });

        Schema::create('member_message', function (Blueprint $table) {
            //$table->engine = 'InnoDB';
            $table->comment = '会员-message';
            $table->increments('id');

            $table->integer('member_id')->comment('');
            $table->integer('message_id')->comment('');

            $table->tinyInteger('is_read')->default(0)->comment('0未读1已读');

            $table->timestamps();
        });

        Schema::create('yj_level', function(Blueprint $table)
        {
            //$table->engine = 'InnoDB';
            $table->increments('id');

            $table->tinyInteger('level')->default(1)->comment('等级');
            $table->string('name', 50)->nullable()->comment('等级名称');
            $table->integer('num')->default(0)->comment('活跃人数');
            $table->decimal('min', 16 ,2)->default(0)->comment('最小金额');
            $table->decimal('max', 16 ,2)->nullable()->comment('最大金额');
            $table->string('rate', 10)->default(0)->comment('佣金比例');

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
