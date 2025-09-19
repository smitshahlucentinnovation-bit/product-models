<?php

namespace smitshah\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductVariant extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'sku', 'price', 'stock'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function optionValues()
    {
        return $this->belongsToMany(ProductOptionValue::class, 'product_variant_values');
    }
}
