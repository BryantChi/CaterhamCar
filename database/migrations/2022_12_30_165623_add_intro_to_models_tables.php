<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIntroToModelsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('car_models_infos', function (Blueprint $table) {
            //
            $table->longText('models_discription')->after('r_pack')->nullable()->comment('車款描述');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('car_models_infos', function (Blueprint $table) {
            //
            $table->dropColumn('models_discription');
        });
    }
}
