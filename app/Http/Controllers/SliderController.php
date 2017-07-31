<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SliderController extends Controller
{
    public function index(){
        $sliders=Slider::all();
        return view('dashboard part-admin.slideshow',compact('sliders'));
    }
    public function store(Request $request){

        $image = $request->file('slider_link')->getClientOriginalName();
        $filename = time().$image;
        $gallery = new Slider;
        $gallery->slider_name= $request->slider_name;
        $gallery->slider_link = $filename;
        $gallery->save();
        $request->slider_link->move(public_path('uploaded'),$gallery->slider_name);
        $sliders=Slider::all();
        return view('dashboard part-admin.slideshow',compact('sliders'));

    }

    public function delete(Request $request, $slider_id){

        $notebook=Slider::find($slider_id);
        $notebook->delete();
        $sliders=Slider::all();
        return view('dashboard part-admin.slideshow',compact('sliders'));
    }
}
