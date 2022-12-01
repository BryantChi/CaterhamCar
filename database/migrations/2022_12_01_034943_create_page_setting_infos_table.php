<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageSettingInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_setting_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('page_url')->default('')->comment('頁面網址');
            $table->string('page_title')->default('')->comment('頁面標題');
            $table->longText('page_banner_img')->nullable()->comment('Banner');
            $table->longText('page_banner_img_mob')->nullable()->comment('Banner Mob');
            $table->longText('page_meta_description')->nullable()->comment('SEO_Description');
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
        Schema::dropIfExists('page_setting_infos');
    }
}
