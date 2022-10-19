@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
    <div class="container-full">
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Add Class</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Student</li>
                                <li class="breadcrumb-item active" aria-current="page">Add Student Class</li>
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
                 <h4 class="box-title">Add Student Class</h4>
                 
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form method="post" action="{{ route('store.student.class')}}">
                        @csrf
                            <div class="row">

                                    <div class="col-12">	
                                    
                                                <div class="form-group">
                                                    <h5>Class Name<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="name" class="form-control" > 
                                                    @error('name')
                                                        <span class="text-danger ">{{ $message }}</span>
                                                    @enderror
                                                    </div>
                                                    
                                                </div>

                                           
                                        
                                    </div>
                                </div> 
                            </div>
                            
                 </div>
                           <div class="text-xs-right">
                               <input type="submit" name="" id="" class="btn btn-rounded btn-info mb-5" value="Submit">
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
@endsection