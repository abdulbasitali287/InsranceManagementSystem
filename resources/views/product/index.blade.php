@extends('admin_frontend.master')
@section('content')
<div class="content-wrapper">

  <!-- Body start  -->

  <!-- header -->
  <div class="page-header">
              <h3 class="page-title">  </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb"> 
                  <button type="button" class="btn btn-info btn-icon-text" 
                  onclick="window.location.href='{{ URL::TO('product/create') }}';" >
                            <i class="mdi mdi-plus-circle-outline"></i>
                            Add New product </button>
                </ol>
              </nav>
            </div>
            <!-- header end -->

<!-- form start -->
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Product List</h4>
                    <p class="card-description">  <code></code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>
                          <h6 class="card-title">Insurance Company</h6>
                            </th>
                            <th> 
                          <h6 class="card-title">Policy Number</h6>
                            </th>
                            <th> 
                          <h6 class="card-title">year</h6>
                                 </th>
                            <th> 
                          <h6 class="card-title">Make</h6>
                                 </th>
                            <th> 
                          <h6 class="card-title">Model </h6>

                            </th>
                            <th> 
                          <h6 class="card-title">VIN Number</h6>
                            </th>
                            <th> 
                          <h6 class="card-title">Effective Date</h6>
                            </th>
                            <th> 
                              <h6 class="card-title">Expiry Date</h6>
                                </th>
                            <th>  
                          <h6 class="card-title">Next Amount Due</h6>
                            </th>
                            <th>  
                              <h6 class="card-title">Due Date</h6>
                                </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($data as  $item)
                          <tr>
                            <td> {{ $item->ins_company }} </td>
                            <td> {{ $item->policy_num }} </td>
                            <td> {{ $item->year }} </td>
                            <td> {{ $item->make }} </td>
                            <td> {{ $item->model }} </td>
                            <td> {{ $item->vin_num }} </td>
                            <td> {{ $item->effective_date }} </td>
                            <td> {{ $item->exp_date }} </td>
                            <td> {{ $item->next_amount_due }} </td>
                            <td> {{ $item->due_date }} </td>
                            <!-- added -->
                            <td>
                              <div class="d-flex">
                                <form action="{{ route('product.destroy', $item->id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                      <button type="submit" class="btn btn-danger">Delete</button>
                              </form>
                              <a href="{{ route('product.edit',$item->id) }}" class="btn btn-sm btn-success ms-1">Edit</a>
                              </div>
                            </td>
                          </tr>

                          
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

            <!-- Modal Start -->
            <center>
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <form method="POST" > 
                    @csrf
                    @method('delete')
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5 " id="exampleModalLabel">Delete Product Details</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Are you sure you want to delete ?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Delete</button>
                    </div>
                  </div>
                </form>
                </div>
              </div>
            </center>
<!-- Modal End-->
            {{-- </div> --}}
            


<script>
function showForm(url){

$("#exampleModal form").attr('action', url);
$("#exampleModal").modal("show");
}

</script>
@endsection
