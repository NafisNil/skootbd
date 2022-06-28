@include('admin.sessionMsg')
<div class="card-body">



<div class="form-group">
  <label for="exampleInputEmail1">Facebook</label>
 
  <input type="url" class="form-control" name="facebook" value="{!!old('facebook',@$edit->facebook)!!}">
 
</div>

<div class="form-group">
  <label for="exampleInputEmail1">Instagram </label>
 
  <input type="text" class="form-control" name="instagram" value="{!!old('instagram',@$edit->instagram)!!}">
 
</div>

<div class="form-group">
  <label for="exampleInputEmail1">Linkedin </label>
 
  <input type="text" class="form-control" name="linkedin" value="{!!old('linkedin',@$edit->linkedin)!!}">
 
</div>

<div class="form-group">
  <label for="exampleInputEmail1">Skype </label>
 
  <input type="text" class="form-control" name="skype" value="{!!old('skype',@$edit->skype)!!}">
 
</div>

<div class="form-group">
  <label for="exampleInputEmail1">Twitter </label>
 
  <input type="text" class="form-control" name="twitter" value="{!!old('twitter',@$edit->twitter)!!}">
 
</div>


 
</div>
<!-- /.card-body -->

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>