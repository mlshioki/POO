<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprestimos extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'cliente_id', 'livro_id', 'data', 'devolucao'];

    protected $table = 'Emprestimos';

    public function cliente(){
        return $this->belongsTo(Clientes::class, 'cliente_id');
    }
}
