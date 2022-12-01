<?php

namespace App\Admin\Repositories;

use App\Models\BaseSettingInfo as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class BaseSettingInfo extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
