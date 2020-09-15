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

    public function getCatalog()
    {
        $column = ['id', 'title', 'slug'];

        $result = $this->startConditions()
            ->select($column)
            ->where('parent_id', 0)
            ->get();

        return $result;
    }

    public function getCategory($slug)
    {
        $column = ['id','excerpt'];

        $result = $this
            ->startConditions()
            ->select($column)
            ->where('slug', $slug)
            ->first();

        return $result;
    }

    public function getCategoryProduct($category_id)
    {
        $column = ['id', 'title', 'slug'];

        $result = $this
            ->startConditions()
            ->select($column)
            ->where('id', $category_id)
            ->first();

        return $result;
    }
}
