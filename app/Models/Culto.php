<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Culto extends Model
{
    protected $fillable = [
        'igreja_id',
        'nome',
        'data',
        'descricao',
    ];

    public function igreja() {
        return $this->belongsTo(Igreja::class);
    }

    public function musicas() {
        return $this->belongsToMany(Musica::class)
                    ->withPivot(['tom', 'ordem'])
                    ->orderBy('pivot_ordem');
    }

    public function escalas() {
        return $this->hasMany(Escala::class);
    }
}
