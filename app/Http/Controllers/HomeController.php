<?php

namespace App\Http\Controllers;
use App\Models\Flower;
use Illuminate\Http\Request;

class HomeController extends Controller
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

    public function index()
    {
        $flowers = Flower::orderBy('created_at', 'desc')->get();
        $flowerCount = $flowers->count();
        
        return view('dashboard',compact('flowers','flowerCount'));
    }
}
