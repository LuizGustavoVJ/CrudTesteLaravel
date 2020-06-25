<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Teste extends Model
{
    protected $fillable = [
        'nome',
        'pontuacaoMinima'
    ];

    public function questoes()
    {
        return $this->hasMany(Questao::class);
    }
}
