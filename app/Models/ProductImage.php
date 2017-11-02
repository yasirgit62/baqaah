<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    public function getThumbUrlAttribute() {
        return url("product_images/product{$this->product->id}/{$this->file_name}.thumbnail.{$this->file_ext}");
    }

    public function getFullUrlAttribute() {
        return url("product_images/product{$this->product->id}/{$this->file_name}.{$this->file_ext}");
    }
    public function product() {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
