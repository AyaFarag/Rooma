<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header" >

    <!-- Logo -->
    <a href="#" class="logo" style="background-color: #00c0ef;">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin Panel</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation" style="background-color: #00c0ef;">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">LogOut</span>
            </a>
            

                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->


                  <!-- Menu Footer-->
                  <li class="user-footer">

                    <div class="pull-left" style="margin:10px;"> <span>Are you sure to logout ?</span> </div>

                    <div class="pull-right">
                      
                      <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                    </div>
                  </li>
                </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" ><i class="fa fa-caret-down"></i></a>
          </li>
        </ul>
      </div>
    </nav>
    
     @include('admin.message') 
  </header>
<!--================================================================================================================================================-->

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" style="background-color: #000">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->


      

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <!-- Optionally, you can add icons to the links -->

        {{--  Slider  --}}
        <li class="treeview">
          <a href="#"><i class="fa fa-align-justify"></i> <span>Slider</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/slider')}}">View Slider</a></li>
            <li><a href="{{ url('/slider/create')}}">+ Add Slider</a></li>
            
          </ul>
        </li>
        {{--  about  --}}
        <li class="treeview">
          <a href="#"><i class="fa fa-align-justify"></i> <span>About</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/about')}}">View About</a></li>
            <li><a href="{{ url('/about/create')}}">+ Add About</a></li>
            
          </ul>
        </li>
        {{--  history  --}}
        <li class="treeview">
          <a href="#"><i class="fa fa-align-justify"></i> <span>CMC Riyadh</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/history')}}">View CMC Riyadh</a></li>
            <li><a href="{{ url('/history/create')}}">+ Add CMC Riyadh</a></li>
            
          </ul>
        </li>
        {{--  news  --}}
        <li class="treeview">
          <a href="#"><i class="fa fa-align-justify"></i> <span>News</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/news')}}">View News</a></li>
            <li><a href="{{ url('/news/create')}}">+ Add News</a></li>
            
          </ul>
        </li>
        {{--  careers  --}}
        <li class="treeview">
          <a href="#"><i class="fa fa-align-justify"></i> <span>Careers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/careers')}}">View Careers</a></li>
            <li><a href="{{ url('/careers/create')}}">+ Add Careers</a></li>
            
          </ul>
        </li>
        {{--  contactus  --}}
        <li class="treeview">
          <a href="#"><i class="fa fa-align-justify"></i> <span>Contact Us </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/contactus')}}">View Contact us</a></li>
            <li><a href="{{ url('/contactus/create')}}">+ Add Contact us</a></li>
            
          </ul>
        </li>
        {{--  Social Media  --}}
        <li class="treeview">
          <a href="#"><i class="fa fa-align-justify"></i> <span>Social Media</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/facebook')}}">Facebook</a></li>
            <li><a href="{{ url('/twitter')}}">Twitter</a></li>
            <li><a href="{{ url('/instagram')}}">Instagram</a></li>
            <li><a href="{{ url('/linkedin')}}">LinkedIn</a></li>
            <li><a href="{{ url('/youtube')}}">YouTube</a></li>
            
          </ul>
        </li>

        




        {{--  <li class="active"><a href="{{ url('/admin/home')}}"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>

        <li class="active"><a href="{{ url('/firm') }}"><i class="fa fa-link"></i> <span>+ Add New Firm Account</span></a></li>

        <li><a href="{{ url('/all/firms')}}"><i class="fa fa-link"></i> <span>All Firms</span></a></li>  --}}
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
