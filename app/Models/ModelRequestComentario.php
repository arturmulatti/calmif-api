<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelRequestComentario extends Model
{
    protected $table = 'RequestComentario';
    protected $fillable = ['id','id_comentario'];
    use HasFactory;

    use HasFactory;
}
