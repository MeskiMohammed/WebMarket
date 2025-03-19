<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Achats extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];

    public function fournisseur(){
        return $this->belongsTo(Fournisseur::class);
    }

    public function detailsAchats(){
        return $this->hasMany(DetailsAchats::class);
    }
}
