<?php

namespace App\Http\Controllers\Shop;

use App\Repositories\SearchRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Config;

class SearchController extends BaseController
{
    public function __construct()
    {
        parent::__construct();

        $this->searchRepository = app(SearchRepository::class);
        $this->template = env('THEME') . '.shop.search.search';
    }

    /**
     * Показ результата поиска.
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $query = !empty(trim($request->search)) ? trim($request->search) : null;

        $products = $this->searchRepository->getProductsSearch($query, Config::get('settings.searchPaginate'));

        $categoryProduct = $this->searchRepository->getCategoryProduct($products);

        $content = view(env('THEME') . '.shop.search.result', compact('query', 'products', 'categoryProduct'));
        $this->vars = Arr::add($this->vars, 'content', $content);

        return $this->renderOutput();
    }

    /**
     * Ajax Search.
     */
    public function search(Request $request)
    {
        $search = $request->get('term');
        $result = $this->searchRepository->getAjaxSearch($search);
        return response()->json($result);
    }
}
