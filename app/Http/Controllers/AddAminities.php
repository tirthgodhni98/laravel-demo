<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Aminities;

class AddAminities extends Controller
{
    //
    public function index()
    {
        
        $data['aminities'] = Aminities::paginate(5);

        //echo "<pre>";print_r($data['state']);die;
        return view('add_aminities',$data);   
     }
     public function add_aminities(Request $request)
    {
         $this->validate($request, [
            'aminities_name' => 'required|string|min:1',
            'fa_code' => 'required|string|min:1',
        ]);
        $data = $request->input();
			try{
				$add_aminities = new Aminities;
                $add_aminities->name = $data['aminities_name'];
                $add_aminities->fa_code = $data['fa_code'];
                $add_aminities->save();
                 return redirect('/aminities');
			}
			catch(Exception $e){
                echo $e;
			}

    }
    public function updateaminities(Request $request)
    {
        Aminities::where('id', $request['update_id'])->update(['name'=>$request['update_aminities_name'],'fa_code'=>$request['update_fa_code']]);
        return redirect('/aminities');
    }
    public function deleteAminitiesid(Request $request)
    {
        Aminities::where('id', $request['deleteAminitiesid'])->delete();
        return redirect('/aminities');
    }
}
