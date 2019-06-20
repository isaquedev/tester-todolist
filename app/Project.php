<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title'];

    public function modules()
    {
        return $this->hasMany('App\Module');
    }

    public function users()
    {
        return $this->belongsToMany('App\User')->using('App\UserProject')->withPivot('role');
    }
}
