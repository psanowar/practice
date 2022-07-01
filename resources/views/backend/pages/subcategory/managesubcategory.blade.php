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
        <div class="row">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th>sl</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Category</th>
                  <th>Size</th>
                  <th>CostPrice</th>
                  <th>SalePrice</th>
                  <th>Quantity</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                  @php $sl = 1 @endphp
                  @foreach($product as $data)
                    <tr>
                      <td>{{ $sl }}</td>
                      <td>{{ $data->name }}</td>
                      <td>{{ $data->description }}</td>
                      <td>{{ $data->category }}</td>
                      <td>{{ $data->  size }}</td>
                      <td>{{ $data->costPrice }}</td>
                      <td>{{ $data->salePrice }}</td>
                      <td>{{ $data->quantity }}</td>
                      <td>
                        @if ($data->status==1)
                        <span class="badge badge-info">Active</span>
                        @else
                        <span class="badge badge-warning">Inactive</span>
                        @endif
                      </td>
                      <td>
                        <a href="{{ Route('edit', $data->id) }}" class="btn btn-sm btn btn-info"><i class="fa fa-edit"></i></a>
                        <a href="" class="btn btn-sm btn btn-danger"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                  @php $sl++ @endphp  
                  @endforeach
              </tbody>

            </table>
          </div>
        </div>
      </div><!-- br-pagebody -->
@endsection