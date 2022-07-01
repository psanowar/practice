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
        <form action="{{ Route('update', $product->id) }}" method="post">
          @csrf
        <div class="row">
          <div class="col-sm-6">

              <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" name="name" id="name" placeholder="Product Name" class="form-control" value="{{ $product->name }}">
              </div>

              <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" placeholder="Enter Product Description" class="form-control">{{ $product->description }}</textarea>
              </div>

              <div class="form-group">
                <label for="category">Product Category</label>
                <select name="category" id="category" class="form-control">
                  <option value="">Select Category</option>
                  <option value="Man"@if ($product->category = 'Man') selected @endif>Man</option>
                  <option value="Woman"@if ($product->category = 'Woman') selected @endif>Woman</option>
                </select>
              </div>

              <div class="form-group">
                <label for="size">Product Size</label>
                <select name="size" id="size" class="form-control">
                  <option value="">Select Size</option>
                  <option value="xl" @if ($product->size = 'xl') selected @endif>xl</option>
                  <option value="m" @if ($product->size = 'm') selected @endif>m</option>
                  <option value="sm" @if ($product->size = 'sm') selected @endif>sm</option>
                </select>
              </div>

          </div>
          <div class="col-sm-6">
            <div class="form-group">
                <label for="costPrice">Product CostPrice</label>
                <input type="text" name="costPrice" id="costPrice" placeholder="Enter Product CostPrice" class="form-control" value="{{ $product->costPrice }}">
              </div>

              <div class="form-group">
                <label for="salePrice">Product SalePrice</label>
                <input type="text" name="salePrice" id="salePrice" placeholder="Enter Product SalePrice" class="form-control" value="{{ $product->salePrice }}">
              </div>

              <div class="form-group">
                <label for="quantity">Product Quantity</label>
                <input type="text" name="quantity" id="quantity" placeholder="Enter Product Quantity" class="form-control" value="{{ $product->quantity }}">
              </div>

              <div class="form-group">
                <label for="status">Product Status</label>
                <select name="status" id="status" class="form-control">
                  <option value="">Select Status</option>
                  <option value="1" @if ($product->status = '1') selected @endif>Active</option>
                  <option value="2" @if ($product->status = '2') selected @endif>Inactive</option>
                </select>
              </div>
              <div class="form-group">
                <button class="form-control btn btn-info">Update Product</button>
              </div>
          </div>  
        </div>
        </form>
      </div><!-- br-pagebody -->
@endsection 