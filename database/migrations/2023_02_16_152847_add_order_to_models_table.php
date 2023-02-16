<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOrderToModelsTable extends Migration
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
            $table->string('category')->nullable()->after('models_img')->comment('分類');
            $table->integer('order')->default(0)->after('r_pack')->comment('排序');
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
        });
    }
}
