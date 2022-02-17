@extends('admin.admin_master')


@section('admin')

<div class="card">
    <div class="card-body">
      <h4 class="card-title">إدارة الطلاب</h4>



      <a href="{{ route('add.student')}}" class="btn btn-primary mb-5" >إضافة طالب</a>

      <div class="table-responsive">
        <table  class="table" id="myusertable">
          <thead>
            <tr>




              <th>الاسم الكامل</th>
              <th>رقم الهاتف</th>
              <th>البريد الإلكتروني</th>
              <th>الرقم المدني</th>
              <th>الجنس</th>
              <th>الجنسية</th>
              <th>صورة الطالب</th>
              <th>صورة الجواز</th>
              <th>صورة البطاقة الشخصية</th>
              <th>تاريخ الإنشاء</th>
              <th>العمليات</th>
            </tr>
          </thead>
          <tbody>


            @foreach ($students as $student )
            <tr>
                <td>{{ $student->full_name}}</td>
                <td>{{ $student->mobile}}</td>
                <td>{{ $student->email}}</td>
                <td>{{ $student->civil_number}}</td>
                <td><label class="badge badge-danger">{{ $student->gender}}</label></td>
                <td>{{ $student->nationality}}</td>
                <td> <img width="50px" height="50px" src="{{ (!empty($student->student_photo_path))?  url($student->student_photo_path): asset('backend/images/user.jpg')}}" alt="صورة"/></td>
                <td> <img width="50px" height="50px" src="{{ (!empty($student->student_passport_path))?  url($student->student_passport_path): asset('backend/images/user.jpg')}}" alt="صورة"/></td>
                <td> <img width="50px" height="50px" src="{{ (!empty($student->student_id_path))?  url($student->student_id_path): asset('backend/images/user.jpg')}}" alt="صورة"/></td>
                <td>{{ $student->created_at->diffForHumans();}}</td>
                <td>


                  <a href="{{ route('edit.student', $student->id)}}"   class="btn btn-dark btn-icon-text">تعديل  <i class="ti-file btn-icon-append"></i></a>
                  <a href="{{ route('delete.student', $student->id)}}"  id="delete" class="btn btn-danger btn-delete">حذف</a>

                </td>
              </tr>
            @endforeach


          </tbody>
        </table>


      </div>
    </div>
  </div>








@endsection



