<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class MainController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->template = env('THEME') . '.shop.main.index';
    }

    public function index()
    {
        $hitProducts = $this->products_rep->hitProducts();
        $hitProductsHidden = $this->products_rep->hitProductsHidden();
        $hitProductsContentBlock = view(env('THEME') . '.shop.main.hitProductsContentBlock',compact('hitProducts','hitProductsHidden'));
        $this->vars = Arr::add($this->vars, 'hitProductsContentBlock', $hitProductsContentBlock);

        $getCategories = $this->category_rep->getCategories();
        $categoriesContentBlock = view(env('THEME') . '.shop.main.categoriesContentBlock',compact('getCategories'));
        $this->vars = Arr::add($this->vars, 'categoriesContentBlock', $categoriesContentBlock);

        $getSlide = $this->slider_rep->getSlide();
        $slidersContentBlock = view(env('THEME') . '.shop.main.slidersContentBlock',compact('getSlide'));
        $this->vars = Arr::add($this->vars, 'slidersContentBlock', $slidersContentBlock);

        return $this->renderOutput();
    }
}
