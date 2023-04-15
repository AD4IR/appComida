<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected$fillable=[
        'nombre',
        'estado',
    ];

    public function products(){
        return $this->hasMany(product::class);
    }

    use HasFactory;
}
