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
        $column = ['id', 'title', 'slug', 'img', 'category_id'];
        $products = DB::table('products')
            ->select($column)
            ->where('title', 'LIKE', '%' . $query . '%')
            ->paginate($perPage);

        return $products;
    }

    public function getCategoryProduct($data)
    {
        foreach ($data as $product){
            $catId = $product->category_id;
        }

        $column = ['slug'];
        $category = DB::table('categories')
            ->select($column)
            ->where('id', $catId)
            ->get();

        return $category;
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
