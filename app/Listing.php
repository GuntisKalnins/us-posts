<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Eloquent\{OrderableTrait, PivotOrderableTrait};

class Listing extends Model
{
    use SoftDeletes, OrderableTrait, PivotOrderableTrait;


    public function scopeIsLive($query)
    {
        return $query->where('live', 1);
    }


    public function scopeIsNotLive($query)
    {
        return $query->where('live', 0);
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

    public function listingImage()
    {
        $imgPath = ($this->image) ?  $this->image : 'uploads/1d0131yGCLKSm9JbThnXLPTUDCPBTeJtpDwvoLuY.png';
        return '/storage/' . $imgPath;
    }


    public function live()
    {
        return $this->live;
    }


    public function cost()
    {
        return $this->category->price;
    }

    public function ownedByUser(User $user)
    {
        return $this->user->id === $user->id;
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


    public function favourites()
    {
        return $this->morphToMany(User::class, 'favouriteable');
    }


    public function favouritedBy(User $user)
    {
        return $this->favourites->contains($user);
    }


    public function viewedUsers()
    {
        return $this->belongsToMany(User::class, 'user_listing_views')->withTimestamps()->withPivot(['count']);
    }


    public function views()
    {
        return array_sum($this->viewedUsers->pluck('pivot.count')->toArray());
    }

    

}
