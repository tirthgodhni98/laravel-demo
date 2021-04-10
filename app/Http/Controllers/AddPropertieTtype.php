<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property_type;
use Validator;


class AddPropertieTtype extends Controller
{
    //
    public function index()
    {
        $data['property_type'] = Property_type::paginate(5);
        return view('add_propertie_type',$data);
    }
    public function add_property_type(Request $request)
    {
         $this->validate($request, [
            'propertietype' => 'required|string|min:1'
        ]);
        //echo "terst";
        $data = $request->input();
			try{
				$add_property_type = new Property_type;
                $add_property_type->name = $data['propertietype'];
                $add_property_type->save();
                
                return redirect('/propertie_type');
			}
			catch(Exception $e){
                echo $e;
			}
    }
    public function updatepropertytype(Request $request)
    {
        Property_type::where('id', $request['update_id_property'])->update(['name'=>$request['update_propertie_type']]);
        return redirect('/propertie_type');
    }
    public function deletepropertytype(Request $request)
    {
        Property_type::where('id', $request['deletepropertytype'])->delete();
        return redirect('/propertie_type');
    }

}
