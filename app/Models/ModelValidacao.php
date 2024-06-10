<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelValidacao extends Model
{
    protected $table = 'validacao';
    protected $fillable = ['email','senha','resultado'];
    
    use HasFactory;
}
