<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Device; //reference to the model

class DevicesController extends Controller
{
	#displaying data on the home page
    public function home(){
    	$devices = Device::all();
    	return view('home', ['devices' => $devices]);
    }

    #adding data from the form into the database
    public function add(Request $request){
    	$this->validate($request, [
          'name' => 'required',
          'quantity' => 'required'
    	]);
        $devices =new Device;
        $devices->name = $request->input('name');
        $devices->quantity = $request->input('quantity');
        $devices->save();
        return redirect('/')->with('info', 'Stored Successfully');
    }

    #displaying data in the update form
    public function update($id){
    	$devices = Device::find($id);
    	return view('update', ['devices' => $devices]);
    }

    #updating
    public function updateData(Request $request, $id){
        $this->validate($request, [
          'name' => 'required',
          'quantity' => 'required'
    	]);
    	$data = array(
            'name' => $request->input('name'),
            'quantity' => $request->input('quantity')
    	);
        Device::where('id', $id)->update($data);
        return redirect('/')->with('info', 'Updated Successfully');
    }

    #deleting data
    public function delete($id){
    	Device::where('id', $id)->delete();
    	return redirect('/')->with('info', 'Deleted Successfully');
    }

    #viewing data
    public function view($id){
    	$devices = Device::find($id);
    	return view('view', ['devices' => $devices]);
    }
}
