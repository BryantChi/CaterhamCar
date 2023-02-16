<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class CarModelsInfo extends Model implements Sortable
{
    use SortableTrait;
	use HasDateTimeFormatter;
    protected $table = 'car_models_infos';

    protected $cast = [
        'models_front_cover' => 'json',
        'models_img' => 'json',
        'features' => 'json',
        'specification' => 'json',
        's_pack' => 'json',
        'r_pack' => 'json'
    ];

    protected $sortable = [
        'order_column_name' => 'order',
        'sort_when_creating' => true,
    ];

}
