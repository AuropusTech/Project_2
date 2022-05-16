<?php

namespace App\Http\Controllers;


use App\Models\Dept;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class StaffController extends Controller
{

    public function staffProfile()
    {
        $authid = Auth::user()->id;

        $user = User::select('users.id','users.fname','depts.deptName')->join('depts', 'depts.id', '=', 'users.deptCode')->where('users.id', '=', $authid)->get();

        //return $user;

        return view('staff.staffProfile',[
            'user' => $user
        ]);
    }

    public function staffProfileEdit()
    {
        return view('staff.staffProfileEditAuth');
    }


}
