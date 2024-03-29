<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'slug'
    ];

    public function getRouteKeyName()
    { 
        return 'slug';
    }

    public function subcategories(){
        return $this->hasMany(Subcategory::class);
    }

    public function articles(){
        return $this->hasMany(Instrument::class);
    }

    public function scopeCategoryName($query, $name){
        return $query->where('name', $name)->first();
    }
}
