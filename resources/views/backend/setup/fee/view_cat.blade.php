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
                              <li class="breadcrumb-item" aria-current="page">Fee Categories</li>
                              <li class="breadcrumb-item active" aria-current="page">View Category</li>
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
                <h3 class="box-title">Fee Category</h3>
                <a href="{{ route('fee.category.add')}}" style="float: right;" class="btn btn-rounded btn-success mb-5">Add New Category</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                            
                              <th>Category Name</th>
                             
                              <th width="25%">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach($allData as $key => $feeCat)
                          <tr>
                              <td>{{ $key+1 }}</td>
                             
                              <td>{{ $feeCat->name}}</td>
                            
                              <td>
                                <a href="{{ route('fee.category.edit',$feeCat->id) }}" class="btn btn-info"><i class="mdi mdi-account-edit"></i> Edit</a> &nbsp;
                                <a href="{{ route('fee.category.delete',$feeCat->id) }}" class="btn btn-danger" id="delete"><i class="mdi mdi-account-remove"></i> Delete</a>
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