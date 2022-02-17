@extends('admin.admin_master')



@section('admin')

<div class="row">
  <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">User Settings</h4>
                  <form class="form-sample" method="post" action="{{ route('profile.save', Auth::user()->id)}}" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="id" value="{{Auth::user()->id }}" />
                    <p class="card-description">
                      Personal info
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">First Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="first_name" value="{{ Auth::user()->first_name}}"  class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Last Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="last_name" value="{{Auth::user()->last_name}}" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Gender</label>
                          <div class="col-sm-9">
                            <select name="gender" class="form-control">
                              <option value="Male" @if (Auth::user()->gender == "Male")
                                 selected
                              @endif>Male</option>
                              <option value="Female" @if (Auth::user()->gender == "Female")
                               selected



                              @endif>Female</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="email" value="{{Auth::user()->email}}" type="email" placeholder="Email"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Mobile</label>
                          <div class="col-sm-9">
                        <input class="form-control" name="mobile" value="{{Auth::user()->mobile }}" type="text" placeholder="Mobile"/>
                          </div>
                        </div>
                      </div>

                    </div>
                    <p class="card-description">
                      Password
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Current password</label>
                          <div class="col-sm-9">
                            <input type="password" name="oldpassword" class="form-control" placeholder="Current password" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">New Password</label>
                          <div class="col-sm-9">
                               <input type="password" name="newpassword" class="form-control" placeholder="New password" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="card-description">
                      Photo
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Profile Photo</label>
                          <div class="col-sm-9">
                            <input type="file" name="photo" class="form-control" placeholder="photo" />
                            <input type="hidden" name="old_image" value="{{Auth::user()->user_photo_path }}">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">

                          <div class="col-sm-9">

                          </div>
                        </div>
                      </div>
                    </div>
             <button type="submit" class="btn btn-primary mr-2">Save</button>

                  </form>
                </div>
              </div>
            </div>
    </div>

@endsection
