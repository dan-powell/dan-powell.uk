<?php namespace App\Repositories;

class ProjectRepository
{

    private $items;
    private $tags;

    public function __construct()
    {
        $items = collect(config('content.projects.items'));
        $this->items = $items->map(function ($item, $key) {
            $item['slug'] = $key;
            return $item;
        });
        $this->tags = collect(config('content.projects.tags'));
    }

	public function all()
	{
        return $this->items->sortBy('created_at');
	}

    public function tags()
	{
        return $this->tags;
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
