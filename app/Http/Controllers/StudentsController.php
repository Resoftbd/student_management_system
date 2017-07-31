<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class StudentsController extends Controller
{
    public function create()
    {
        $id = Auth::user()->id;
        $available = DB::table('students')->where('student_user_id_fkey',$id );
        
        if($available){
			return $message="ERROR message";
        }
        else
            {
					
				$obj = new Students();
				$obj->student_name = Auth::user()->name;
				$obj->student_user_id_fkey = Auth::user()->id;
				$obj->student_email = Auth::user()->email;
				$result = $obj->save();
				if($result)
					$message ="Please complete your profile to be approved!!";
				return view('dashboard part-student.admin');
			}

    }
}
