<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Repositories
 *
 * @package App\Repositories
 *
 * Репозиторий работы с сущностью
 * Может выдавать наборы данных
 * Не может создавать/изменять сущности
 */
abstract class CoreRepository
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * CoreRepository Constructor
     */
    public function __construct()
    {
        $this->model = app($this->getModelClass());
    }

    /**
     * @return mixed
     */
    abstract protected function getModelClass();

    /**
     * @return Model|\Illuminate\Foundation\Application|mixed
     */
    protected function startConditions()
    {
        return clone $this->model;
    }
}
