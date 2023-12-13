<?php

namespace App\Models;

use App\Models\Region;
use App\Models\Gallery;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TourPackage extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $guarded = ['id'];

    protected $hidden = [];

    public function scopeFilter($query, array $filters)
{
    $query->when($filters['search'] ?? false, function ($query, $search) {
        return $query->where(function ($query) use ($search) {
            $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('num_people', 'like', '%' . $search . '%')
                ->orWhere('tour_guide', 'like', '%' . $search . '%')
                ->orWhere('duration', 'like', '%' . $search . '%')
                ->orWhere('price', 'like', '%' . $search . '%');
        });
    });

    $query->when($filters['category'] ?? false, function ($query, $category) {
        return $query->whereHas('category', function ($query) use ($category) {
            $query->where('slug', $category)
                ->orWhere('name', 'like', '%' . $category . '%');
        });
    });

    $query->when($filters['region'] ?? false, function ($query, $region) {
        return $query->whereHas('region', function ($query) use ($region) {
            $query->where('slug', $region)
                ->orWhere('location', 'like', '%' . $region . '%');
        });
    });
}


    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function region(){
        return $this->belongsTo(Region::class);
    }

    public function gallery(){
        return $this->hasMany(Gallery::class);
    }
}
