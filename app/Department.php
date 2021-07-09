<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function books()
    {
        return $this->hasMany('App\Book','department_id');
    }
}
