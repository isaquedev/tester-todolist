<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserProject extends Pivot
{
    protected $fillable = ['user_id', 'project_id', 'role'];
}
