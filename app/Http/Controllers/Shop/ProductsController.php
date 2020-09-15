<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Faker\Provider\Base;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ProductsController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->template = env('THEME') . '.shop.product.index';
    }

    /**
     * Информация о продукте.
     *
     * @param $catalog
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($catalog, $slug)
    {
        if ($catalog && $slug) {
            $product = $this->products_rep->getProduct($slug);
            $getCategoryProduct = $this->category_rep->getCategoryProduct($product->category_id);

            if($catalog !== $getCategoryProduct->slug){
                abort(404);
            }
        } else {
            abort(404);
        }

        $productContentBlock = view(env('THEME') . '.shop.product.productContentBlock', compact('product', 'getCategoryProduct'));
        $this->vars = Arr::add($this->vars, 'productContentBlock', $productContentBlock);

        $this->title = 'Рио Кабель | ' . ' ' . $product->title;
        $this->description = $product->description;
        $this->keywords = $product->keywords;

        return $this->renderOutput();
    }
}
