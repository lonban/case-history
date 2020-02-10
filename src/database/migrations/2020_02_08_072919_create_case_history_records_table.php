<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaseHistoryRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_history_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('part',255)->nullable()->comment('身体部位');
            $table->string('state',255)->nullable()->comment('健康状况');
            $table->integer('time')->nullable()->comment('发生时间');
            $table->string('diet',255)->nullable()->comment('近日饮食');
            $table->string('remedy',255)->nullable()->comment('处理及就医');
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
        Schema::dropIfExists('case_history_records');
    }
}
