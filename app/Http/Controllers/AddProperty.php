<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Country;
use App\State;
use App\City;
use App\Property_type;
use App\Aminities;
use App\Property;
use App\Property_image;
use App\Amenities_assing;
use DB;
use Validator;


class AddProperty extends Controller
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
        ->where('email_id',$request->session()->get('data'))
        ->where('status',1)
        ->select('propertys.*', 'property_types.name as property_type_name','states.name as state_name' ,'citys.name as city_name','countrys.name as country_name',
                'citys.id as city_id','countrys.id as country_id','states.id as state_id','property_types.id as property_types_id' )
        ->paginate(10);
        return view('add_prop',$data);
    }
    public function add_property(Request $request)
    {
         $this->validate($request, [            
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'peropty_type' => 'required',
            'property_name' => 'required|string|min:1',
            'rent'=>'required|numeric|min:1',
            'bedroom' => 'required',
            'aminities' => 'required',
            'washroom' => 'required',
            'description' => 'required',
            'address' => 'required',
            'property_map' => 'required',
            'property_image'=>'required',
            'property_image.*'=>'mimes:jpg,png,jpeg',
         ],[
                'property_image.*.required' => 'Please upload an image only',
                'property_image.*.mimes' => 'Only jpeg, png, jpg  images are allowed',
        ]);

    //    echo "terst";die;
        $data = $request->input();
        
			try{
               
				$add_property = new Property;
                $add_property->email_id = $request->session()->get('data');
                $add_property->name = $data['property_name'];
                $add_property->property_type = $data['peropty_type'];
                $add_property->rent = $data['rent'];
                $add_property->address = $data['address'];
                $add_property->city_id = $data['city'];
                $add_property->map = $data['property_map'];
                $add_property->bedroom = $data['bedroom'];
                $add_property->description = $data['description'];
                $add_property->washroom = $data['washroom'];
                $add_property->status = 1;
                $add_property->save();
                $property_id = $add_property->id;
                //multiple image
                
              
                if($files=$request->file('property_image'))
                {
                    foreach($files as $file)
                    {
                        $add_property_image = new Property_image;
                        $name = $property_id .'_'. RAND().'.'.$file->getClientOriginalExtension();
                        $file->move('property_image',$name);
                        $add_property_image->pro_id = $property_id;
                        $add_property_image->image = $name;
                        $add_property_image->save();
                    }
                }
                
                
                $aminities = $request['aminities'];
                foreach($aminities as $assing)
                {
                    $add_property_Amenities_assing = new Amenities_assing;
                    $add_property_Amenities_assing->pro_id = $property_id;
                    $add_property_Amenities_assing->amenities_id = $assing;
                    $add_property_Amenities_assing->save();
                }


                return redirect('/propertyadd');
			}
			catch(Exception $e){
                echo $e;
			}
    }
    public function quick_property(Request $request)
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
    public function quick_amenities(Request $request)
    {
        $data['amenities_f'] = DB::table('amenities_assings')
        ->where('pro_id',$request['property_id'])
        ->get();

        $data['aminities']= Aminities::all();
        return view('quick_amenities',$data);
    }
    public function quick_property_image(Request $request)
    {
        $data['image'] = DB::table('property_images')
        ->join('propertys','propertys.id','=','property_images.pro_id')
        ->where('pro_id',$request['property_id'])
        ->select('property_images.*','propertys.name as pro_name')
        ->get();
        
       // $data['aminities']= Aminities::all();
        return view('quick_property_image',$data);
    }
    public function updateproperty(Request $request)
    {
        $data=array(
            'name'=>$request['property_name'],
            'rent'=>$request['update_rent'],
            'property_type'=>$request['peropty_type'],
            'city_id'=>$request['update_city'],
            'address'=>$request['update_address'],
            'description'=>$request['update_desc'],
            'map'=>$request['update_map'],
            'bedroom'=>$request['bedroom'],
            'washroom'=>$request['washroom'],

        );
        Property::where('id',$request['update_property_id'])->update($data);
        return redirect('/propertyadd');
    }
    public function image_delete(Request $request)
    {
        $data = Property_image::where('id', $request['property_image_id'])->delete();
        // return view('propertyadd');
    }
    public function deleteproperty(Request $request)
    {
      //echo  $request['deleteCityid'];die;
      Property::where('id', $request['deleteproperty'])->update(['status'=>0]);
        return redirect('/propertyadd');
    }
    public function add_property_image(Request $request)
    {
      $this->validate($request, [  
        'property_image.*'=>'required|mimes:jpg,png,jpeg',
        ]);
      $data = $request->input();
      try

      {
        if($files=$request->file('property_image'))
        {
            foreach($files as $file)
            {
                $add_property_image = new Property_image;
                $name = $data['add_more_property_id'] .'_'. RAND().'.'.$file->getClientOriginalExtension();
                $file->move('property_image',$name);
                $add_property_image->pro_id = $data['add_more_property_id'];
                $add_property_image->image = $name;
               // echo "<pre>";print_r($add_property_image);die;
                $add_property_image->save();
            }
        }
        return redirect('/propertyadd');
      }
      catch(Exception $e)
      {

      }
        
        
    }
    public function update_delete_aminities(Request $request)
    {
      //echo  $request['deleteCityid'];die;
      $key = $request->key;
      if($key == 1)
      {
          
        Amenities_assing::where(['amenities_id'=>$request['ami_id'],'pro_id'=>$request['pro_id']])->delete();
      }
      else
      {
            try
            {
                $add_aminities_ass = new Amenities_assing;
                $add_aminities_ass->pro_id = $request['pro_id'];
                $add_aminities_ass->amenities_id = $request['ami_id'];
                $add_aminities_ass->save();
            }
            catch(Exception $e)
            {

            }
            
      }
      
    }
}
