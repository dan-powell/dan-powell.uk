<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model {

	public function attachment()
    {
        return $this->morphTo();
    }

}
