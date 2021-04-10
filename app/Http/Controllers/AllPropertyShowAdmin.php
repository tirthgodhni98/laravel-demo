<?php

namespace App\Http\Controllers;

use App\Country;
use App\State;
use App\City;
use App\Property_type;
use App\Aminities;
use App\Property;
use App\Property_image;
use App\Amenities_assing;
use DB;
use Illuminate\Http\Request;

class AllPropertyShowAdmin extends Controller
{
    //
    public function index(Request $request)
    {
        $data['country'] = Country::all();
        $data['state']= State::all();
        $data['city']= City::all();
        $data['peropty_type']= Property_type::all();
        $data['aminities']= Aminities::all();
        //$data['property']= Property::where('email_id',$request->session()->get('data'))->get();
        $data['property'] = DB::table('propertys')
        ->join('citys','citys.id','=','propertys.city_id')
        ->join('states', 'states.id', '=', 'citys.st_id')
        ->join('countrys', 'countrys.id', '=', 'states.c_id')
        ->join('property_types','property_types.id','=','propertys.property_type')
        ->where('status',1)
        ->select('propertys.*', 'property_types.name as property_type_name','states.name as state_name' ,'citys.name as city_name','countrys.name as country_name',
                'citys.id as city_id','countrys.id as country_id','states.id as state_id','property_types.id as property_types_id' )
        ->paginate(10);
        return view('allpropertie',$data);
    }
    public function quick_property_admin(Request $request)
    {
        $data['user'] = DB::table('propertys')
        ->join('citys','citys.id','=','propertys.city_id')
        ->join('states', 'states.id', '=', 'citys.st_id')
        ->join('countrys', 'countrys.id', '=', 'states.c_id')
        ->join('property_types','property_types.id','=','propertys.property_type')
        ->where('propertys.id',$request['property_id'])
        ->select('propertys.*', 'property_types.name as property_type_name','states.name as state_name' ,'citys.name as city_name','countrys.name as country_name')
        ->first();
        //echo "<pre>";print_r($data);die;
        return view('quick_property',$data);
    }
    public function quick_amenities_admin(Request $request)
    {
        $data['aminities'] = DB::table('amenities_assings')
        ->join('amenitiess','amenitiess.id','=','amenities_assings.amenities_id')
        ->where('amenities_assings.pro_id',$request['property_id'])
        ->select('amenities_assings.*', 'amenitiess.name as aminities_name','amenitiess.fa_code as aminities_fa_code')
        ->get();
        return view('quick_amenities_admin',$data);
    }
    public function quick_property_image_admin(Request $request)
    {
        $data['image'] = DB::table('property_images')
        ->join('propertys','propertys.id','=','property_images.pro_id')
        ->where('pro_id',$request['property_id'])
        ->select('property_images.*','propertys.name as pro_name')
        ->get();
        
       // $data['aminities']= Aminities::all();
        return view('quick_property_image_admin',$data);
    }
}
