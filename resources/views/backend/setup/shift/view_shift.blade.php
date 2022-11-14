@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="mr-auto">
                  <h3 class="page-title">Setup</h3>
                  <div class="d-inline-block align-items-center">
                      <nav>
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                              <li class="breadcrumb-item" aria-current="page">Shifts</li>
                              <li class="breadcrumb-item active" aria-current="page">View Shifts</li>
                          </ol>
                      </nav>
                  </div>
              </div>
          </div>
      </div>

      <!-- Main content -->
      <section class="content">
        <div class="row">

          <div class="col-12">

           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Shift</h3>
                <a href="{{ route('student.add.shift')}}" style="float: right;" class="btn btn-rounded btn-success mb-5">Add New Shift</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                            
                              <th>Shift Name</th>
                             
                              <th width="25%">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach($allData as $key => $shift)
                          <tr>
                              <td>{{ $key+1 }}</td>
                             
                              <td>{{ $shift->name}}</td>
                            
                              <td>
                                <a href="{{ route('student.shift.edit',$shift->id) }}" class="btn btn-info"><i class="mdi mdi-account-edit"></i> Edit</a> &nbsp;
                                <a href="{{ route('student.shift.delete',$shift->id) }}" class="btn btn-danger" id="delete"><i class="mdi mdi-account-remove"></i> Delete</a>
                              </td>
                          </tr>
                        @endforeach
                      </tbody>
                        <tfoot>
                         
                        </tfoot>
                    </table>
                  </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->


            <!-- /.box -->          
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    
    </div>
</div>
@endsection