<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModeReglement extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $guarded=['id'];

    public function commandes(){
        return $this->hasMany(Commande::class);
    }
}
