<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPermohonan extends Model
{
    protected $table = 'permohonan';
    protected $primaryKey = 'id_permohonan';
    public $timestamps = false;
}
