<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Shop\BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Config;

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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|void
     */
    public function show($slug)
    {
        if ($slug) {
            $getCatalog = $this->category_rep->getCatalog();
            $category = $this->category_rep->getCategory($slug);
            if(!$category){
                abort(404);
            }
            $getProductsCategory = $this->products_rep->getProductsCategory($category->id, Config::get('settings.paginateProducts'));
        } else {
            abort(404);
        }

        $catalogContentBlock = view(env('THEME') . '.shop.categories.productsCategoryContentBlock', compact('category','getProductsCategory','getCatalog', 'slug'));
        $this->vars = Arr::add($this->vars, 'catalogContentBlock', $catalogContentBlock);

        $this->title = 'Рио Кабель | ' . ' ' . $category->title;
        $this->description = $category->description;
        $this->keywords = $category->keywords;

        return $this->renderOutput();
    }

}
