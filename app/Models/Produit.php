<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produit extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function sousfamille(){
        return $this->belongsTo(SousFamille::class);
    }
    public function marque(){
        return $this->belongsTo(Marque::class);
    }
    public function unite(){
        return $this->belongsTo(Unite::class);
    }
    public function detailsCommandes(){
        return $this->hasMany(DetailsCommande::class);
    }
}
