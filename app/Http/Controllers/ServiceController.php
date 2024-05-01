<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
       $servises = Service::with('airports')->get();

       
        $airports = Airport::all();
        return view('dashboard.services', compact('servises','airports'));
    }

   
    public function store(Request $request){
        $validatedData = $request->validate([
            'name'=>'required|string|max:245',
            'description'=>'required|string|max:545',
            'price'=>'required',
            'airport_id'=>'required',
        ]);
    
        $service = new Service;
        $service->name = $request->name;
        $service->description = $request->description;
        $service->price = $request->price;
        $service->save();
        
        foreach ($request->airport_id as $airport_id) {
            $service->airports()->attach($airport_id);
        }   
    
        return redirect()->back()->with('success','service bien ajouter!!');
    }



    public function update(Request $request, $id){
        $validatedata = $request->validate([
            'name'=>'required|string|max:234',
            'description'=>'required|string|max:734',
            'price'=>'required',
        ]);

        $service = Service::find($id);
        $service->update([
            'name'=>$request->input('name'),
            'description'=>$request->input('description'),
            'price'=>$request->input('price')
        ]);
    

         return redirect()->back()->with('success','sercice bien modifier!!');

    }

    public function destroy($id){
        $service = Service::findOrFail($id);
       
        $service->delete();
        session()->flash('success', "{$service->name} deleted successfully");
        return response()->json(['success' => true, 'message' => "{$service->name} deleted successfully"]);
    }
}


