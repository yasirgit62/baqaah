<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Florist extends Model {

    public static $florist_registration = [
        'first_name' => 'required',
        'last_name' => 'required',
        'phone' => 'required',
        'email' => 'required|email|unique:users',
        'area_id' => 'required',
        'store_name' => 'required',
        'password' => 'required',
        'rpassword' => 'required|same:password',
    ];
    
    public function products() {
        return $this->hasMany(Product::class, 'florist_id');
    }
    public function areas() {
        return $this->belongsToMany(Area::class, 'florist_areas', 'florist_id', 'area_id')->withTimestamps();
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function timings() {
        return $this->hasMany(FloristTiming::class, 'florist_id');
    }

    public function getThumbUrlAttribute() {
        return url("profile_images/{$this->file_name}.thumbnail.{$this->file_ext}");
    }

    public function getFullUrlAttribute() {
        return url("profile_images/{$this->file_name}.{$this->file_ext}");
    }

}
