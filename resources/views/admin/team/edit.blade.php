@extends('admin.layout.master')
@section('content')

  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Team Member Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Team Member Form</li>
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
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Team</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('team.update',[$edit])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              @include('admin.team.form')
                      </form>
            </div>
            <!-- /.card -->

    

          </div>
          <!--/.col (left) -->
          <!-- right column -->
        
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <script>
      ClassicEditor
              .create( document.querySelector( '#desc' ) )
              .then( editor => {
                      console.log( editor );
              } )
              .catch( error => {
                      console.error( error );
              } );
</script>
@endsection