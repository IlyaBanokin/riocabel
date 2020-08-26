<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;
use App\Repositories\MenuRepository;
use App\Repositories\ProductRepository;
use App\Repositories\SliderRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

abstract class BaseController extends Controller
{
    /**
     * Подключаемый шаблон.
     */
    protected $template;

    /**
     * Массив переменных передаваемых в шаблон.
     */
    protected $vars = [];

    /**
     * Репозиторий.
     *
     * Логика работы с главным меню.
     */
    protected $menu_rep;

    /**
     * Репозиторий.
     *
     * Логика работы с категориями.
     */
    protected $category_rep;

    /**
     * Репозиторий.
     *
     * Логика работы с продуктами.
     */
    protected $products_rep;

    /**
     * Репозиторий.
     *
     * Логика работы со слайдером.
     */
    protected $slider_rep;

    /**
     * Поиск.
     */
    protected $searchRepository;

    /**
     * Конструктор.
     */
    public function __construct()
    {
        $this->menu_rep = app(MenuRepository::class);
        $this->category_rep = app(CategoryRepository::class);
        $this->products_rep = app(ProductRepository::class);
        $this->slider_rep = app(SliderRepository::class);
    }

    /**
     * Рендер шаблона и передача переменных.
     *
     * Menu, Footer
     */
    protected function renderOutput()
    {
        $menu = $this->menu_rep->getMenu();

        $header = view(env('THEME').'.shop.header');
        $this->vars = Arr::add($this->vars,'header', $header);

        $navigation = view(env('THEME') . '.shop.navigation', compact('menu'));
        $this->vars = Arr::add($this->vars, 'navigation', $navigation);

        $footer = view(env('THEME').'.shop.footer', compact('menu'));
        $this->vars = Arr::add($this->vars,'footer', $footer);

        return view($this->template)->with($this->vars);
    }
}
