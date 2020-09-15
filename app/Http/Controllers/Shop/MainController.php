<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\SendCallBackRequest;
use App\Http\Requests\SendContactsRequest;
use App\Mail\SendCallBackMail;
use App\Mail\SendContactsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;

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
        $categoryProduct = $this->searchRepository->getCategoryProduct($hitProducts);
        $categoryProductHidden = $this->searchRepository->getCategoryProduct($hitProductsHidden);
        $hitProductsContentBlock = view(env('THEME') . '.shop.main.hitProductsContentBlock', compact('hitProducts', 'hitProductsHidden', 'categoryProduct', 'categoryProductHidden'));
        $this->vars = Arr::add($this->vars, 'hitProductsContentBlock', $hitProductsContentBlock);

        $getCategories = $this->category_rep->getCategories();
        $categoriesContentBlock = view(env('THEME') . '.shop.main.categoriesContentBlock', compact('getCategories'));
        $this->vars = Arr::add($this->vars, 'categoriesContentBlock', $categoriesContentBlock);

        $getSlide = $this->slider_rep->getSlide();
        $slidersContentBlock = view(env('THEME') . '.shop.main.slidersContentBlock', compact('getSlide'));
        $this->vars = Arr::add($this->vars, 'slidersContentBlock', $slidersContentBlock);

        $feedbackContentBlock = view(env('THEME') . '.shop.main.feedbackContentBlock');
        $this->vars = Arr::add($this->vars, 'feedbackContentBlock', $feedbackContentBlock);

        return $this->renderOutput();
    }


    /**
     * Отправка формы..
     * @param SendContactsRequest $request
     */
    public function store(SendContactsRequest $request)
    {
        $data = $request->all();

        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $text = $data['text'];
        $mailTo = Config::get('settings.emailContacts');

        Mail::to($mailTo)->send(new SendContactsMail($name, $email, $phone, $text));

        return redirect()
            ->route('shop.main.index')
            ->with(['success' => 'Сообщение успешно отправлено']);
    }

    /**
     * Отправка формы header ('Вам перезвонить?')..
     * @param SendCallBackRequest $request
     */
    public function callback(SendCallBackRequest $request)
    {
        $data = $request->all();

        $name = $data['name'];
        $phone = $data['phone'];

        $mailTo = Config::get('settings.emailContacts');
        Mail::to($mailTo)->send(new SendCallBackMail($name, $phone));

        return redirect()
            ->route('shop.main.index')
            ->with(['success' => 'Сообщение успешно отправлено']);
    }
}
