<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Eloquent\OrderableTrait;

class Listing extends Model
{
    use SoftDeletes, OrderableTrait;





    public function scopeIsLive()
    {
        return $this->where('live', 1);
    }


    public function scopeIsNotLive()
    {
        return $this->where('live', 0);
    }


    public function scopeFromCategory($query, Category $category)
    {
        return $query->where('category_id', $category->id);
    }


    public function scopeInArea($query, Area $area)
    {
        return $query->whereIn('area_id', array_merge(

            [$area->id],
            $area->descendants->pluck('id')->toArray()

        ));
    }


    public function live()
    {
        return $this->live;
    }


    public function cost()
    {
        return $this->category->price;
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}