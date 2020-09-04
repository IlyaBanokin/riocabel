<?php

namespace App\Repositories;

use App\Models\Product as Model;

/**
 * Class ProductRepository.
 */
class ProductRepository extends CoreRepository
{
    /**
     * @return string
     */
    protected function getModelClass()
    {
        return Model::class;
    }

    /**
     * Выгодное предложение.
     *
     * @return string
     */
    public function hitProducts()
    {
        $column = ['id', 'title', 'slug', 'img'];
        $result = $this->startConditions()
            ->select($column)
            ->where('hit', 1)
            ->orderBy('id', 'DESC')
            ->limit(12)
            ->get();

        return $result;
    }

    public function hitProductsHidden()
    {
        $column = ['id', 'title', 'slug', 'img'];
        $result = $this->startConditions()
            ->select($column)
            ->where('hit', 1)
            ->limit(12)
            ->get();

        return $result;
    }

    public function getProductsCategory($id)
    {
        $column = ['id', 'title', 'slug', 'category_id'];

        $result = $this
            ->startConditions()
            ->select($column)
            ->where('category_id', $id)
            ->get();

        return $result;
    }
}
