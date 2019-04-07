<div class="sidebar " data-colour="blue">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper" data-color="blue">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">
            JPC
          </a>
          <a href="javascript:void(0)" class="simple-text logo-normal">
            E.M.S
          </a>
        </div>
        <ul class="nav">
          <li class="active ">
            <a href="{{route('home')}}">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="">
            <a href="" class=" dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Create</p>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{route('create_department')}}">Create a department</a>
              <a class="dropdown-item" href="{{route('create_user')}}">Create a lecturer</a>
              <a class="dropdown-item" href="{{route('create_course')}}">Create a course</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{route('create_unit')}}">Create a unit</a>
              <a class="dropdown-item" href="{{route('create_student')}}">Create a student</a>

          </div>
         </li>
          <li class="">
            <a href="" class=" dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>View</p>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{route('view_users')}}">View lecturers</a>
              <a class="dropdown-item" href="{{route('view_department')}}">View departments</a>
              <a class="dropdown-item" href="{{route('view_courses')}}">View courses</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{route('view_units')}}">View units</a>
              <a class="dropdown-item" href="{{route('view_students')}}">View students</a>
              <a class="dropdown-item" href="{{route('student_result')}}">View result</a>
            </div>
         </li>        
        </ul>
      </div>
    </div>