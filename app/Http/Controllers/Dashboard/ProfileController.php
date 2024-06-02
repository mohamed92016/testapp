<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use App\Models\Admin;
use DB;

class ProfileController extends Controller
{
    public function editProfile(){
      $id = auth('admin')->user()->id;
      
      $admin = Admin::find($id);

      return view('dashboard.profile.edit', compact('admin'));


    }

    public function updateProfile(ProfileRequest $request){
        // echo gettype($request);

        try{
            $id = auth('admin')->user()->id;
      
            $admin = Admin::find($id);

            if($request->filled('password')){
                $request->merge(['password'=>bcrypt($request->password)]);

            }
            // unset($request["id"]);

           

            // $admin->update($request->all());
            $admin->update([
                "name" => $request->name,
                "email" => $request->email,
                "password" => $request->password,
            ]);

            return redirect()->back()->with(['success'=>'تم التحديث بنجاح']);

        }catch(\Exception $ex){

            return redirect()->back()->with(['error'=>'هناك خطأ ما يرجى المحاولة فيما بعد']);

        }

    }
    

    
   
}
