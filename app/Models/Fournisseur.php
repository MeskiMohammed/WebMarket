<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fournisseur extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $guarded = ['id'];

    public function Achat(){
        return $this->hasMany(Achats::class);
    }
}
