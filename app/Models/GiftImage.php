<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GiftImage extends Model
{
     public function getThumbUrlAttribute() {
        return url("gift_images/gift{$this->gift->id}/{$this->file_name}.thumbnail.{$this->file_ext}");
    }

    public function getFullUrlAttribute() {
        return url("gift_images/gift{$this->gift->id}/{$this->file_name}.{$this->file_ext}");
    }
      public function gift() {
        return $this->belongsTo(Gift::class, 'gift_id', 'id');
    }
}
