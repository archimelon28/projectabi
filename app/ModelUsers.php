<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelUsers extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id_user';
    public $timestamps = false;
}
