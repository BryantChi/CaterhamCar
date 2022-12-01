<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaseSettingInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('base_setting_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address')->default('')->comment('地址');
            $table->string('phone')->default('')->comment('電話');
            $table->string('fax')->nullable()->comment('傳真');
            $table->string('line')->nullable()->comment('Line');
            $table->string('facebook')->nullable()->comment('FaceBook');
            $table->string('instagram')->nullable()->comment('Instagram');
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
        Schema::dropIfExists('base_setting_infos');
    }
}
