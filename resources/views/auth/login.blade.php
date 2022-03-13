@extends('layouts.app')

@section('content')


<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo text-center">
                <img src="{{asset('backend/images/logo.png')}}" alt="logo"/>
              </div>
              <h4 class="text-center">السلام عليكم ورحمة الله وبركاته</h4>
              <h6 class="font-weight-light text-center">تفضل بالدخول </h6>

                <form method="POST" class="pt-3"  action="{{ route('login') }}">
                    @csrf

                <div class="form-group">
                    <input id="email" class="form-control form-control-lg" placeholder="اسم المستخدم" type="email"  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="form-group">


                  <input id="password" type="password" class="form-control form-control-lg" placeholder="كلمة المرور" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror

                </div>
                <div class="mt-3">


                  <button style="background-color: #9b833c" type="submit"class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                    {{ __('دخول') }}
                </button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  {{-- <div class="form-check">
                    <label class="form-check-label text-muted">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('تذكرني') }}
                        </label>

                    </label>


                  </div> --}}

                </div>


              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
</body>
@endsection
