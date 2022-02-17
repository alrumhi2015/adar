@extends('admin.admin_master')



@section('admin')

<div class="row">
    <div class="col-md-12 grid-margin">
      <div class="row">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
          <h3 class="font-weight-bold">مرحبا بك في صفحة إضافة الطلاب الداخلية</h3>
          <h6 class="font-weight-normal mb-0">يمكنك إضافة الطلاب من خلال القائمة </h6>
        </div>
        <div class="col-12 col-xl-4">
         <div class="justify-content-end d-flex">

         </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div style=" padding-top:  0 !important;"  class="card tale-bg">
        <div  class="card-people mt-auto">
          <img src="{{asset('backend/images/dashboard/people.png')}}" alt="people">
          <div class="weather-info">
            <div class="d-flex">
              <div>
                <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
              </div>
              <div class="ml-2">
                <h4 class="location font-weight-normal">الرستاق</h4>
                <h6 class="font-weight-normal">عمان</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 grid-margin transparent">
      <div class="row">
        <div class="col-md-6 mb-4 stretch-card transparent">
          <div class="card card-tale">
            <div class="card-body">
              <p class="mb-4">عدد الطلاب</p>
              <p class="fs-30 mb-2">78</p>
              <p>ميزة تدشن لاحقا</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4 stretch-card transparent">
          <div class="card card-dark-blue">
            <div class="card-body">
              <p class="mb-4">عدد الطالبات</p>
              <p class="fs-30 mb-2">57</p>
              <p>ميزة تدشن لاحقا</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
          <div class="card card-light-blue">
            <div class="card-body">
              <p class="mb-4">عدد الطلاب المرفوعة صورهم</p>
              <p class="fs-30 mb-2">100</p>
              <p>ميزة تدشن لاحقا</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 stretch-card transparent">
          <div class="card card-light-danger">
            <div class="card-body">
              <p class="mb-4">عدد الطلاب  المرفوعة هوياتهم</p>
              <p class="fs-30 mb-2">20</p>
              <p>ميزة تدشن لاحقا</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-md-7 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title mb-0">آخر الطلاب المسجلين</p>
          <div class="table-responsive">
            <table class="table table-striped table-borderless">
              <thead>
                <tr>

              <th>الاسم الكامل</th>
              <th>رقم الهاتف</th>
              <th>البريد الإلكتروني</th>
              <th>الرقم المدني</th>


                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>محمد الرمحي</td>
                  <td class="font-weight-bold">91410155</td>
                  <td>alrumhi2015@gmail.com</td>

                  <td class="font-weight-medium"><div class="badge badge-success">9999999</div></td>
                </tr>



              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-5 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">المهام اليومية</h4>
                            <div class="list-wrapper pt-2">
                                <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                                    <li>
                                        <div class="form-check form-check-flat">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox">
                                                تحديث البطاقات الشخصية
                                            </label>
                                        </div>
                                        <i class="remove ti-close"></i>
                                    </li>
                                    <li class="completed">
                                        <div class="form-check form-check-flat">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox" checked>
                                                تحديث الجوازات
                                            </label>
                                        </div>
                                        <i class="remove ti-close"></i>
                                    </li>
                                    <li>
                                        <div class="form-check form-check-flat">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox">
                                              تحديث صور الطلاب
                                            </label>
                                        </div>
                                        <i class="remove ti-close"></i>
                                    </li>
                                    <li class="completed">
                                        <div class="form-check form-check-flat">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox" checked>
                                               تحديث الارقام المدنية
                                            </label>
                                        </div>
                                        <i class="remove ti-close"></i>
                                    </li>
                                    <li>
                                        <div class="form-check form-check-flat">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox">
                                                اخرى
                                            </label>
                                        </div>
                                        <i class="remove ti-close"></i>
                                    </li>
                                </ul>
          </div>
          <div class="add-items d-flex mb-0 mt-2">
                                <input type="text" class="form-control todo-list-input"  placeholder="إضافة مهمة">
                                <button class="add btn btn-icon text-primary todo-list-add-btn bg-transparent"><i class="icon-circle-plus"></i></button>
                            </div>
                        </div>
                    </div>
    </div>
  </div>




@endsection
