<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'image', 'icon'];

    //Relación uno a muchos
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }

    //Relación muchos a muchos
    public function brands()
    {
        return $this->belongsToMany(Brand::class);
    }

    //Relacion uno a muchos Through
    public function products()
    {
        return $this->hasManyThrough(Product::class, Subcategory::class);
    }
}
