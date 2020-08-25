<?php

namespace App\Repositories;

use App\Models\Menu as Model;

/**
 * Class MenuRepository.
 */
class MenuRepository extends CoreRepository
{
    /**
     * @return string
     */
    protected function getModelClass()
    {
        return Model::class;
    }

    /**
     * Главное меню.Header.
     *
     * @return string
     */
    public function getMenu()
    {
        $result = $this->startConditions()
            ->select('*')
            ->get();

        return $result;
    }
}
