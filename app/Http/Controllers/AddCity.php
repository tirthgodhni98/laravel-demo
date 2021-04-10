<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\State;
use App\City;
use DB;
use Validator;

class AddCity extends Controller
{
    //
    public function index()
    {
       // echo "te";die;
        $data['country'] = Country::all();
        $data['state']= State::all();
        $data['citys'] = DB::table('citys')
            ->join('states', 'states.id', '=', 'citys.st_id')
            ->join('countrys', 'countrys.id', '=', 'states.c_id')
            ->select('citys.*', 'states.name', 'citys.id','citys.name as cname','countrys.name as c_name','countrys.id as co_id')
            ->orderBy('citys.id', 'DESC')->paginate(5);

        //echo "<pre>";print_r($data['state']);die;
        return view('add_city',$data);  
    }
    public function add_city(Request $request)
    {
       $this->validate($request, [
           'country' => 'required',
           'state' => 'required',
           'city' => 'required|string|min:1',
           'image' => 'required|mimes:jpg,png,jpeg',
       ]);

       $data = $request->input();
           try{
            $file = $request->file('image');
            $name = RAND().'.'.$file->getClientOriginalExtension();
            $destinationPath = 'city';
            $file->move($destinationPath,$name);
               $add_city = new City;
               $add_city->name = strtolower($data['city']);
               $add_city->st_id = $data['state'];
               $add_city->image = $name;
               $add_city->save();
               return redirect('/citya');
           }
           catch(Exception $e){
               echo $e;
           }

    }   
    public function get_states_by_country(Request $request)
    {
        $data['states'] = State::where("c_id",$request->country_id)
                    ->get(["name","id"]);
        return response()->json($data);

    }
    public function updateimageform(Request $request)
    {
        //echo $request->city_id;die;
        $file = $request->file('update_image');
        $name = RAND().'.'.$file->getClientOriginalExtension();
        $destinationPath = 'city';
        $file->move($destinationPath,$name);
        City::where('id',$request['city_id'])->update(['image'=>$name]);
        return redirect('/citya');
    }
    public function updatecity(Request $request)
    {
        
        City::where('id',$request['update_city_id'])->update(['name'=>strtolower($request['update_city']),'st_id'=>$request['state_id']]);
        return redirect('/citya');
    }
    public function deleteCityid(Request $request)
    {
      //echo  $request['deleteCityid'];die;
        City::where('id', $request['deleteCityid'])->delete();
        return redirect('/citya');
    }
}
