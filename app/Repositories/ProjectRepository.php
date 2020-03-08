<?php namespace App\Repositories;

class ProjectRepository
{

    private $items;

    public function __construct()
    {
        $this->items = collect(config('content.projects.items'));
    }

	public function all()
	{
        return $this->items->sortByDesc('updated_at');
	}

	public function lead()
	{
        $lead = $this->all()->only(config('content.portfolio.lead'));
        return $lead->sortBy(function($model, $key){
            return array_search($key, config('content.portfolio.lead'));
        });
    }

    public function nonlead()
	{
        return $this->all()->except($this->lead()->keys());
    }

    public function except($key)
	{
        return $this->all()->except($key);
    }

}
