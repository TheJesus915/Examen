<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $table = 'libros'; 

    public $timestamps = false;

    protected $fillable = [
        'titulo', 
        'fecha_publicacion', 
        'autor_id', 
        'precio'
    ];


    public function autor()
    {
        return $this->belongsTo(Autor::class);
    }
}
