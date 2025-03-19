<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SousFamille extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function famille(){
        return $this->belongsTo(Famille::class);
    }
    public function produit(){
        return $this->hasMany(Produit::class);
    }
    protected $guarded = ['id'];
}
