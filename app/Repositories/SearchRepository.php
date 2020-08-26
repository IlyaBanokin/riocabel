<?php

namespace App\Repositories;

use App\Models\Product as Model;
use Illuminate\Support\Facades\DB;

/**
 * Class SearchRepository.
 */
class SearchRepository extends CoreRepository
{
    /**
     * @return string
     */
    protected function getModelClass()
    {
        return Model::class;
    }

    public function getProductsSearch($query, $perPage = null)
    {
        $column = ['id', 'title', 'slug', 'img'];
        $products = $this->startConditions()
            ->select($column)
            ->where('title', 'LIKE', '%' . $query . '%')
            ->paginate($perPage);

        return $products;
    }

    public function getAjaxSearch($search)
    {
        $result = $this->startConditions()
            ->select('title')
            ->where('title', 'LIKE', '%' . $search . '%')
            ->pluck('title');

        return $result;
    }
}
