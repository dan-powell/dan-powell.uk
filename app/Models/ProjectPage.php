<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectPage extends Model {

	public function attachment()
    {
        return $this->morphTo();
    }

}
