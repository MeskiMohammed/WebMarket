<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Famille extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function sousFamilles(){
        return $this->hasMany(SousFamille::class);
    }
    protected $guarded=["id"];
}
