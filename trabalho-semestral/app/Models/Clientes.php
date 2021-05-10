<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nome', 'endereco', 'email', 'nascimento'];

    protected $table = 'Clientes';

    public function emprestimos(){
        return $this->hasMany(Emprestimos::class, 'cliente_id');
    }
}
