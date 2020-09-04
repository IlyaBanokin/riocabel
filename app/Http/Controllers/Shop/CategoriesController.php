<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Shop\BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class CategoriesController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->template = env('THEME') . '.shop.categories.index';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $getCatalog = $this->category_rep->getCatalog();

        $catalogContentBlock = view(env('THEME') . '.shop.categories.catalogContentBlock',compact('getCatalog'));
        $this->vars = Arr::add($this->vars, 'catalogContentBlock', $catalogContentBlock);

        return $this->renderOutput();
    }

    /**
     * Display the specified resource.
     *
     * @param $slug
     * @return void
     */
    public function show($slug)
    {
        if ($slug) {
            $category = $this->category_rep->getCategory($slug);
            $getProductsCategory = $this->products_rep->getProductsCategory($category->id);
        } else {
            abort(404);
        }

        $catalogContentBlock = view(env('THEME') . '.shop.categories.productsCategoryContentBlock', compact('category','getProductsCategory'));
        $this->vars = Arr::add($this->vars, 'catalogContentBlock', $catalogContentBlock);

        $this->title = 'Кафе Северное Сияние | ' . ' ' . $category->title;
        $this->description = $category->description;
        $this->keywords = $category->keywords;

        return $this->renderOutput();
    }

}
