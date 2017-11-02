<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Models\Area;
use App\Models\Florist;
use App\Models\FloristTiming;
use App\Models\Size;
use App\Models\Catagory;
use App\Models\ProductSize;
use App\Models\Product;
use App\Models\Gift;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\UploadedFile;
use File;
use Storage;
use Image;
use DB;

class ProductController extends Controller {

    public function add() {
        $florist_obj = Florist::where('user_id', Auth::user()->id)->first();
        $gifts = Gift::where('florist_id', $florist_obj->id)->get();
        $catagories = Catagory::all();
        $sizes = Size::orderBy('id', 'asc')->get();

        $statusArray = [];
        $statusArray[1] = 'Available';
        $statusArray[0] = 'Un Available';

        $giftArray = [];
        foreach ($gifts as $gift) {
            $giftArray[$gift->id] = $gift->name;
        }
        $catagoryArray = [];
        foreach ($catagories as $catagory) {
            $catagoryArray[$catagory->id] = $catagory->name;
        }


        return view('florist.product.add', compact('statusArray', 'catagoryArray', 'giftArray', 'sizes'));
    }

    public function edit($id) {
        $florist_obj = Florist::where('user_id', Auth::user()->id)->first();
        $gifts = Gift::where('florist_id', $florist_obj->id)->get();
        $catagories = Catagory::all();
        $product = Product::find($id);
        $sizes = Size::orderBy('id', 'asc')->get();


        $statusArray = [];
        $statusArray[1] = 'Available';
        $statusArray[0] = 'Un Available';

        $giftArray = [];
        foreach ($gifts as $gift) {
            $giftArray[$gift->id] = $gift->name;
        }
        $catagoryArray = [];
        foreach ($catagories as $catagory) {
            $catagoryArray[$catagory->id] = $catagory->name;
        }


        return view('florist.product.edit', compact('statusArray', 'catagoryArray', 'giftArray', 'product', 'sizes'));
    }

    public function index() {
        $florist_obj = Florist::where('user_id', Auth::user()->id)->first();
        $products = Product::where('florist_id', $florist_obj->id)->paginate(10);
        return view('florist.product.index', compact('products'));
    }

    public function insert(Request $request) {

        $florist_obj = Florist::where('user_id', Auth::user()->id)->first();
        $product = new Product;
        $product->name = $request->name;
        $product->florist_id = $florist_obj->id;
        $product->description = $request->description;
        $product->short_description = $request->short_description;
        $product->delivery_time = $request->delivery_time;
        $product->status = $request->status;
        $product->c_message = (isset($request->c_message)) ? 1 : 0;
        $product->c_limit = $request->c_limit;
        $product->price =(double)$request->price;
        $product->weight = $request->weight;
        $product->save();
        $product->catagories()->sync($request->catagories);
        $product->gifts()->sync($request->gifts);
        //
        $sizes_array = array();
        if (count($request->input_size)) {
            foreach ($request->input_size as $key => $value) {
                $tem_arr = array('product_id' => $product->id, 'size_id' => $value, 'price' => $request->input_price[$value - 1], 'weight' => $request->input_weight[$value - 1]);
                array_push($sizes_array, $tem_arr);
            }
        }
        array_push($sizes_array, array('product_id' => $product->id, 'size_id' => 2, 'price' => $request->price, 'weight' => $request->weight));
        $product->sizes()->sync($sizes_array);
        //
        $result = File::makeDirectory('product_images/product' . $product->id);
        if ($result == '1') {
            $data = array();
            if ($request->hasFile('images')) {

                $files = $request->file('images');
                foreach ($files as $file) {
                    $destinationPath = public_path('product_images/product' . $product->id);
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
                    $tem_arr = array('product_id' => $product->id, 'file_name' => $image_name_only, 'file_ext' => $image_ext_only);
                    array_push($data, $tem_arr);
                }
                DB::table('product_images')->insert($data);
            }
        }
        return redirect('florist/product/index')->with('success', 'Product Added Successfully');
    }

    public function update($id, Request $request) {
//         $sizes_array = array();
//        foreach ($request->input_size as $key => $value) {
//            $tem_arr = array('product_id' => $id, 'size_id' => $value, 'price' => $request->input_price[$value - 1], 'weight' => $request->input_weight[$value - 1]);
//            array_push($sizes_array, $tem_arr);
//        }
//        echo '<pre>';
//        print_r($sizes_array);exit;
        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->short_description = $request->short_description;
        $product->delivery_time = $request->delivery_time;
        $product->status = $request->status;
        $product->c_message = (isset($request->c_message)) ? 1 : 0;
        $product->c_limit = $request->c_limit;
        $product->price = $request->price;
        $product->weight = $request->weight;
        $product->save();
        $product->catagories()->sync($request->catagories);
        $product->gifts()->sync($request->gifts);

        $my_size_array = [];
        // pivot values syncronozation without regular
        if (count($request->input_size)) {

            foreach ($request->input_size as $key => $value) {
                $my_size_array[] = $value;
            }
            $my_size_array[] = 2;
            $product->sizes()->sync($my_size_array);
            foreach ($request->input_size as $key => $value) {
                $my_array[$value] = ['price' => $request->input_price[$value - 1], 'weight' => $request->input_weight[$value - 1]];
            }
            $my_array[2] = ['price' => $request->price, 'weight' => $request->weight];
            $product->sizes()->sync($my_array, false);
        } else {
            $my_array[2] = ['price' => $request->price, 'weight' => $request->weight];
            $product->sizes()->sync($my_array, false);
        }

        $data = array();
        if ($request->hasFile('images')) {

            $files = $request->file('images');
            foreach ($files as $file) {
                $destinationPath = public_path('product_images/product' . $product->id);
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
                $tem_arr = array('product_id' => $product->id, 'file_name' => $image_name_only, 'file_ext' => $image_ext_only);
                array_push($data, $tem_arr);
            }
            DB::table('product_images')->insert($data);
        }

        return redirect('florist/product/index')->with('success', 'Product Updated Successfully');
    }

}
