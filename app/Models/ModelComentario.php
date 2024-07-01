<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelComentario extends Model
{
    protected $table = 'comentario';
    protected $fillable = ['id_post','conteudo','id_user'];
}
