<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aluno extends Model
{
    Use SoftDeletes;
    protected $dates = ['deleted_at'];
}
