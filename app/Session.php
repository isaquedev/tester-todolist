<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = ['title', 'description', 'module_id'];

    public function items()
    {
        return $this->hasMany('App\Item');
    }

    public function module()
    {
        return $this->belongsTo('App\Module');
    }
}
