<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class HomePageInfo extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'home_page_infos';

    protected $casts = [
        'slide_setting' => 'json',
    ];

}
