<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserSkills;
use App\UserProfile;
use App\SkillLevel;
use App\Skill;
use App\Usernew;


class LoginController extends Controller
{
    public function index()

    {

        return view('sample.login');

    }

    public function create()

    {

        return view('sample.login');

    }



    public function store(Request $request)

    {

        $request->validate([

            'name' => 'required',

            'address' => 'required',

            'bod' => 'required',

            'email' => 'required',            

        ]);

  

        UserProfile::create($request->all());

   

        return redirect()->route('logins.index');

    }


    
}
