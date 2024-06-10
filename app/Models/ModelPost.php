<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPost extends Model
{
    protected $table = 'post';
    protected $fillable = ['titulo','conteudo','id_user'];
    use HasFactory;
    function relUser(){
        return $this->hasOne('app\\Models\\User','id','id_user');
    }
}
