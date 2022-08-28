<?php namespace App\Http\Composers;

use Illuminate\View\View;

use App\Repositories\PortfolioRepository;

class PortfolioComposer
{

    public function __construct(PortfolioRepository $portfolioRepository)
    {
        $this->portfolioRepo = $portfolioRepository;
    }

    /**
     * Bind data to the view.
     *
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('portfolio', $this->portfolioRepo->featured());
    }
}
