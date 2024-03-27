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
            'name'=> 'required|string|max:250'
        ]);

        Airport::create($validatedata);
       return redirect()->back()->with('success','airport bien ajouter!!');
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
