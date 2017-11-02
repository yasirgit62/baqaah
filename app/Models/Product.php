<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    public function images() {
        return $this->hasMany('App\Models\ProductImage', 'product_id');
    }

    public function catagories() {
        return $this->belongsToMany(Catagory::class, 'product_catagories', 'product_id', 'catagory_id')->withTimestamps();
    }

    public function sizes() {
        return $this->belongsToMany(Size::class, 'product_sizes', 'product_id', 'size_id')->withPivot('price', 'weight')->withTimestamps();
    }

    public function gifts() {
        return $this->belongsToMany(Gift::class, 'product_gifts', 'product_id', 'gift_id')->withTimestamps();
    }

    public function florist() {
        return $this->belongsTo(Florist::class, 'florist_id', 'id');
    }

    public function can_cart() {
        return ($this->status && $this->florist_array() && $this->delivery_time <= $_SESSION["days"]) ? true : false;
    }
    public function is_available() {
        return ($this->status) ? true : false;
    }
    public function time() {
        return ($this->delivery_time <=2) ? true : false;
    }
//    public function filter_by_date() {
//        return ($this->status && $this->florist_array() && $this->delivery_time <= $_SESSION["days"]) ? true : false;
//    }
//
//    public function florist_array() {
//        $flag = 0;
//
//        foreach ($this->florist->areas as $area) {
//            if ($area->id == $_SESSION["area_id"]) {
//                $flag = 1;
//                break;
//            }
//        }
//        return $flag;
//    }

    public function getStatus() {
        switch ($this->status) {
            case 0:
                return 'Un Available';
                break;
            case 1:
                return 'Available';
                break;
        }
    }

    public function getMessage() {
        switch ($this->c_message) {
            case 0:
                return 'No';
                break;
            case 1:
                return 'Yes';
                break;
        }
    }

}
