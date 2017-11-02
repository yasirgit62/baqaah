<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
   public function getThumbUrlAttribute() {
        return url("catagories_images/{$this->file_name}.thumbnail.{$this->file_ext}");
    }

    public function getFullUrlAttribute() {
        return url("catagories_images/{$this->file_name}.{$this->file_ext}");
    }
}
