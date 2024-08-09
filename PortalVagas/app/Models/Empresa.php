<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Empresa extends Authenticatable
{
    use Notifiable, HasFactory;

    protected $fillable = ['nome', 'nome_empresa', 'email', 'pasword', 'descricao_empresa'];

    protected $hidden = ['password', 'remember_token'];

    public function inscricoes(){
        return $this->hasMany(Inscricao::class);
    }
}
