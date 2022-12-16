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

    public function check(Request $request, $id)
    {
       /* $input = $request->all();
   
        $validator = Validator::make($input, [
            'name' => 'required',
            'detail' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        $product = Product::find($id);   
        $product->name = $input['name'];
        $product->detail = $input['detail'];
        $product->save();
   
        return $this->sendResponse(new ProductResource($product), 'Product Updated Successfully.');*/
    }

    public function create()

    {

        return view('sample.login');

    }



    public function store(Request $request)

    {

        $request->validate([

            'username' => 'required',
            'name' => 'required',

            'address' => 'required',

            'bod' => 'required',

            'email' => 'required',            

        ]);

  

        UserProfile::create($request->all());

   

        return redirect()->route('logins.index');

    }


    
}
