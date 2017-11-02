<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Models\Area;
use App\Models\Florist;
use App\Models\FloristArea;
use App\Models\Catagory;
use App\Models\Product;
use App\Models\FloristTiming;
use App\Repositories\UserRepository;
use App\Repositories\SessionRepository;
use Illuminate\Support\Facades\Validator;
use Image;
use Carbon\Carbon;

class mainFloristController extends Controller {

    public function index($id) {

        $florist = Florist::find($id);
        return view('front.florist.index', compact('florist'));
    }

    public function flower_detail($id) {

        $product = Product::find($id);
        return view('front.product_detail.index', compact('product'));
    }

    public function home() {
        $florists = Florist::all();
        $catagories = Catagory::all();
        $areas = Area::all();
        $areasArray = [];
        foreach ($areas as $key => $value) {
            $areasArray[$value->id] = $value->name;
        }

        return view('front.home.index', compact('florists', 'catagories', 'areasArray'));
    }

    public function all_products() {
//       $dt = Carbon::createFromDate(2017,11, 2);
//       echo $dt->formatLocalized('%A'); 
//       exit;
        $florists = Florist::all();
        $areas = Area::all();
        $products = Product::all();
        return view('front.flowers-list.index', compact('products', 'areas', 'florists'));
    }

    public function my_query(Request $request) {
        $days = $this->get_days($request->date);
        $query = Product::where('delivery_time', '<=', $days);

        if ($request->has('price')) {

            $query = Product::where('price', '<=', $request->price);
        }
        if ($request->has('florist_id')) {

            $query->whereHas('florist', function ($q) use ($request) {
                return $q->where('id', $request->florist_id);
            });
        }
        if ($request->has('area_id')) {

            $query->whereHas('florist', function ($q) use ($request) {
                $q->whereHas('areas', function ($q) use ($request) {
                    return $q->where('area_id', $request->area_id);
                });
            });
        }

        $products = $query->get();










        $florists = Florist::all();
        $areas = Area::all();
        return view('front.flowers-list.index', compact('products', 'areas', 'florists'));
    }

    public function all_products_filter(Request $request) {
        $area_id = $request->get('area_id');
        $price = $request->get('price');
        $florist_id = $request->get('florist_id');
        $date = $request->get('date');
        $time = $request->get('time');
        $products = Product::where([])->get();
        $florists = Florist::all();
        $areas = Area::all();
        return view('front.flowers-list.index', compact('products', 'areas', 'florists'));
    }

    private function get_days($customer_date) {
        $date11 = date("Y-m-d", strtotime($customer_date));
        $date22 = date("Y-m-d");
        $date1 = date_create($date11);
        $date2 = date_create($date22);
        $diff = date_diff($date2, $date1);
        $days = $diff->format("%a");
        return (int) $days;
    }

}
