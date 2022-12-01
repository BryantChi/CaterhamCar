<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class BaseSettingInfo extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'base_setting_infos';
    
}
