<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelSurat extends Model
{
    protected $table = 'surat';
    protected $primaryKey = 'id_surat';
    public $timestamps = false;
}
