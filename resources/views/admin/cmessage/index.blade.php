@extends('admin.layout.master')
@section('content')

  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contact Message</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Contact Message</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
             <div class="card">
              <div class="card-header">
                <h3 class="card-title">Contact Message</h3>
             
         
        
               
               
                  
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @include('admin.sessionMsg')
                <table id="example1" class="table table-bordered table-striped table-responsive">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Description</th>
                    <th>Date</th>
                
                    <th>Action</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                 
                  
                        
                   
                    @foreach ($cm as $key=>$item)
                 
                  <tr>
                    <td>{{++$key}}</td>
                    <td>{{@$item->name}}</td>
                    <td>{{@$item->email}}</td>
                    <td>{{@$item->subject}}</td>
                    <td>{!!@$item->message!!}</td>
                    <td>{!!@$item->created_at!!}</td>
                    <td>
     
                      <form action="{{route('cmessage.destroy',[$item])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </form>
                         
              
                    </td>
                   
                  </tr>
                
    @endforeach

                  </tbody>
                  <tfoot>
                  <tr>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Description</th>
                    <th>Date</th>
                      <th>Action</th>
                     
                    </tr>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
        
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection