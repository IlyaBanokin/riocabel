<?php

namespace App\Repositories;

use App\Models\Slider as Model;

/**
 * Class SliderRepository.
 */
class SliderRepository extends CoreRepository
{
    /**
     * @return string
     */
    protected function getModelClass()
    {
        return Model::class;
    }

    /**
     * Вывод заголовка слайдера.
     *
     * @return string
     */
    public function getSlide()
    {
        $result = $this->startConditions()
            ->select('*')
            ->get();

        return $result;
    }
}
