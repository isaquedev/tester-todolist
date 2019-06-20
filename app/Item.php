<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['title', 'description', 'session_id', 'notes', 'state'];

    public function session()
    {
        return $this->belongsTo('App\Session');
    }
}
