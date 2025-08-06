<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Escala extends Model
{
    public function culto() {
        return $this->belongsTo(Culto::class);
    }

    public function ministerio() {
        return $this->belongsTo(Ministerio::class);
    }

    public function usuarios() {
        return $this->belongsToMany(User::class)
                    ->withPivot('funcao');
    }
}
