<?php namespace App\Repositories;

class PortfolioRepository
{

    private $items;

    public function __construct()
    {
        $this->items = collect(config('content.portfolio.items'));
    }

	public function all()
	{
        return $this->items->sortBy('created_at');
	}

    public function find($key)
    {
        if(isset($this->items[$key])) {
            return $this->items[$key];
        }
    }

	public function lead()
	{
        $lead = $this->all()->only(config('content.portfolio.lead'));
        return $lead->sortBy(fn($model, $key) => array_search($key, config('content.portfolio.lead')));
    }

    public function nonlead()
	{
        return $this->all()->except($this->lead()->keys());
    }

    public function featured()
	{
        $featured = $this->all()->only(config('content.portfolio.featured'));
        return $featured->sortBy(fn($model, $key) => array_search($key, config('content.portfolio.featured')));
    }

    public function except($key)
	{
        return $this->all()->except($key);
    }

}
