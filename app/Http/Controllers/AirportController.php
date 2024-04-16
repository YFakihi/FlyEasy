<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use Illuminate\Http\Request;

class AirportController extends Controller
{
    public function index(){
        $airports = Airport::all();
        return view('dashboard.airports',compact('airports'));
    }

    public function store (Request $request){
        $validatedata = $request->validate([
            'name'=> 'required|string|max:250',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $all = $request->all();
    
        if ($request->hasFile("image")) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $path = 'uploads/airports/';
            $file->move($path, $fileName);
            $all["images"] = $fileName;
        }
        Airport::create($all);
       return redirect()->back()->with('success','airport bien ajouter!!');
    }


    public function getServices($id)
    {
        $airport = Airport::with('services')->find($id);
        return response()->json($airport->services);
    }
    public function delete($id)
    {
        $airport = Airport::findOrFail($id);
        $airport->delete();
    
        session()->flash('success', "{$airport->name} deleted successfully");
        return response()->json(['success' => true, 'message' => "airport deleted successfully"]);  
    }

    public function update(Request $request ,$id){
        $validatedata = $request->validate([
            'name'=> 'required|string|max:234'
        ]);
    
         $airport = Airport::find($id);
         $airport->update([
            'name'=> $request->input('name')
         ]);
         return redirect()->back()->with('success','airport bien modifier!!');
    }
    
    
}
