<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Musica extends Model
{
    public function igreja() {
        return $this->belongsTo(Igreja::class);
    }

    public function cultos() {
        return $this->belongsToMany(Culto::class)
                    ->withPivot(['tom', 'ordem']);
    }
}
