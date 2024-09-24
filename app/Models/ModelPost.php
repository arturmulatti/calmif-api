<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPost extends Model
{
    protected $table = 'post';
    protected $fillable = ['titulo','conteudo','aprovado'];
    use HasFactory;
    
}
