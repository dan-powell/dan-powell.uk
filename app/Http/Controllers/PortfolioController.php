<?php namespace App\Http\Controllers;

class PortfolioController extends Controller {

    public function __construct()
    {

    }

	public function index()
	{
        $items = collect(config('content.portfolio.items'));
        return view('portfolio.index.index')->with([
            'items' => $items
        ]);
	}

	public function show($slug)
	{
        $items = config('content.portfolio.items');
        if(isset($items[$slug]['view'])) {
            return view($items[$slug]['view']);
        } else {
            abort('404');
        }
    }


}
