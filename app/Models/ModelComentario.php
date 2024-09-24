<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelComentario extends Model
{
    use HasFactory;
    protected $table = 'comentario';
    protected $fillable = ['conteudo','post_id'];
    use HasFactory;
}
