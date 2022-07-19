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
    <label for="exampleInputEmail1">Link</label>
   
    <input type="text" class="form-control" name="url" value="{!!old('url',@$edit->url)!!}">
  </div>

 
</div>
<!-- /.card-body -->

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>