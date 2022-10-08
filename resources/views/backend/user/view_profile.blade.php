@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="mr-auto">
                  <h3 class="page-title">Manage Profile</h3>
                  <div class="d-inline-block align-items-center">
                      <nav>
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                              <li class="breadcrumb-item" aria-current="page">User Profile</li>
                              <li class="breadcrumb-item active" aria-current="page">My Profile</li>
                          </ol>
                      </nav>
                  </div>
                  
              </div>
              <a href="{{ route('profile.edit',$user->id)}}" style="float: right;" class="btn btn-rounded btn-info mb-2">Edit Profile <i class="mdi mdi-account-edit"></i></a> 
            </div>
          
      </div>

      <!-- Main content -->
      <section class="content">
        <div class="row">

          <div class="col-12">

            <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-black" style="background-color:rgb(3, 18, 59);') center center;">
                  <h3 class="widget-user-username">{{ $user->name }}</h3>
                  <h6 class="widget-user-desc">Logged in as    : {{ $user->usertype }}</h6>
                  <h6 class="widget-user-desc">Your Email is: {{ $user->email }}</h6>
                  
                </div>
                <div class="widget-user-image">
                  <img class="rounded-circle" src="{{(!empty($user->image))? url('upload/user_images/'.$user->image):url('upload/no_image.jpg') }}" alt="User Avatar">
                </div>
                <div class="box-footer">
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="description-block">
                        <h5 class="description-header">{{ $user->mobile }}</h5>
                        <span class="description-text">Mobile</span>
                      </div>
                      <!-- /.descriptionxx-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 br-1 bl-1">
                      <div class="description-block">
                        <h5 class="description-header">{{ $user->address }}</h5>
                        <span class="description-text">Address</span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4">
                      <div class="description-block">
                        <h5 class="description-header">Gender</h5>
                        <span class="description-text">{{ $user->gender }}</span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
              </div>
          </div>
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    
    </div>
</div>
@endsection