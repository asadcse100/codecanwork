<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Models\UserProfile;
use App\Models\ReferralCode;
use App\Services\ReferralService;
use App\Models\ProductCategory;
use App\Models\ProductService;
use Hash;
use Illuminate\Support\Str;
use Auth;
use DB;
class DataController extends Controller
{
    public function getService(Request $request){
        $imagepath = asset('storage/uploads/services/') ;
        $QuaryString = "select id,title,about_service,CONCAT('".$imagepath."',image) as imagepath from freelancer_services where product_service_id =". $request->service_id;
        $service_list = DB::select($QuaryString) ;
        return json_encode($service_list);

    }

    public function getCategoryData(Request $request){       
        $service_list = ProductCategory::where('status',1)->select('id','name')->orderby('order_by')->get();
        return response()->json([
            'result' => true,
            'service_list' => $service_list
        ]);       

    }

    public function getSubCategoryData(Request $request){
        $Cat_ID=ProductCategory::where('name','like', '%' . $request->cat_name . '%')->select('id','name')->get();
        $subservice_list = ProductService::where('status',1)->where('category_id',$Cat_ID[0]->id)->select('id','title')->get();

        return response()->json([
            'result' => true,
            'sub_service_list' => $subservice_list
        ]);

    }

    public function serviceList(Request $request)
    {
        $service_list = Service::where('status',1)->where('product_service_id',$request->id)->select('title', 'about_service')->get();

        return response()->json([
            'result' => true,
            'service_list' => $service_list
        ]);
    }

}
