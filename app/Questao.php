<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
    protected $fillable = [
        'teste_id',
        'enunciado',
        'respostaA',
        'respostaB',
        'respostaC',
        'respostaD',
        'respostaE',
        'correta',
        'valorQuestao'
    ];

    public function teste()
    {
        return $this->hasOne(Teste::class);
    }
}
