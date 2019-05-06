<?php namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;

use App\Repositories\PortfolioRepository;

class PortfolioController extends Controller
{

    private $portfolioRepo;

    public function __construct(PortfolioRepository $portfolioRepository)
    {
        $this->portfolioRepo = $portfolioRepository;
    }

	public function index()
	{
        return view('main.portfolio.index')->with([
            'lead' => $this->portfolioRepo->lead(),
            'items' => $this->portfolioRepo->nonlead()
        ]);
	}

	public function show($slug)
	{
        $item = $this->portfolioRepo->find($slug);
        if(isset($item['view'])) {
            return view($item['view'])->with([
                'items' => $this->portfolioRepo->except($slug)->take(3)
            ]);
        } else {
            abort('404');
        }
    }

}
