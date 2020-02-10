<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaseHistoryUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_history_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('state')->default(0)->comment('状态');
            $table->string('pic',255)->nullable()->comment('头像');
            $table->string('name',255)->nullable()->comment('名称');
            $table->string('password',255)->nullable()->comment('密码');
            $table->unsignedInteger('role_id')->default(1)->comment('角色id');
            $table->unsignedInteger('time')->default(0)->comment('登录时长');
            $table->unsignedInteger('number')->default(0)->comment('登录次数');
            $table->string('ip',255)->nullable()->comment('登录ip');
            $table->tinyInteger('sex')->default(1)->comment('性别');
            $table->tinyInteger('age')->default(1)->comment('年龄');
            $table->integer('phone')->nullable()->comment('电话');
            $table->string('email',255)->nullable()->comment('邮箱');
            $table->string('wx',255)->nullable()->comment('微信');
            $table->string('wx_api',255)->nullable()->comment('微信登录api');
            $table->string('qq',255)->nullable()->comment('QQ');
            $table->string('qq_api',255)->nullable()->comment('QQ登录api');
            $table->string('address',255)->nullable()->comment('地址');
            $table->integer('rating')->default(0)->comment('积分');
            $table->integer('rating_err')->default(0)->comment('坏积分/被举报');
            $table->integer('money')->default(0)->comment('余额');
            $table->string('like',255)->nullable()->comment('喜好');
            $table->string('true_pic',255)->default(1)->comment('真实头像');
            $table->string('true_card',128)->default(1)->comment('真实身份证');
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
        Schema::dropIfExists('case_history_users');
    }
}
