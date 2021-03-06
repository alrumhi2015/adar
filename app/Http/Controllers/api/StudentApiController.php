<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Image;

class StudentApiController extends Controller
{
    public function index()
    {
        return Student::orderBy('created_at', 'DESC')->get();
    }

    public function store(Request $req)
    {


        $student  = new Student();

        $validated = $req->validate([
            'full_name' => 'required',
            'mobile' => 'required',
            'email' => 'required|unique:students|email|max:255',
            'civil_number' => 'required|unique:students|max:255',
            'gender' => 'required',
            'nationality' => 'required',
            'student_photo_path' => '',
            'student_passport_path' => '',
            'student_id_path' => '',

        ]);


        //student photo
         if($req->file('student_photo')){
            $image  = $req->file('student_photo');
            $image_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $save_url = 'upload/students_photo/'.$image_gen;
            Image::make($image)->resize(300,300)->save($save_url);
            $student->student_photo_path = $save_url;

         }

              //passport photo
        if($req->file('passport_photo')){

            $image  = $req->file('passport_photo');
            $image_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $save_url = 'upload/passport_photo/'.$image_gen;
            Image::make($image)->resize(300,300)->save($save_url);
            $student->student_passport_path = $save_url;

             }


                  //civil photo
         if($req->file('civil_photo')){
            $image  = $req->file('civil_photo');
            $image_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $save_url = 'upload/civil_photo/'.$image_gen;
            Image::make($image)->resize(300,300)->save($save_url);
            $student->student_id_path = $save_url;

         }




         $student->full_name = $req->full_name;
         $student->mobile = $req->mobile;
         $student->email = $req->email;
         $student->civil_number = $req->civil_number;
         $student->nationality = $req->nationality;
         $student->gender = $req->gender;



           $student->save();

         return $student;

    }

    public function show($id)
    {
        return Student::find($id);
    }

    public function update(Request $req, $id)
    {


       $student = Student::find($req->id);


       //    passport_photo
       //    civil_photo
       //    student_photo

           $old_student_photo  = $req->old_student_photo;
           $old_passport_photo  = $req->old_passport_photo;
           $old_civil_photo  = $req->old_civil_photo;

           $validated = $req->validate([
               'full_name' => 'required',
               'mobile' => 'required',
               'email' => 'required|email|max:255',
               'civil_number' => 'required|max:255',
               'gender' => 'required',
               'nationality' => 'required',
           ]);

           //for student photo
            if($req->file('student_photo')){

               if($old_student_photo != null){

                   unlink($old_student_photo);
               }

               $image  = $req->file('student_photo');
               $image_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
               $save_url = 'upload/students_photo/'.$image_gen;
               Image::make($image)->resize(300,300)->save($save_url);


               $student->student_photo_path = $save_url;

            }

           //for student passport
           if($req->file('passport_photo')){

           if($old_passport_photo != null){

               unlink($old_passport_photo);
           }

           $image  = $req->file('passport_photo');
           $image_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
           $save_url = 'upload/passport_photo/'.$image_gen;
           Image::make($image)->resize(300,300)->save($save_url);


           $student->student_passport_path = $save_url;

           }


           //for student civil
           if($req->file('civil_photo')){

           if($old_civil_photo != null){

               unlink($old_civil_photo);
           }

           $image  = $req->file('civil_photo');
           $image_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
           $save_url = 'upload/civil_photo/'.$image_gen;
           Image::make($image)->resize(300,300)->save($save_url);


           $student->student_id_path = $save_url;

           }





           $student->full_name = $req->full_name;
           $student->mobile = $req->mobile;
           $student->email = $req->email;
           $student->civil_number = $req->civil_number;
           $student->nationality = $req->nationality;
           $student->gender = $req->gender;



             $student->save();






            return $student;

    }

    public function destroy($id)
    {


     return Student::destroy($id);



    }


}
