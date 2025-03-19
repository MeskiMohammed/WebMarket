<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailsAchats extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];

    public function Achat(){
        return $this->belongsTo(DetailsAchats::class);
    }

    public function produit(){
        return $this->belongsTo(Produit::class);
    }
}
