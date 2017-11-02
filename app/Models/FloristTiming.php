<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FloristTiming extends Model
{
      public function day() {
        return $this->belongsTo(Day::class, 'day_id', 'id');
    }
}
