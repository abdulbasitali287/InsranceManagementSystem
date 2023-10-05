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
                  onclick="window.location.href='{{ URL::TO('vendor/create') }}';" >
                            <i class="mdi mdi-plus-circle-outline"></i>
                            Add New Vendor </button>
                </ol>
              </nav>
            </div>
            <!-- header end -->

<!-- form start -->
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Vendor List</h4>
                    <p class="card-description"> All Vendor Details <code></code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                          <th> <h6 class="card-title">Display Name </h6> </th>                         
                          <th> <h6 class="card-title">Vendor Name </h6> </th>                         
                          {{--<th> <h6 class="card-title">Tax ID </h6> </th>  --}}                       
                          <th> <h6 class="card-title">Phone </h6> </th>                         
                          <th> <h6 class="card-title">Email </h6> </th>                         
                          {{-- <th> <h6 class="card-title">Address </h6> </th>                         
                          <th> <h6 class="card-title">Fax </h6> </th>   
                          <th> <h6 class="card-title">Website </h6> </th>  --}}                       
                          <th> <h6 class="card-title">Action </h6> </th>                                                   
                           
                          </tr>
                        </thead>
                        <tbody>
@foreach ($data as  $d)
                          <tr>
                            <td> {{ $d->display_name }} </td>
                            <td> {{ $d->vendor_name }} </td>
                            {{-- <td> {{ $d->tax_id }}  </td> --}}
                            <td> {{ $d->phone }} </td>
                            <td> {{ $d->email }} </td>
                            {{-- <td> {{ $d->address }}  </td>
                            <td> {{ $d->fax }} </td>
                            <td> {{ $d->website }}  </td> --}}
                            <td>
                              <a href="{{ url('vendor/'.$d->id.'/edit') }}"><i class="mdi mdi-table-edit" style="color: yellow" title="Edit"></i> </a>
                          <!-- Button trigger modal -->
                           
                           @php
                             $url = 'vendor/'.$d->id;
                           @endphp

                          <i class="mdi mdi-delete" style="color:red" onclick="showForm('<?php echo $url; ?>')" ></i>   
                          <a href="{{ url('vendor/'.$d->id) }}">
                          <i class="mdi mdi-eye" style="color:green" title="View"></i> </a></td>
                          </tr>

@endforeach

                        </tbody>
                      </table>
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
                        <h1 class="modal-title fs-5 " id="exampleModalLabel">Delete Vendor Details</h1>
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
              </div>
              


<script>
function showForm(url){

$("#exampleModal form").attr('action', url);
$("#exampleModal").modal("show");
}

</script>
@endsection
