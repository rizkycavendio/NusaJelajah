<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function tour_package(){
        return $this->belongsTo(TourPackage::class, 'tour_package_id');
    }
}
