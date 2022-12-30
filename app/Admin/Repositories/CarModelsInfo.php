<?php

namespace App\Admin\Repositories;

use App\Models\CarModelsInfo as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class CarModelsInfo extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
