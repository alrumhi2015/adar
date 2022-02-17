<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>zpro</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('backend/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{ asset('backend/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{ asset('backend/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('backend/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{ asset('backend/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/js/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('backend/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('backend/images/favicon.png')}}" />

  <script src="{{ asset('js/jquery-3.6.0.min.js')}}"></script>

  <link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css')}}">
  <script src="{{ asset('js/jquery.dataTables.min.js')}}"></script>



  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">

  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>


  <style>
      .navbar .navbar-brand-wrapper .navbar-brand img {

    height: 48px;
}

   </style>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
     @include('admin.body.header')
    <!-- partial -->



    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      @include('admin.body.setting')
      <!-- partial -->

      <!-- partial:partials/_sidebar.html -->
        @include('admin.body.sidebar')
      <!-- partial -->

      <div class="main-panel">
        <div class="content-wrapper">
          @yield('admin')
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
         @include('admin.body.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('backend/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('backend/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{ asset('backend/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{ asset('backend/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <script src="{{ asset('backend/js/dataTables.select.min.js')}}"></script>


  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('backend/js/off-canvas.js')}}"></script>
  <script src="{{ asset('backend/js/hoverable-collapse.js')}}"></script>
  <script src="{{ asset('backend/js/template.js')}}"></script>
  <script src="{{ asset('backend/js/settings.js')}}"></script>
  <script src="{{ asset('backend/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('backend/js/dashboard.js')}}"></script>
  <script src="{{ asset('backend/js/Chart.roundedBarCharts.js')}}"></script>
  <!-- End custom js for this page-->


<!-- for data table -->

  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>

