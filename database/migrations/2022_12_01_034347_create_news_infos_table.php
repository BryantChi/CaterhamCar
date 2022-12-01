<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->default('')->comment('標題');
            $table->string('news_front_cover')->nullable()->comment('封面');
            $table->string('category')->default('未分類')->nullable()->comment('分類');
            $table->longText('content')->comment('內容');
            $table->boolean('show_status')->default('1')->comment('顯示/不顯示');
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
        Schema::dropIfExists('news_infos');
    }
}
