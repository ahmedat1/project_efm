<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class habitant extends Model
{
    use HasFactory;
    protected $table = 'habitant';
    protected $fillable = ['nom','prenom','cin','ville_id','photo'];
    public function ville(){
        return $this->belongsTo(ville::class);
    }
}
