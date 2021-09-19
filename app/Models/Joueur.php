<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joueur extends Model
{
    use HasFactory;
    public function equipe(){
        return $this->belongsTo(Equipe::class, 'foreign_key');

    }
    public function role(){
        return $this->belongsTo(Role::class);

    }
    public function photo(){
        return $this->hasOne(Photo::class);
    }

}
