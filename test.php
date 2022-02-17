@extends('admin.admin_master')



@section('admin')

<div class="row">
  <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update  user</h4>
                  <form class="form-sample" method="post" action="{{ route('update.user')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$user->id }}" />
                    <p class="card-description">

                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">First Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="first_name" value="{{$user->first_name}}" required  placeholder="First Name" class="form-control" />
                            @error('first_name')
                             <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Last Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="last_name" value="{{$user->last_name}}"  placeholder="Last Name"  required class="form-control" />
                            @error('last_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                           @enderror
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Gender</label>
                          <div class="col-sm-9">
                            <select name="gender" required   class="form-control">
                              <option value="Male" @if ($user->gender == "Male")
                                selected
                             @endif>Male</option>
                              <option value="Female" @if ($user->gender == "Female")
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
                            <input class="form-control" name="email" value="{{ $user->email}}" type="email" required placeholder="Email"/>
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                           @enderror
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Mobile</label>
                          <div class="col-sm-9">
                        <input class="form-control" name="mobile" value="{{ $user->mobile}}"  type="text" placeholder="Mobile"/>
                        @error('mobile')
                        <div class="alert alert-danger">{{ $message }}</div>
                       @enderror

                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nationality</label>
                          <div class="col-sm-9">
                        <input class="form-control" name="nationality" value="{{ $user->nationality}}"  type="text" placeholder="nationality"/>
                        @error('nationality')
                        <div class="alert alert-danger">{{ $message }}</div>
                       @enderror

                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Is Comapny</label>
                          <div class="col-sm-9">
                            <select name="isCompany" required   class="form-control">
                                <option value="individual"  @if ($user->isComapny == "individual")
                                    selected
                                 @endif >Individual </option>
                                <option value="company" @if ($user->isComapny == "company")
                                    selected
                                 @endif>Company</option>
                                <option value="organisation" @if ($user->isComapny == "organisation")
                                    selected
                                 @endif >Organisation</option>
                              </select>
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
                          <label class="col-sm-3 col-form-label">password</label>
                          <div class="col-sm-9">
                            <input type="password" name="password" class="form-control" placeholder="password" />
                            @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                           @enderror
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">password confrimation</label>
                          <div class="col-sm-9">
                               <input type="password" name="password_confirmation" class="form-control" placeholder=" password confrimation" />

                               @error('password_confirmation')
                               <div class="alert alert-danger">{{ $message }}</div>
                              @enderror


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
                            @error('photo')
                            <div class="alert alert-danger">{{ $message }}</div>
                           @enderror

                           <input type="hidden" name="old_image" value="{{$user->user_photo_path }}">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">User Type</label>
                          <div class="col-sm-9">
                            <select name="user_type" required   class="form-control">
                                <option value="admin" @if ($user->user_type == "admin")
                                    selected
                                 @endif
                                 >Admin</option>
                                <option value="provider"  @if ($user->user_type == "provider")
                                    selected
                                 @endif>Provider</option>
                                <option value="customer"  @if ($user->user_type == "customer")
                                    selected
                                 @endif>Customer</option>
                              </select>
                          </div>
                        </div>
                      </div>
                    </div>
             <button type="submit" class="btn btn-primary mr-2">Update</button>
             <a class="btn btn-info" href="{{ route('view.users')}}">Back</a>

                  </form>
                </div>
              </div>
            </div>
    </div>

@endsection
