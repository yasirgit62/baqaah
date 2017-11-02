<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Models\Area;
use App\Models\Florist;
use App\Models\FloristTiming;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Validator;
use Image;

class FloristController extends Controller {

    public function edit() {
        $florist_obj = Florist::where('user_id', Auth::user()->id)->first();

        $florist = Florist::with('user')->find($florist_obj->id);

        $areas = Area::all();
        $areasArray = [];
        foreach ($areas as $key => $value) {
            $areasArray[$value->id] = $value->name;
        }

        return view('florist.profile.edit', compact('florist', 'areasArray'));
    }

    public function update_password($id, Request $request) {
        $validation = Validator::make($request->all(), ['password' => 'required',
                    'confirm_password' => 'required|same:password']);
        if ($validation->passes()) {
            $florist = Florist::where('user_id', Auth::user()->id)->first();
            User::where('id', $florist->user_id)->update(['password' => bcrypt($request->password)]);
            return redirect()->to(url('florist/profile/edit'))->withSuccess('Password Updated Successfully');
        } else {
            $errors = $validation->errors();
            return Redirect::back()->withInput()->withErrors($errors);
        }
    }

    public function update_delivery($id, Request $request) {

        $florist = Florist::where('user_id', Auth::user()->id)->first();

        if (count($request->day_chk)) {
            $ch = [];
            foreach ($request->day_chk as $key => $value) {
                $ch[] = $value;
                FloristTiming::where('florist_id', $florist->id)->where('day_id', $value)->update(['closed' => 1]);
            }
            FloristTiming::where('florist_id', $florist->id)->whereNotIn('day_id', $ch)->update(['closed' => 0]);
        }
        Florist::where('id', $florist->id)->update(['minimum_order' =>(double) $request->minimum_order]);
        FloristTiming::where('florist_id', $florist->id)->where('day_id', 1)->update(['opening' => $request->opening[0], 'closing' => $request->closing[0]]);
        FloristTiming::where('florist_id', $florist->id)->where('day_id', 2)->update(['opening' => $request->opening[1], 'closing' => $request->closing[1]]);
        FloristTiming::where('florist_id', $florist->id)->where('day_id', 3)->update(['opening' => $request->opening[2], 'closing' => $request->closing[2]]);
        FloristTiming::where('florist_id', $florist->id)->where('day_id', 4)->update(['opening' => $request->opening[3], 'closing' => $request->closing[3]]);
        FloristTiming::where('florist_id', $florist->id)->where('day_id', 5)->update(['opening' => $request->opening[4], 'closing' => $request->closing[4]]);
        FloristTiming::where('florist_id', $florist->id)->where('day_id', 6)->update(['opening' => $request->opening[5], 'closing' => $request->closing[5]]);
        FloristTiming::where('florist_id', $florist->id)->where('day_id', 7)->update(['opening' => $request->opening[6], 'closing' => $request->closing[6]]);
        $florist->areas()->sync($request->areas);
        return redirect()->to(url('florist/profile/edit'))->withSuccess('Delivery Area Info Updated Successfully');
    }

    public function update_info($id, Request $request) {
        $florist = Florist::where('user_id', Auth::user()->id)->first();
        $validation = Validator::make($request->all(), [
                    'area_id' => 'required',
                    'address' => 'required',
                    'delivery_cars' => 'required',
                    'first_name' => 'required',
                    'last_name' => 'required',
                    'phone' => 'required',
        ]);
        if ($validation->passes()) {
            $florist->area_id = $request->area_id;
            $florist->address = $request->address;
            $florist->delivery_cars = $request->delivery_cars;
            $florist->store_name = $request->store_name;

            User::where('id', $florist->user_id)->update(['first_name' => $request->first_name, 'last_name' => $request->last_name, 'phone' => $request->phone]);
            // image code start 
            if ($request->hasFile('image')) {
               // File::delete($filename);
                $file = $request->image;
                $destinationPath = public_path('profile_images');
                $number = mt_rand(1000000000, 9999999999) . time() . mt_rand(1000000000, 9999999999);
                $image_name = $number . '.' . $file->getClientOriginalExtension();
                $image_name_only = $number;
                $image_ext_only = $file->getClientOriginalExtension();
                $image_name_thumbnail = $number . '.thumbnail.' . $file->getClientOriginalExtension();
                $img = Image::make($file->getRealPath());
                $img->resize(257, 255, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath . '/' . $image_name_thumbnail);
                $file->move($destinationPath, $image_name);

                $florist->file_name = $image_name_only;
                $florist->file_ext = $image_ext_only;
            }
            $florist->save();
            return redirect()->to(url('florist/profile/edit'))->withSuccess('Personal Info Updated Successfully');
        } else {
            $errors = $validation->errors();
            return Redirect::back()->withInput()->withErrors($errors);
        }
    }

}
