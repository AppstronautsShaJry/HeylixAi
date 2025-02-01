<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(BrandCategory::class, 'category_id');
    }
}
