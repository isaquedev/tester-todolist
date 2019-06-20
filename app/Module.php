<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = ['title', 'description', 'project_id'];

    public function sessions()
    {
        return $this->hasMany('App\Session');
    }

    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}
