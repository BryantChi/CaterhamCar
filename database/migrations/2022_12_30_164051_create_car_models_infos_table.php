<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarModelsInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_models_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('')->comment('名稱');
            $table->string('models_front_cover')->nullable()->comment('封面');
            $table->longText('models_img')->default('[]')->nullable()->comment('圖片');
            $table->string('features')->default('[]')->nullable()->comment('特色');
            $table->string('specification')->default('[]')->nullable()->comment('規格');
            $table->string('s_pack')->default('[]')->nullable()->comment('S PACK');
            $table->string('r_pack')->default('[]')->nullable()->comment('R PACK');
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
        Schema::dropIfExists('car_models_infos');
    }
}
