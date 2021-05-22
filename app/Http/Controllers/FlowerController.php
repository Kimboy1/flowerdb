<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FlowerCreateValidation;
use App\Models\Flower;
use Storage;
use Toastr;
use Carbon\Carbon;

class FlowerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add()
    {
        return view('flowers.add');
    }

    public function store(FlowerCreateValidation $request)
    {
        
        $flower = Flower::create([
            'flower_name' => $request->flower_name,
            'flower_type' => $request->flower_type,
            'flower_color' => $request->flower_color
        ]);
        //dd($request->hasFile('movie_image'));
        if($request->hasFile('flower_image')){
            
            $file = $request->file('flower_image');
            $name =  str_replace(' ','_',$request->flower_name).'.'.$file->getClientOriginalExtension();  
            
            try{
                Storage::disk('public')->putFileAs('Documents/', $file,$name);
            }catch(\Exception $e)
            {
                dd($e->getMessage());
            }
            
            $flower->flower_image = $name;
            $flower->save();
        }
        Toastr::success('Flower added successfully');
        return redirect(route('dashboard'));
    }

    public function edit(Request $request)
    {
        return view('flowers.edit');
    }

    public function update(Request $request)
    {
        return redirect('dashboard');
    }

    public function delete(Request $request)
    {
        $flower = Flower::find($request->id);
        if($flower){
            $flower->delete();
            Toastr::success('Flower deleted successfully');
        }else{
            Toastr::error('Unable to delete movie');
        }
        
        return redirect(route('dashboard'));
    }
}
