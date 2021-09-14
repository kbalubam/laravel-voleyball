<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joueur extends Model
{
    use HasFactory;
    public function equipe(){
        return $this->hasOne(Equipe::class, 'foreign_key');

    }
    public function role(){
        return $this->hasOne(Role::class, 'foreign_key');

    }
    
}
