<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Teste extends Model
{
    protected $fillable = [
        'nome',
        'user_id',
        'pontuacaoMinima'
    ];

    public function questoes()
    {
        return $this->hasMany(Questao::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
