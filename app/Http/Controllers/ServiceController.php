<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::all();
        return view('dashboard.services', compact('services'));
    }

    public function store(Request $request){
        $validatedata = $request->validate([
            'name'=>'required|string|max:245',
            'description'=>'required|string|max:545',
            'price'=>'required',
        ]);

        Service::create($validatedata);
        return redirect()->back()->with('success','service bien ajouter!!');
    }

    public function destroy($id){
        $service = Service::findOrFail($id);

        $service->delete();
        session()->flash('success', "{$service->name} deleted successfully");
        return response()->json(['success' => true, 'message' => "{$service->name} deleted successfully"]);
    }
}


