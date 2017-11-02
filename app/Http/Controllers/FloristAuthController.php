<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Models\Area;
use App\Models\FloristTiming;
use App\Models\Florist;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Validator;
use DB;

class FloristAuthController extends Controller {

    public function handleLogin(Request $request) {

        $data = $request->only('email', 'password');
        $user = User::where('email', $request->only('email'))->first();
        if (!$user)
            return Redirect::back()->with('error', 'Email or Password invalid!');

        if (Auth::attempt($data)) {
            return redirect()->to(url('/florist/profile/edit'));
        } else {
            return Redirect::back()->with('error', 'Email or Password Combination invalid!');
        }
    }

    public function login() {
        $areas = Area::all();
        return view('florist.login.login', compact('areas'));
    }

    public function lo() {

        return view('customer.cart.ad');
    }

    public function registration(Request $request) {
        $validation = Validator::make($request->all(), Florist::$florist_registration);
        if ($validation->passes()) {

            $user = new User;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->password = bcrypt($request->password);
            $user->save();

            $florist = new Florist;
            $florist->area_id = $request->area_id;
            $florist->user_id = $user->id;
            $florist->store_name = $request->store_name;
            $florist->save();

            $florist_timings = array(
                array('day_id' => 1, 'florist_id' => $florist->id, 'closed' => 0),
                array('day_id' => 2, 'florist_id' => $florist->id, 'closed' => 0),
                array('day_id' => 3, 'florist_id' => $florist->id, 'closed' => 0),
                array('day_id' => 4, 'florist_id' => $florist->id, 'closed' => 0),
                array('day_id' => 5, 'florist_id' => $florist->id, 'closed' => 0),
                array('day_id' => 6, 'florist_id' => $florist->id, 'closed' => 0),
                array('day_id' => 7, 'florist_id' => $florist->id, 'closed' => 0),
            );
            DB::table('florist_timings')->insert($florist_timings);
            return Redirect::back()->with('success', 'Your are successfully signed up');
        } else {
            $errors = $validation->errors();
            return Redirect::back()->withInput()->withErrors($errors);
        }
    }

}
