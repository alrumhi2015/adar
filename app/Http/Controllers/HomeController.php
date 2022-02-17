<?php

namespace App\Http\Controllers;

use App\Models\User;
use Image;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.index');
    }


    public function setting()
    {
        return view('admin.pages.user_setting');
    }


    public function storeProfile(Request $request){








        $currentId = $request->id;

        $old_image  = $request->old_image;



       if($request->file('photo')){
        if($old_image != null){

            unlink($old_image);
        }

        $image  = $request->file('photo');
        $image_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $save_url = 'upload/profile/'.$image_gen;
        Image::make($image)->resize(300,300)->save($save_url);
        $user = User::find($currentId);
        $user->user_photo_path = $save_url;
        $user->save();





       }

       if(Hash::check($request->oldpassword, Auth::user()->password)){


        if($request->input('newpassword')){

            $user = User::find($currentId);

            $user->password =  Hash::make($request->newpassword);
            $user->save();




        }



       }


       $user = User::find($currentId);
       $user->first_name =  $request->first_name;
       $user->last_name =  $request->last_name;
       $user->email =  $request->email;
       $user->gender =  $request->gender;
       $user->mobile =  $request->mobile;



       $user->save();






       return redirect()->route('profile.setting');


    }



    // user operation

    public function viewUsers(){


        $users = User::orderBy('created_at', 'DESC')->get();

        return view('admin.pages.users.view_users',compact('users'));


    }



    public function addUser(){

      return   view('admin.pages.users.add_users');
    }




    public function storeUser(Request $req)
    {

        $user  = new User;
        $validated = $req->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users|email|max:255',
            'mobile' => 'required|unique:users|max:255',
            'password' => 'required|confirmed|',
            'gender' => 'required',
            'nationality' => 'required',
            'isCompany' => 'required',
            'user_type' => 'required',
        ]);

         if($req->file('photo')){




            $image  = $req->file('photo');
            $image_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $save_url = 'upload/profile/'.$image_gen;
            Image::make($image)->resize(300,300)->save($save_url);


            $user->user_photo_path = $save_url;

         }



         $user->first_name = $req->first_name;
         $user->last_name = $req->last_name;
         $user->email = $req->email;
         $user->mobile = $req->mobile;
         $user->gender = $req->gender;
         $user->nationality = $req->nationality;
         $user->isCompany = $req->isCompany;
         $user->user_type = $req->user_type;
         $user->password =    Hash::make($req->password);


           $user->save();

         return redirect()->route('view.users');


    }

    public function editUser($id)
    {

        $user = User::find($id);

       return view('admin.pages.users.update_users',compact('user'));


    }



    public function updateUser(Request $req)
    {

       $user = User::find($req->id);

        $old_image  = $req->old_image;

        $validated = $req->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users,id,'.$req->id.'|email|max:255',
            'mobile' => 'required|unique:users,id,'.$req->id.'|max:255',
            'password' => 'confirmed',
            'gender' => 'required',
            'nationality' => 'required',
            'isCompany' => 'required',
            'user_type' => 'required',
        ]);

         if($req->file('photo')){

            if($old_image != null){

                unlink($old_image);
            }

            $image  = $req->file('photo');
            $image_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $save_url = 'upload/profile/'.$image_gen;
            Image::make($image)->resize(300,300)->save($save_url);


            $user->user_photo_path = $save_url;

         }

         if($req->input('password')){



            $user->password =  Hash::make($req->password);





        }




         $user->first_name = $req->first_name;
         $user->last_name = $req->last_name;
         $user->email = $req->email;
         $user->mobile = $req->mobile;
         $user->gender = $req->gender;
         $user->nationality = $req->nationality;
         $user->isCompany = $req->isCompany;
         $user->user_type = $req->user_type;



           $user->save();

         return redirect()->route('view.users');


    }

    public function deleteUser($id)
    {


        $user = User::find($id);

        $user->delete();


        return redirect()->route('view.users');

    }
}
