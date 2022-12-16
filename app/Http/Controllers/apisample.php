<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

use App\UserSkills;
use App\UserProfile;
use App\SkillLevel;
use App\Skill;

class apisample extends Controller
{
    public function getuserskill(){
    $users_skill =  DB::table('userskills')
    ->join('users', 'userskills.username', '=', 'users.username')
    ->select('userskills.*')
    ->get();
        return response()->json($users_skill,200);
    }


   /*$users =  DB::table('users')
    ->join('contacts', 'users.id', '=', 'contacts.user_id')
    ->join('orders', 'users.id', '=', 'orders.user_id')
    ->select('users.*', 'contacts.phone', 'orders.price')
    ->get();*/

    public function getuserskills(Request $request,$id){

        echo $id;

    }


    public function getuserprofile(){
        return response()->json(UserProfile::all(),200);
    }

    public function getskilllevel(){
        return response()->json(SkillLevel::all(),200);
    }

    public function getskill(){
        return response()->json(Skill::all(),200);
    }
}

