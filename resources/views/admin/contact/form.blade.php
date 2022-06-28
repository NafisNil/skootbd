@include('admin.sessionMsg')
<div class="card-body">



<div class="form-group">
  <label for="exampleInputEmail1">Email</label>
 
  <input type="email" class="form-control" name="email" value="{!!old('email',@$edit->email)!!}">
 
</div>

<div class="form-group">
  <label for="exampleInputEmail1">Phone (Primary)</label>
 
  <input type="text" class="form-control" name="phonep" value="{!!old('phonep',@$edit->phonep)!!}">
 
</div>

<div class="form-group">
  <label for="exampleInputEmail1">Phone (Secondary)</label>
 
  <input type="text" class="form-control" name="phones" value="{!!old('phones',@$edit->phones)!!}">
 
</div>



<div class="form-group">
  <label for="exampleInputEmail1">Address</label>
 
  <textarea name="address" id="desc" cols="30" rows="10" class="form-control">{!!old('address',@$edit->address)!!}</textarea>
</div>
 
</div>
<!-- /.card-body -->

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>