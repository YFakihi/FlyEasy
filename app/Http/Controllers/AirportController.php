<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use Illuminate\Http\Request;
use App\Repositories\AirportRepositoryInterface;
class AirportController extends Controller
{

    protected $repository;

    public function __construct(AirportRepositoryInterface $repository) {
        $this->repository = $repository; 
    }
    
    public function index(){
        $airports = $this->repository->getAll();
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
        // Airport::create($all);

        $this->repository->create($all);
       return redirect()->back()->with('success','airport bien ajouter!!');
    }
    public function airportlist()
    {
        $airports = $this->repository->getAll();
        return view('welcome', compact('airports'));
    }

    public function getServices($id)
    {
        // $airport = Airport::with('services')->find($id);
        $airport = $this->repository->getById($id);
        return response()->json($airport->services);
    }
    public function delete($id)
    {
       
        $airport = $this->repository->getById($id);
        $this->repository->delete($airport);
        // $airport = Airport::findOrFail($id);
        // $airport->delete();
    
        session()->flash('success', "{$airport->name} deleted successfully");
        return response()->json(['success' => true, 'message' => "airport deleted successfully"]);  
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:234'
        ]);

        $airport = $this->repository->getById($id);
        $this->repository->update($airport, $request->only('name'));

        return redirect()->back()->with('success', 'Airport updated successfully');
    }
    
}
