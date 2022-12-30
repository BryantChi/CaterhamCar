<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class CarModelsInfo extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'car_models_infos';

    protected $cast = [
        'models_img' => 'json',
        'features' => 'json',
        'specification' => 'json',
        's_pack' => 'json',
        'r_pack' => 'json'
    ];

}
