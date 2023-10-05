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
                  onclick="window.location.href='{{ URL::to('employee/create') }}'" >
                            <i class="mdi mdi-plus-circle-outline"></i>
                            Add New Team Member </button>
                </ol>
              </nav>
            </div>
  <!-- header end -->
<!-- form start -->
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Team Member List</h4>
                    <p class="card-description"> All Team Member  Details <code></code>
                    </p>
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                      {{ session()->get('message') }}
                   </div>
                   @endif
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th> <h6 class="card-title">Name </h6> </th>
                            <th> <h6 class="card-title">DOB </h6> </th>
                            <th> <h6 class="card-title">Tax Id </h6> </th>
                            <th> <h6 class="card-title">DL/ID </h6> </th>
                            <th> <h6 class="card-title">Phone </h6> </th>
                            <th> <h6 class="card-title">Email </h6> </th>
                            <th> <h6 class="card-title">Address </h6> </th>
                            <th> <h6 class="card-title">Notes </h6> </th>
                            <th> <h6 class="card-title">Action </h6> </th>
                            <th> <h6 class="card-title">View </h6> </th>
                          </tr>
                        </thead>
                        <tbody>
@foreach( $employee as $key => $data)
                          <tr>
                          <td class="py-1">{{$data->name}} </td>
                            <td>   {{$data->dob}}     </td>
                            <td>   {{$data->tax_id}}  </td>
                            <td>   {{$data->dl_id}}   </td>
                            <td>   {{$data->phone}}   </td>
                            <td>   {{$data->email}}   </td>
                            <td>   {{$data->address}} </td>
                            <td>   {{$data->notes}}   </td>
                            <td>
                              <!-- <div class="row">
                                <a href="{{route('employee.edit', $data->id)}}">
                                <button class="badge badge-info">Edit</button> 
                                </a> 
                              </div> -->
                              <a href="{{ route('employee.edit', $data->id) }}"> <label class="badge badge-info">Edit</label></a> 
                              <form method="post" action="{{ route('employee.destroy', $data->id) }}">
                                @method('delete')
                                @csrf
                                <button type="submit" class="badge badge-danger">Delete</button>
                            </form>
                          </td>
                            <td><a href="{{route('employee.show', $data->id) }}">
                              <button class="badge badge-info">View details</button></a></td>
                          </tr>
                           <!-- Modal -->

                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

@endsection