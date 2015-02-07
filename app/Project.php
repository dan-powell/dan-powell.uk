<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

	public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }

    public function sections()
    {
        return $this->morphMany('App\Section', 'attachment')->orderBy('rank', 'ASC');
    }

}
