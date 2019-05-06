<?php namespace App\Http\Composers;

use Illuminate\View\View;

use App\Repositories\PortfolioRepository;

class PortfolioListComposer
{

    public function __construct(PortfolioRepository $portfolioRepository)
    {
        $this->portfolioRepo = $portfolioRepository;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('items', $this->portfolioRepo->all());
    }
}
