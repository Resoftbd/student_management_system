<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\StudentsController;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designation = Auth::user()->designation;
        if($designation=='student')
            return view('dashboard part-student.admin');
        else
            return view('home');
    }

    /**
        Completing  Student's profile
     */

    public function yourProfile()
    {
        $designation = Auth::user()->designation;
        if($designation=='student'){
            $result = (new StudentsController)->create();
            if($result)
                return view('dashboard part-student.admin');
        }

        else
            return view('home');
    }
}
