<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Igreja extends Model
{
    protected $fillable = ['nome'];
    // app/Models/Igreja.php
    public function usuarios() {
        return $this->hasMany(User::class);
    }

    public function ministerios() {
        return $this->hasMany(Ministerio::class);
    }

    public function cultos() {
        return $this->hasMany(Culto::class);
    }

    public function musicas() {
        return $this->hasMany(Musica::class);
    }
}
