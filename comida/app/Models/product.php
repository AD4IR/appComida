<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable=[
        'nombre',
        'descripcion',
        'precio',
        'imagen',
        'estado',
        'category_id'
    ];

    public function categories(){
        return $this->belongsTo(category::class);
    }


    use HasFactory;
}
