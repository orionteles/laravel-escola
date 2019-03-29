<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Professor extends Model
{
    Use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'professores';
}
