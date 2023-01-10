<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyFieldtypeToModelsTable extends Migration
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
            $table->longText('models_front_cover')->nullable()->comment('封面')->change();
            $table->longText('models_img')->nullable()->default()->comment('圖片')->change();
            $table->longText('features')->nullable()->default()->comment('特色')->change();
            $table->longText('specification')->nullable()->default()->comment('規格')->change();
            $table->longText('s_pack')->nullable()->default()->comment('S PACK')->change();
            $table->longText('r_pack')->nullable()->default()->comment('R PACK')->change();
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
