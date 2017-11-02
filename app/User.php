<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Florist;

class User extends Authenticatable {

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function florist() {
        return $this->hasOne('App\Models\Florist', 'user_id');
    }

    public function fullName() {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getFullNameAttribute() {
        return $this->fullName();
    }

}
