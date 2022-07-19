@include('admin.sessionMsg')
<div class="card-body">

  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
   
    <textarea name="desc" id="desc" cols="30" rows="10" class="form-control">{!!old('desc',@$edit->desc)!!}</textarea>
  </div>

 
</div>
<!-- /.card-body -->

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>