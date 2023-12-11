<?php

namespace App\Models;

use App\Models\TourPackage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Region extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function tour_package(){
        return $this->hasMany(TourPackage::class);
    }
}
