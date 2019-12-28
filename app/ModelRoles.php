<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelRoles extends Model
{
    protected $table = 'role';
    protected $primaryKey = 'id_role';
    public $timestamps = false;
}
