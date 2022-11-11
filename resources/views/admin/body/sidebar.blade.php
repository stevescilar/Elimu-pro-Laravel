@php
    $prefix = Request::route()->getPrefix();
    $route  = Route::current()->getName();

@endphp



<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="{{route('dashboard')}}">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="{{ asset('images/logo-dark.png')}}" alt="">
						  <h3><b>Elimu</b>Pro </h3>
					 </div>
				</a>
			</div>
        </div>  
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		<li class="{{ ($route == 'dashboard')?'active':'' }}">
          <a href="{{route('dashboard')}}">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>  
		
        <li class="treeview {{ ($prefix == '/users')?'active':'' }}">
          <a href="#">
            <i data-feather="users"></i>
            <span>Manage User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('user.view')}}"><i class="ti-more"></i>View User</a></li>
            <li><a href="{{ route('add.user')}}"><i class="ti-more"></i>Add User</a></li>
          </ul>
        </li> 
		  
        <li class="treeview {{ ($prefix == '/profile')?'active':'' }}">
          <a href="#">
            <i data-feather="settings"></i> <span>Manage Profile</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('profile.view') }}"><i class="ti-more"></i>My Profile</a></li>
            <li><a href="{{ route('password.view')}}"><i class="ti-more"></i>Change password</a></li>
          </ul>
        </li>
        {{-- setups area --}}
        <li class="treeview {{ ($prefix == '/setups')?'active':'' }}">
          <a href="#">
            <i data-feather="settings"></i> <span>Setup Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('student.class.view') }}"><i class="ti-more"></i>Student Class</a></li>
            <li><a href="{{ route('student.year.view') }}"><i class="ti-more"></i>Student Year</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i data-feather="file"></i>
            <span>Pages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="profile.html"><i class="ti-more"></i>Profile</a></li>
            <li><a href="invoice.html"><i class="ti-more"></i>Invoice</a></li>
            <li><a href="gallery.html"><i class="ti-more"></i>Gallery</a></li>
            <li><a href="faq.html"><i class="ti-more"></i>FAQs</a></li>
            <li><a href="timeline.html"><i class="ti-more"></i>Timeline</a></li>
          </ul>
        </li> 		  
		 
        <li class="header nav-small-cap">User Interface</li>
		  
        <li class="treeview">
          <a href="#">
            <i data-feather="grid"></i>
            <span>Components</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="components_alerts.html"><i class="ti-more"></i>Alerts</a></li>
            <li><a href="components_badges.html"><i class="ti-more"></i>Badge</a></li>
            <
          </ul>
        </li>
		
		<li class="treeview">
          <a href="#">
            <i data-feather="credit-card"></i>
            <span>Cards</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li><a href="card_advanced.html"><i class="ti-more"></i>Advanced Cards</a></li>
			<li><a href="card_basic.html"><i class="ti-more"></i>Basic Cards</a></li>
			<li><a href="card_color.html"><i class="ti-more"></i>Cards Color</a></li>
		  </ul>
        </li>  
		  
        <li class="treeview">
          <a href="#">
            <i data-feather="hard-drive"></i>
            <span>Content</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="content_typography.html"><i class="ti-more"></i>Typography</a></li>
            <li><a href="content_media.html"><i class="ti-more"></i>Media</a></li>
            <li><a href="content_grid.html"><i class="ti-more"></i>Grid</a></li>
          </ul>
        </li>

        
      </ul>
    </section>
	
	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>
