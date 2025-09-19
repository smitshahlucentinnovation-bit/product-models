<?php

namespace smitshah\Product\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['user_id', 'name', 'description', 'base_price', 'status'];

    public function options()
    {
        return $this->hasMany(ProductOption::class);
    }
    
    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }

}
