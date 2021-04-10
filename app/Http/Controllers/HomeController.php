<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration_insert;
use Illuminate\Support\Facades\Redirect;
use App\Country;
use App\State;
use App\City;
use App\Property_type;
use App\Property;
use DB;
use App\ContactUs;
use Illuminate\Support\Facades\Input;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['country'] = Country::all();
        $data['state']= State::all();
        $data['city']= City::all();
        $data['peropty_type']= Property_type::all();
        $data['property'] = DB::table('propertys')
        ->join('citys','citys.id','=','propertys.city_id')
        ->leftJoin('property_images', function ($join)
            {
                $join->on('property_images.id', '=', DB::raw('(SELECT id FROM property_images WHERE property_images.pro_id = propertys.id LIMIT 1)'));
            })
        ->where('status',1)
        ->select('propertys.*','property_images.image','citys.name as city_name',
                'citys.id as city_id' )
        ->inRandomOrder()->limit(6)->get();

        $data['city_with_property']=DB::table('propertys')
        ->join('citys', 'citys.id', '=', 'propertys.city_id')
        ->select('propertys.city_id as city_id','citys.name','citys.id as city_id','citys.image',DB::raw("count(propertys.city_id) as count"))
        ->groupBy('propertys.city_id')
        ->inRandomOrder()->limit(3)->get();

    //  echo "<pre>";print_r($data['city_with_property']);die;
        return view('home',$data);
    }
    public function about()
    {
        $data['city_count'] = City::count();
        $data['property_count'] = Property::count();
        $data['user_count'] = Registration_insert::where('user_type',1)->count();
        $data['property_dealer_count'] = Registration_insert::where('user_type',2)->count();
        return view('about',$data);
    }
    public function contact()
    {
        
        return view('contact');
    }
    public function contact_add(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $data = $request->input();
           try{
                $add_contact = new ContactUs;
                $add_contact->name = $data['name'];
                $add_contact->email = $data['email'];
                $add_contact->subject = $data['subject'];
                $add_contact->message = $data['message'];
                $add_contact->save();
               return redirect('/contact');
           }
           catch(Exception $e){
               echo $e;
           }
    }
    public function properties()
    {
        $data['country'] = Country::all();
        $data['state']= State::all();
        $data['city']= City::all();
        $data['peropty_type']= Property_type::all();
        $data['property'] = DB::table('propertys')
        ->join('citys','citys.id','=','propertys.city_id')
        ->leftJoin('property_images', function ($join)
            {
                $join->on('property_images.id', '=', DB::raw('(SELECT id FROM property_images WHERE property_images.pro_id = propertys.id LIMIT 1)'));
            })
        ->where('status',1)
        ->select('propertys.*','property_images.image','citys.name as city_name',
                'citys.id as city_id' )
        ->inRandomOrder()->paginate(9);
        return view('properties',$data);
    }
    public function login()
    {
        if( session()->has('data')){
            $user = session()->get('data');
            $data = Registration_insert::where('email_id',$user)->first();
            if($data['user_type'] == 1)
            {
                return Redirect::to('customerpanel');
            }
            elseif($data['user_type'] == 2)
            {
                return redirect()->to('hostpanel');
            }
            elseif($data['user_type'] == 0)
            {
                return redirect()->to('adminpanel');
            }
        }
        else
        {
            return view('login');
        }
      
    }
    public function propertiedetail(Request $request)
    {
        $key = $request->key;
        //echo $key;die;
        $data['image'] = DB::table('property_images')
        ->join('propertys','propertys.id','=','property_images.pro_id')
        ->where('pro_id',$key)
        ->select('property_images.*','propertys.name as pro_name')
        ->inRandomOrder()->get();

        $data['image_first'] = DB::table('property_images')
        ->join('propertys','propertys.id','=','property_images.pro_id')
        ->where('pro_id',$key)
        ->select('property_images.*','propertys.name as pro_name')
        ->inRandomOrder()->first();
        
        $iamge_show_html= array();
        foreach($data['image'] as $image_small)
        {
            if($image_small->id != $data['image_first']->id)
            {
                array_push($iamge_show_html,$image_small->image);
            }
        }
        $data['path_of_iamge']= $iamge_show_html;
        // echo "<pre>";print_r($data['path_of_iamge']);die;

        $data['property'] = DB::table('propertys')
        ->join('citys','citys.id','=','propertys.city_id')
        ->join('states', 'states.id', '=', 'citys.st_id')
        ->join('countrys', 'countrys.id', '=', 'states.c_id')
        ->join('property_types','property_types.id','=','propertys.property_type')
        ->join('registrations','registrations.email_id','=','propertys.email_id')
        ->where('propertys.id',$key)
        ->select('propertys.*', 'registrations.email_id','registrations.phone_no','property_types.name as property_type_name','states.name as state_name' ,'citys.name as city_name','countrys.name as country_name')
        ->first();

        $data['aminities'] = DB::table('amenities_assings')
        ->join('amenitiess','amenitiess.id','=','amenities_assings.amenities_id')
        ->where('amenities_assings.pro_id',$key)
        ->select('amenities_assings.*', 'amenitiess.name as aminities_name','amenitiess.fa_code as aminities_fa_code')
        ->get();

        return view('propertiedetail',$data);
    }
    public function searchpropertie(Request $request)
    {
        $country = $request->country;
        $state = $request->state;
        $city = $request->city;
        $peropty_type = $request->peropty_type;
        // echo $country,$state.$city,$peropty_type;die;
        $this->validate($request, [
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'peropty_type' => 'required',
        ]);
        
        $data['property'] = DB::table('propertys')
        ->join('citys','citys.id','=','propertys.city_id')
        ->join('property_types','property_types.id','=','propertys.property_type')
        ->leftJoin('property_images', function ($join)
            {
                $join->on('property_images.id', '=', DB::raw('(SELECT id FROM property_images WHERE property_images.pro_id = propertys.id LIMIT 1)'));
            })
        ->where(['propertys.city_id'=>$city,'propertys.property_type'=>$peropty_type])
        ->select('propertys.*','citys.name as city_name','property_images.image')
        ->paginate(9);
            // echo "<pre>";\print_r($data);die;   
        return view('searchpropertie',$data);
    } 
    public function searchforcityproperty(Request $request)
    {
        $city = $request->key;
        // echo $country,$state.$city,$peropty_type;die;
       
        $data['property'] = DB::table('propertys')
        ->join('citys','citys.id','=','propertys.city_id')
        ->leftJoin('property_images', function ($join)
            {
                $join->on('property_images.id', '=', DB::raw('(SELECT id FROM property_images WHERE property_images.pro_id = propertys.id LIMIT 1)'));
            })
        ->where('propertys.city_id',$city)
        ->select('propertys.*','citys.name as city_name','property_images.image')
        ->paginate(12);
        
        $data['city'] = $data['city']= City::where('id',$city)->first();
            // echo "<pre>";\print_r($data);die;   
        return view('searchforcityproperty',$data);
    } 
    // public function hostcanclebooking()
    // {
    //     return view ('hostcanclebooking');
    // }
    public function country_all_user(Request $request)
    {
        $data['states'] = State::where("c_id",$request->country_id)
                    ->get(["name","id"]);
        return response()->json($data);

    }
    public function state_all_user(Request $request)
    {
        $data['states'] = City::where("st_id",$request->state_id)
                    ->get(["name","id"]);
        return response()->json($data);

    }

    
}
