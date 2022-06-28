<?php

namespace App\Models;

use App\Models\proedi\PedirConcessaoProedi;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $fillable = [
        'social_name','name', 'cnpj', 'inscricao_estadual', 'endereco_empresa', 'municipio', 'uf',
        'cep', 'telefone', 'email', 'inicio_atividade', 'tipo_empresa', 'nome_empresario', 'cpf',
        'endereco_empresario', 'municipio_empresario', 'municipio_empresario', 'uf_empresario',
         'cep_empresario', 'telefone_empresario', 'email_empresario', 'active', 'subscription', 
    ];

   /* public function pedirConcessaoProedi()
    {
        return $this->hasMany(PedirConcessaoProedi::class);
    } */

    /**
     *  Get Profiles
     */
    public function profiles()
    {
        return $this->belongsToMany(Profile::class);
    }

    public function users()
    {
        return $this->hasOne(User::class);
    }

    public function formatCnpj($cnpj) {

        $cnpj = substr($cnpj, 0, 2) . '.' . substr($cnpj, 2, 3) . '.' . substr($cnpj, 5, 3) . '/' . substr($cnpj, 8, 4) . '-' . substr($cnpj, 12, 2);
    
        return $cnpj;
     }
}
