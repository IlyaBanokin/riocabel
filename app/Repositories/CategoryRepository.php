<?php

namespace App\Repositories;

use App\Models\Category as Model;

/**
 * Class CategoryRepository.
 */
class CategoryRepository extends CoreRepository
{
    /**
     * @return string
     */
    protected function getModelClass()
    {
        return Model::class;
    }

    public function getCategories()
    {
        $column = ['id', 'title', 'slug', 'img', 'excerpt'];
        $result = $this->startConditions()
            ->select($column)
            ->where('parent_id', 0)
            ->limit(20)
            ->get();

        return $result;
    }
}
