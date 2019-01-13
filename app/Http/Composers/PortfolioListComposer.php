<?php

namespace App\Http\Composers;

use Illuminate\View\View;

class PortfolioListComposer
{

    public function __construct()
    {

    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('items', config('content.portfolio.items'));
    }
}
