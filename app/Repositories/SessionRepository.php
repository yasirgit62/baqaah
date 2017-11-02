<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Redirect;
use Session;

class SessionRepository {

    public static function has_values() {

        if (isset($_SESSION["date"]) != '' && isset($_SESSION["area_id"]) != '' && isset($_SESSION["days"]) != '') {
            return 1;
        } else {
            return 0;
        }
    }

}
