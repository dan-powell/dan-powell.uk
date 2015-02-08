<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

	public function tags()
    {
        return $this->morphToMany('App\Models\Tag', 'taggable');
    }

    public function sections()
    {
        return $this->morphMany('App\Models\Section', 'attachment')->orderBy('rank', 'ASC');
    }

}
