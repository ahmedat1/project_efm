<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ville extends Model
{
    use HasFactory;
    protected $table = 'ville';
    protected $fillable = ['ville','nombre_habitant'];
    public function habitants(){
        return $this->hasMany(habitant::class);
    }

}
