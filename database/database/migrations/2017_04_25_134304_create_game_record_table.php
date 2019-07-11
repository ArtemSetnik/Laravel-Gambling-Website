<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //游戏记录
        Schema::create('game_record', function(Blueprint $table)
        {
            //$table->engine = 'InnoDB';

            $table->increments('id');

            $table->string('rowid', 150)->default(0)->comment('');
            $table->string('billNo', 150)->index()->nullable()->comment('注单流水号');
            $table->unsignedInteger('api_type')->default(1)->index()->comment('接口平台 如 AG MG');
            $table->string('playerName', 50)->index()->comment('玩家各平台账号');
            $table->string('name', 50)->nullabe()->comment('玩家账号');
            $table->integer('member_id')->nullabe()->comment('用户 ID');
            $table->string('agentCode', 20)->nullable()->comment('代理商编号');
            $table->string('gameCode', 20)->nullable()->comment('游戏局号');


            $table->decimal('netAmount', 16, 2)->default(0.00)->comment('玩家输赢额度');
            $table->timestamp('betTime')->nullable()->index()->comment('投注时间');

            $table->string('gameType', 100)->index()->nullable()->comment('游戏类型');
            $table->decimal('betAmount', 16, 2)->nullable()->default(0.00)->comment('投注金额');
            $table->decimal('validBetAmount', 16 ,2)->nullable()->default(0.00)->comment('有效投注额度');
            $table->integer('flag')->nullable()->default(0)->comment('结算状态');
            $table->integer('playType')->nullable()->default(0)->comment('游戏玩法');
            $table->string('currency', 10)->nullable()->comment('货币类型');
            $table->string('tableCode', 10)->nullable()->comment('桌子编号');
            $table->string('loginIP', 20)->nullable()->comment('玩家IP');
            $table->string('recalcuTime')->nullable()->comment('注单重新派彩时间');
            $table->string('platformId', 10)->nullable()->comment('平台编号');
            $table->string('platformType', 10)->nullable()->comment('平台类型');
            $table->string('stringex', 100)->nullable()->comment('产品附注(通常为空)');
            $table->text('remark')->nullable()->comment('返回信息');
            $table->string('round', 10)->nullable();
            $table->integer('copyFlag')->nullable()->default(0)->index('copyFlag')->comment('更新标志');
            $table->string('filePath', 40)->nullable()->comment('文件路径');
            $table->string('cpzl', 100)->nullable()->comment('彩票种类');
            $table->string('wfmz', 100)->nullable()->comment('玩法名字');
            $table->string('xzhm', 100)->nullable()->comment('下注号码');

            $table->string('odds', 50)->nullable()->comment('赔率');
            $table->string('oddsType', 50)->nullable()->comment('赔率类型');
            $table->string('eventName', 150)->nullable()->comment('赛事名称');
            $table->string('betStatus', 50)->nullable()->comment('注单状态');
            $table->decimal('netPnl', 16,2)->default(0)->comment('净输赢');
            $table->string('settleTime', 50)->nullable()->comment('结算时间');
            $table->string('zTeam', 50)->nullable()->comment('主队');
            $table->string('kTeam', 50)->nullable()->comment('客队');

            $table->string('prefix', 10)->nullable()->index('prefix')->comment('站点前缀');

            $table->text('result')->nullable()->comment('返回信息');
            $table->decimal('reAmount', 16, 2)->default(0.00)->comment('备用');

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
