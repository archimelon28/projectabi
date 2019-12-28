<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelProdi extends Model
{
	protected $table = 'prodi';
    protected $primaryKey = 'id_prodi';
    public $timestamps = false;
}
