<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\State;
use DB;
use Validator;


class AddState extends Controller
{
    //
    public function index()
    {
        
        $data['country'] = Country::all();
        $data['state'] = DB::table('states')
            ->join('countrys', 'countrys.id', '=', 'states.c_id')
            ->select('states.*', 'countrys.name', 'states.id','states.name as sname')
            ->paginate(5);

        //echo "<pre>";print_r($data['state']);die;
        return view('add_state',$data);   
     }
     public function add_state(Request $request)
     {
        $this->validate($request, [
            'country' => 'required',
            'state_name' => 'required|string|min:1'
        ]);

        $data = $request->input();
			try{
				$add_state = new State;
                $add_state->name = strtolower($data['state_name']);
                $add_state->c_id = $data['country'];
                $add_state->save();
                
                return redirect('/state');
                

			}
			catch(Exception $e){
                //return redirect('create')->with('failed',"operation failed");
                echo $e;
			}

     }
     public function deleteState(Request $request)
    {
    //    echo  $request['name'];
    //    echo  $request['update_country_id'];
         State::where('id', $request['deleteStateid'])->delete();
        return redirect('/state');
    }
    public function updatestate(Request $request)
    {
        State::where('id',$request['update_state_id'])->update(['name'=>strtolower($request['state_name']),'c_id'=>$request['country_id']]);
        return redirect('/state');
    }
}
