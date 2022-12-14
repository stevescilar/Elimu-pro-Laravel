<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeeAmount extends Model
{
    public function fee_category(){
        // creating a relationship
        return $this->belongsTo(FeeCategory::class,'fee_category_id','id');
    }
}
