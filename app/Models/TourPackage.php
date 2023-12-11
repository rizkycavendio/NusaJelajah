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
