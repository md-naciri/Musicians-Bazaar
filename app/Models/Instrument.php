<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instrument extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function subcategory(){
        return $this->hasOne(Subcategory::class, 'id', 'subcategory_id');
    }

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function state(){
        return $this->belongsTo(State::class);
    }

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function scopeArticles1Slide1($query, $categoryId){
        return $query->where('category_id',$categoryId)->orderByDesc('id')->take(3)->get();
    }

    public function scopeArticles1Slide2($query, $categoryId, $sildeBefore){
        return $query->where('category_id',$categoryId)->whereNotIn('id', $sildeBefore->pluck('id')->toArray())->orderByDesc('id')->take(4)->get();
    }
}
