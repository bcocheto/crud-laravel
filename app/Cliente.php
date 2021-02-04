<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

    // bloqueia a necessidade de "created_at" e "updated_at" no banco de dados
    public $timestamps = false;

    // propriedade resposável para a utilização da função fill()
    protected $fillable = [
        'nome','razao_social','cnpj','data_inclusao'
    ];

}
