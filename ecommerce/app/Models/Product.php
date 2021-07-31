<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const BORRADOR = 1;
    const PUBLICADO = 2;
    use HasFactory;
    protected $fillable = ['name', 'slug', 'description', 'price', 'quantity', 'status', 'subcategory_id', 'brand_id'];

    //Relacion uno a muchos
    public function sizes()
    {
        return $this->hasMany(Size::class);
    }

    //Relacion uno a muchos inversa
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    //Relacion muchos a muchos

    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }

    //Relacion uno a muchos polimorfica
    public function image()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
