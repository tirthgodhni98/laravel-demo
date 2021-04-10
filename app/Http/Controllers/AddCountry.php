<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use Validator;

class AddCountry extends Controller
{
    //
    public function index()
    {
        
        $data['country'] = Country::paginate(5);;
        // echo "<pre>";print_r($show_country);die; 
        return view('add_country',$data);
    }
    public function add_country(Request $request)
    {
         $this->validate($request, [
            'country_name' => 'required|string|min:1'
        ]);
        //echo "terst";
        $data = $request->input();
			try{
				$add_county = new Country;
                $add_county->name = strtolower($data['country_name']);
                $add_county->save();
                
                return redirect('/country');
                

			}
			catch(Exception $e){
                //return redirect('create')->with('failed',"operation failed");
                echo $e;
			}

    }
    public function updatecountry(Request $request)
    {
        Country::where('id', $request['update_country_id'])->update(['name'=>strtolower($request['name'])]);
        return redirect('/country');
    }
    public function deleteCountry(Request $request)
    {
        Country::where('id', $request['deleteCountryid'])->delete();
        return redirect('/country');
    }
    


}
