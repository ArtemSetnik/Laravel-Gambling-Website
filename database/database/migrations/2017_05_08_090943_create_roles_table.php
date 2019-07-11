<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            //$table->engine = 'InnoDB';
            $table->comment = '管理组';
            $table->increments('id');

            $table->string('name', 100);
            $table->string('description')->nullable()->comment('描述');
            $table->timestamps();
        });

        Schema::create('role_router', function (Blueprint $table) {
            //$table->engine = 'InnoDB';
            $table->comment = '管理组-权限';
            $table->increments('id');

            $table->integer('role_id')->unsigned();
            $table->string('router', 100);

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
