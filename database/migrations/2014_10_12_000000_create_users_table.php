<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            //$table->engine = 'InnoDB';
            $table->comment = '后台用户表';
            $table->increments('id');
            $table->string('name', 100);
            $table->string('email', 150)->unique();
            $table->string('password');
            $table->tinyInteger('is_super_admin')->default(0);
            $table->integer('role_id')->default(1)->comment('角色 id 1游客');
            $table->string('last_session', 150)->nullable()->comment('');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('admin_action_money_log', function(Blueprint $table)
        {
            //$table->engine = 'InnoDB';
            $table->increments('id');

            $table->integer('user_id')->comment('管理员ID');
            $table->integer('member_id')->comment('会员ID');

            $table->decimal('old_money', 12,2)->default(0.00)->comment('原余额');
            $table->decimal('new_money', 12,2)->default(0.00)->comment('修改后的余额');

            $table->decimal('old_fs_money', 12,2)->default(0.00)->comment('原返水余额');
            $table->decimal('new_fs_money', 12,2)->default(0.00)->comment('修改后的返水余额');

            $table->text('remark')->nullable()->comment('描述');

            $table->timestamps();
        });

        Schema::create('admin_login_log', function(Blueprint $table)
        {
            //$table->engine = 'InnoDB';
            $table->increments('id');

            $table->integer('user_id')->nullable();
            $table->string('ip', 20)->nullable()->comment('登录ip');
            $table->tinyInteger('is_login')->default(0)->comment('0登录 1登出');

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
        Schema::dropIfExists('users');
    }
}
