@include('admin.sessionMsg')
<div class="card-body">
  <div class="form-group ">
    <label for="Image" class="col-md-4 col-form-label text-md-right"></label>
    <div class="col-md-6">
    
    <img id="showImage" src="{{(!empty($edit->logo))?URL::to('storage/'.$edit->logo):URL::to('image/no_image.png')}}"  style="widows: inherit; width:120px; height:120px; border:1px solid #042b3d" alt="">
  </div>
</div>
<div class="form-group">
  <label for="exampleInputFile">File input</label>
  <div class="input-group">
    <div class="custom-file">
      <input type="file" name="logo" class="custom-file-input"  id="image">
      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
    </div>

  </div>
</div>


<div class="form-group">
  <label for="exampleInputEmail1">Name</label>
 
  <input type="text" class="form-control" name="name" value="{!!old('name',@$edit->name)!!}">
 
</div>

<div class="form-group">
  <label for="exampleInputEmail1">Designation</label>
 
  <input type="text" class="form-control" name="designation" value="{!!old('designation',@$edit->designation)!!}">
 
</div>

<div class="form-group">
  <label for="exampleInputEmail1">Facebook</label>
 
  <input type="url" class="form-control" name="facebook" value="{!!old('facebook',@$edit->facebook)!!}">
 
</div>

<div class="form-group">
  <label for="exampleInputEmail1">Linkedin</label>
 
  <input type="url" class="form-control" name="linkedin" value="{!!old('linkedin',@$edit->linkedin)!!}">
 
</div>


<div class="form-group">
  <label for="exampleInputEmail1">Instagram</label>
 
  <input type="url" class="form-control" name="instagram" value="{!!old('instagram',@$edit->instagram)!!}">
 
</div>

<div class="form-group">
  <label for="exampleInputEmail1">Twitter</label>
 
  <input type="url" class="form-control" name="twitter" value="{!!old('twitter',@$edit->twitter)!!}">
 
</div>

<div class="form-group">
  <label for="exampleInputEmail1">Speech</label>
 
  <textarea name="speech" id="desc" cols="30" rows="10" class="form-control">{!!old('speech',@$edit->speech)!!}</textarea>
</div>
 
</div>
<!-- /.card-body -->

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>