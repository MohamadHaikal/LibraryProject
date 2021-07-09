<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    public function department()
    {
        return $this->belongsTo('App\Department ', 'department_id');
    }

    public function language()
    {
        return $this->belongsTo('App\Language ', 'language_id');
    }
    public function authors()
    {
        return $this->belongsToMany('App\Author');
    }
}
