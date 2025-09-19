<?php

namespace smitshah\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductOptionValue extends Model
{
    use HasFactory;

    protected $fillable = ['product_option_id', 'value'];

    public function option()
    {
        return $this->belongsTo(ProductOption::class,'product_option_id');
    }

    public function variants()
    {
        return $this->belongsToMany(ProductVariant::class, 'product_variant_values');
    }
}
