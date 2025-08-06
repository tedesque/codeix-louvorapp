<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ministerio extends Model
{
    protected $fillable = ['nome', 'igreja_id'];
    public function igreja() {
        return $this->belongsTo(Igreja::class);
    }

    public function usuarios() {
        return $this->belongsToMany(User::class)->withPivot('lider');
    }

    public function escalas() {
        return $this->hasMany(Escala::class);
    }
}
