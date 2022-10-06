@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="content-wrapper">
    <div class="container-full">
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Edit Profile</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Edit User Profile</li>
                                <li class="breadcrumb-item active" aria-current="page">My Profile</li>
                            </ol>
                        </nav>
                    </div>
                    
                </div>
                
              </div>
            
        </div>
        <section class="content">

            <!-- Basic Forms -->
            <div class="box">
               <div class="box-header with-border">
                 <h4 class="box-title">Edit User</h4>
                 
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form method="post" action="">
                        @csrf
                            <div class="row">

                                    <div class="col-12">	
                                      
                                        {{-- End Row 1--}}
                                        
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>User Email <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="email" name="email" class="form-control" value="{{ $editData->email }}" required=""> 
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            {{-- End colmd6 --}}
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>User Name <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="name" class="form-control" value="{{ $editData->name }}" required=""> 
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- End colmd6 --}} 
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>User Mobile<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="mobile" class="form-control" value="{{ $editData->mobile }}" required=""> 
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        {{-- another row --}}
                                        <div class="row">
                                            
                                            {{-- End colmd6 --}}
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>User Address<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="address" class="form-control" value="{{ $editData->address }}" required=""> 
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- End colmd6 --}} 
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>Gender <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="gender" id="gender" required="" class="form-control">
                                                            <option value="" selected="" disabled="">Select Gender</option>
                                                            <option value="Male" {{ ($editData->gender == "Male" ? "selected": "") }}>Male</option>
                                                            <option value="Female" {{ ($editData->gender == "Female" ? "selected": "") }}>Female</option>
                                                            <option value="Not_Reveal" {{ ($editData->gender == "Not_Reveal" ? "selected": "") }}>Rather Not Reveal</option>
                                                        </select>
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>Profile Picture<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="file" name="image" class="form-control"  required="" id="image"> 
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <img id="showImage" class="rounded-circle" src="{{(!empty($user->image))? url('upload/user_images/'.$user->image):url('upload/no_image.jpg') }}" alt="User Avatar" style="height: 200px; width: 200px; border: 1px solid #000000;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- End row --}}
                                    </div>
                                </div> 
                            </div>
                            
                 </div>
                           <div class="text-xs-right">
                               <input type="submit" name="" id="update" class="btn btn-rounded btn-info mb-5" value="Update">
                           </div>
                       </form>
   
                   </div>
                   <!-- /.col -->
                 </div>
                 <!-- /.row -->
               </div>
               <!-- /.box-body -->
             </div>
             <!-- /.box -->
   
           </section>



    
    </div>
</div>
{{-- javascript to autoload images --}}
<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader  new FileReader();
            reader.onload  = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection