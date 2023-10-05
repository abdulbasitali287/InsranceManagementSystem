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
            onclick="window.location.href='{{ URL::TO('customer/create') }}';" >
                    <i class="mdi mdi-plus-circle-outline"></i>
                    Add New Customer Detail </button>
        </ol>
        </nav>
    </div>
    <!-- header end -->

<!-- form start -->
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Payment Detail List</h4>
                    <p class="card-description">  <code></code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th><h6>Customer Name</h6></th>
                            <th><h6>CusOrLead</h6></th>
                            <th><h6>Account Name</h6></th>
                            <th><h6>EFT</h6></th>
                            <th><h6>Type</h6></th>
                            <th><h6>Referral Source</h6></th>
                            <th><h6>Status</h6></th>
                            <th><h6>Actions</h6></th>
                          </tr>
                        </thead>
                        <tbody>
                          @if ($data)
                            @foreach ($data as  $item)
                            <tr>
                              <td> {{ $item->name }} </td>
                              <td> {{ $item->cus_or_lead }} </td>
                              <td> {{ $item->account_name }} </td>
                              <td> {{ $item->eft }} </td>
                              <td> {{ $item->cus_type }} </td>
                              <td> {{ $item->referral_src }} </td>
                              <td> {!! $item->status === 1 ? "<span class='btn btn-success px-2'>Active</span>" : "<span class='btn btn-danger px-2'>Inactive</span>" !!} </td>
                              <td>
                                <div class="d-flex">
                                  <form action="{{ route('customer.destroy', $item->cus_id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                <a href="{{ route('customer.edit',$item->cus_id) }}" class="btn btn-sm btn-success ms-1">Edit</a>
                                <a href="{{ route('customer.show',$item->cus_id) }}" class="btn btn-sm btn-light ms-1">Show</a>
                                </div>
                              </td>
                            </tr>
                            @endforeach
                          @else
                            <tr>
                              <td colspan="13">No customers found...!.</td>
                            </tr>
                          @endif
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
</div>
@endsection
