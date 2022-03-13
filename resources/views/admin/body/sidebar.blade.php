<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('home')}}">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">الرئيسية</span>
        </a>
      </li>


      <li class="nav-item" >
        <a class="nav-link" href="{{ route('view.students')}}">
            <i class="icon-head menu-icon"></i>

       @php
            $studentLabel = 'الطلبة';
           $usertype = Auth::user()->user_type;

           if($usertype == 'm-manager'){

            $studentLabel = 'الطلاب';
           }elseif ($usertype == 'f-manager') {

            $studentLabel = 'الطالبات';

           }else {
            $studentLabel = 'الطلبة';
           }
       @endphp

          <span class="menu-title">{{$studentLabel}}</span>
        </a>
      </li>




    </ul>
  </nav>
