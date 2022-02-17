@extends('admin.admin_master')



@section('admin')

<div class="row">
  <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">إضافة طالب</h4>
                  <form class="form-sample" method="post" action="{{ route('update.student')}}" enctype="multipart/form-data">
                    @csrf

                    <p class="card-description">
                     المعلومات الشخصية
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">الاسم الكامل</label>
                          <div class="col-sm-9">
                            <input type="text" name="full_name" required value="{{ $student->full_name}}"  placeholder="الاسم الكامل" class="form-control" />
                            @error('first_name')
                             <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">هاتف ولي الأمر</label>
                          <div class="col-sm-9">
                            <input type="text" name="mobile" required value="{{ $student->mobile}}"  placeholder="هاتف ولي الأمر" class="form-control" />
                            @error('mobile')
                             <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                        </div>
                      </div>


                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">الجنس</label>
                              <div class="col-sm-9">
                                <select name="gender" required   class="form-control">
                                  <option value="طالب" @if ($student->gender == "طالب")
                                    selected
                                 @endif>طالب</option>
                                  <option value="طالبة" @if ($student->gender == "طالبة")
                                    selected
                                 @endif>طالبة</option>
                                </select>
                              </div>
                            </div>
                          </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">الرقم المدني</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="civil_number" value="{{ $student->civil_number}}"  type="text" required placeholder="الرقم المدني"/>
                            @error('civil_number')
                            <div class="alert alert-danger">{{ $message }}</div>
                           @enderror
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">البريد الإلكتروني</label>
                          <div class="col-sm-9">
                        <input class="form-control" name="email" value="{{ $student->email}}" type="email" placeholder="البريد الإلكتروني"/>
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                       @enderror

                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">الجنسية</label>
                          <div class="col-sm-9">
                        <input class="form-control" name="nationality" value="{{ $student->nationality}}"  type="text" placeholder="الجنسية"/>
                        @error('nationality')
                        <div class="alert alert-danger">{{ $message }}</div>
                       @enderror

                          </div>
                        </div>
                      </div>



                    </div>
                    <p class="card-description">
                      المستندات
                    </p>
             {{-- send old paths if its there to replace then with new if user update them --}}
                    <input type="hidden" name="old_student_photo" value="{{$student->student_photo_path }}">
                    <input type="hidden" name="old_passport_photo" value="{{$student->student_passport_path }}">
                    <input type="hidden" name="old_civil_photo" value="{{$student->student_id_path }}">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">صورة الجواز</label>
                          <div class="col-sm-9">
                            <input type="file" name="passport_photo" class="form-control" placeholder="صورة الجواز" />
                            @error('passport_photo')
                            <div class="alert alert-danger">{{ $message }}</div>
                           @enderror
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">صورة البطاقة الشخصية</label>
                          <div class="col-sm-9">
                            <input type="file" name="civil_photo" class="form-control" placeholder="صورة البطاقة الشخصية" />
                            @error('civil_photo')
                            <div class="alert alert-danger">{{ $message }}</div>
                           @enderror
                          </div>
                        </div>
                      </div>

                    </div>
                    <p class="card-description">
                      الصورة الشخصية
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">صورة الطالب\ة</label>
                              <div class="col-sm-9">
                                <input type="file" name="student_photo" class="form-control" placeholder="صورة الطالب\ة" />
                                @error('student_photo')
                                <div class="alert alert-danger">{{ $message }}</div>
                               @enderror
                              </div>
                            </div>
                          </div>

                    </div>
             <button type="submit" class="btn btn-primary mr-2">تعديل</button>
             <a class="btn btn-info" href="{{ route('view.students')}}">عودة</a>

                  </form>
                </div>
              </div>
            </div>
    </div>

@endsection
