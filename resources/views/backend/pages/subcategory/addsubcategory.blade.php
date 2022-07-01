@extends('backend.master_template.template')
@section('content')
<div class="br-pagetitle">
      <i class="icon ion-ios-home-outline"></i>
      <div>
        <h4>Blank</h4>
        <p class="mg-b-0">Page Description</p>
      </div>
</div>

      <div class="br-pagebody">
        <form action="{{ Route('subcategoryinsert') }}" method="post" enctype="multipart/form-data">
          @csrf
        <div class="row">
          <div class="col-sm-6">

              <div class="form-group">
                <label for="catId">Select Category Name</label>
                <select name="catId" class="form-control" id="catId">
                  <option value="">---Select Category Name---</option>
                  @foreach($catname as $catname)
                  <option value="{{ $catname->id }}">{{ $catname->name }}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label for="name">Sub Category Name</label>
                <input type="text" name="name" id="name" placeholder="SubCategory Name" class="form-control">
              </div>

              <div class="form-group">
                <label for="des">Description</label>
                <textarea name="des" id="des" placeholder="Enter Description" class="form-control"></textarea>
              </div>

          </div>
          <div class="col-sm-6">

            <div class="form-group">
                <label for="img">Sub Category Image</label>
                <input type="file" name="img" class="form-control">
            </div>

              <div class="form-group">
                <label for="status">Sub Category Status</label>
                <select name="status" id="status" class="form-control">
                  <option value="">Select Status</option>
                  <option value="1">Active</option>
                  <option value="2">Inactive</option>
                </select>
              </div>

              <div class="form-group">
                <button class="form-control btn btn-info">Add Sub Category</button>
              </div>

          </div>  
        </div>
        </form>
      </div><!-- br-pagebody -->
@endsection 