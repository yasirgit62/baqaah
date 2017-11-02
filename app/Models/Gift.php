<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    public function images() {
        return $this->hasMany('App\Models\GiftImage', 'gift_id');
    }
   public function getArabic() {
        switch ($this->arabic) {
            case 0:
                return 'No';
                break;
            case 1:
                return 'Yes';
                break;
        }
    }
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
}
