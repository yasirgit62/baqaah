<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Models\Area;
use App\Models\Florist;
use App\Models\FloristTiming;
use App\Models\Gift;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\UploadedFile;
use File;
use Storage;
use Image;
use DB;

class GiftController extends Controller {

    public function add() {
        $statusArray = [];
        $statusArray[1] = 'Available';
        $statusArray[0] = 'Un Available';

        return view('florist.gift.add', compact('statusArray'));
    }

    public function edit($id) {
        $statusArray = [];
        $statusArray[1] = 'Available';
        $statusArray[0] = 'Un Available';
        $gift = Gift::find($id);
        return view('florist.gift.edit', compact('statusArray', 'gift'));
    }

    public function index() {
        $florist_obj = Florist::where('user_id', Auth::user()->id)->first();
        $gifts = Gift::where('florist_id', $florist_obj->id)->paginate(10);
        return view('florist.gift.index', compact('gifts'));
    }

    public function insert(Request $request) {
        $florist_obj = Florist::where('user_id', Auth::user()->id)->first();
        $gift = new Gift;
        $gift->name = $request->name;
        $gift->florist_id = $florist_obj->id;
        $gift->description = $request->description;
        $gift->short_description = $request->short_description;
        $gift->price = (double) $request->price;
        $gift->status = $request->status;
        $gift->arabic = (isset($request->arabic)) ? 1 : 0;
        $gift->save();
        $result = File::makeDirectory('gift_images/gift' . $gift->id);
        if ($result == '1') {
            $data = array();
            if ($request->hasFile('images')) {

                $files = $request->file('images');
                foreach ($files as $file) {
                    $destinationPath = public_path('gift_images/gift' . $gift->id);
                    $number = mt_rand(1000000000, 9999999999) . time() . mt_rand(1000000000, 9999999999);
                    $image_name = $number . '.' . $file->getClientOriginalExtension();
                    $image_name_only = $number;
                    $image_ext_only = $file->getClientOriginalExtension();

                    $image_name_thumbnail = $number . '.thumbnail.' . $file->getClientOriginalExtension();
                    $img = Image::make($file->getRealPath());
                    $img->resize(100, 100, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($destinationPath . '/' . $image_name_thumbnail);

                    $file->move($destinationPath, $image_name);
                    $tem_arr = array('gift_id' => $gift->id, 'file_name' => $image_name_only, 'file_ext' => $image_ext_only);
                    array_push($data, $tem_arr);
                }
                DB::table('gift_images')->insert($data);
            }
        }
        return redirect('florist/gift/index')->with('success', 'Gift Added Successfully');
    }

    public function update($id, Request $request) {

        $gift = Gift::find($id);
        $gift->name = $request->name;
        $gift->description = $request->description;
        $gift->short_description = $request->short_description;
        $gift->price = (double) $request->price;
        $gift->status = $request->status;
        $gift->arabic = (isset($request->arabic)) ? 1 : 0;
        $gift->save();
        $data = array();
        if ($request->hasFile('images')) {

            $files = $request->file('images');
            foreach ($files as $file) {
                $destinationPath = public_path('gift_images/gift' . $gift->id);
                $number = mt_rand(1000000000, 9999999999) . time() . mt_rand(1000000000, 9999999999);
                $image_name = $number . '.' . $file->getClientOriginalExtension();
                $image_name_only = $number;
                $image_ext_only = $file->getClientOriginalExtension();

                $image_name_thumbnail = $number . '.thumbnail.' . $file->getClientOriginalExtension();
                $img = Image::make($file->getRealPath());
                $img->resize(100, 100, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath . '/' . $image_name_thumbnail);

                $file->move($destinationPath, $image_name);
                $tem_arr = array('gift_id' => $gift->id, 'file_name' => $image_name_only, 'file_ext' => $image_ext_only);
                array_push($data, $tem_arr);
            }
            DB::table('gift_images')->insert($data);
        }
        return redirect('florist/gift/index')->with('success', 'Gift Updated Successfully');
    }

}
