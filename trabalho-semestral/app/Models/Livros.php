<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livros extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'titulo', 'autor', 'edicao', 'category_id'];

    protected $table = 'Livros';
}
