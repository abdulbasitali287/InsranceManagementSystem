@extends('admin_frontend.master')
@section('content')
<div class="content-wrapper">
<form class="form-sample">

    <!-- form start  -->
    
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Employee</h4>
    
                <p class="card-description"> View Employee Detials </p>
    
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Name</label>
                      <div class="col-sm-9">
                        <p class="col-form-label text-muted">{{$data->name}}</p>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">DOB</label>
                      <div class="col-sm-9">
                        <p class="col-form-label text-muted">{{$data->dob}}</p>
                      </div>
                    </div>
                  </div>
                </div>
    <!-- new row -->
    
    <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Tax Id #</label>
                      <div class="col-sm-9">
                        <p class="col-form-label text-muted">{{$data->tax_id}}</p>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">DL / ID #</label>
                      <div class="col-sm-9">
                        <p class="col-form-label text-muted">{{$data->dl_id}}</p>
                      </div>
                    </div>
                  </div>
                </div>
    <!-- new row -->
    
    <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Phone </label>
                      <div class="col-sm-9">
                        <p class="col-form-label text-muted">{{$data->phone}}</p>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Email </label>
                      <div class="col-sm-9">
                        <p class="col-form-label text-muted">{{$data->email}}</p>
                      </div>
                    </div>
                  </div>
                </div>
    <!-- new row -->
    
    <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Address </label>
                      <div class="col-sm-9">
                        <p class="col-form-label text-muted">{{$data->address}}</p>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Notes</label>
                      <div class="col-sm-9">
                        <p class="col-form-label text-muted">{{$data->notes}}</p>
                      </div>
                    </div>
                  </div>
                </div>
    <!-- new row -->
    
    <div class="row">
                  {{-- <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Upload File(s)</label>
                      <div class="col-sm-9">
                      <img  src="{{ asset('storage/'.$data->file) }}" height="100px" width="100px" alt="job image" title="job image">
                      </div>
                    </div>
                  </div> --}}
    
                  <div class="col-md-6">
                    <div class="form-group row">
                     </div>
                     </div>
                     </div>
    <!-- new row -->
    </div></div></div>

<!-- card -->
<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">
    <p class="card-description"> Status </p>
    
    <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Job Title</label>
                      <div class="col-sm-9">
                        <p class="col-form-label text-muted">{{$data->jobDetail->job_title}}</p>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Start Date</label>
                      <div class="col-sm-9">
                        <p class="col-form-label text-muted">{{$data->jobDetail->start_date}}</p>
                      </div>
                    </div>
                  </div>
                </div>
    <!-- new row -->
    
    <div class="row">
    <!-- <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Type of Employee</label>
                      <p class="col-form-label text-muted">url</p>

                    </div>
                  </div> -->
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Pay Type</label>
                      <div class="col-sm-9">
                        <p class="col-form-label text-muted">{{$data->jobDetail->pay_type}}</p>
                      </div>
                    </div>
                  </div>
                </div>
    <!-- new row -->
    <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Pay Amount</label>
                      <div class="col-sm-9">
                        <p class="col-form-label text-muted">{{$data->jobDetail->pay_amount}}</p>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Pay Frequency</label>
                      <div class="col-sm-9">
                        <p class="col-form-label text-muted">{{$data->jobDetail->pay_frequency}}</p>
                      </div>
                    </div>
                  </div>
                </div>
    <!-- new row -->
    
    <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Payment Method </label>
                      <div class="col-sm-9">
                        <p class="col-form-label text-muted">{{$data->jobDetail->payment_method}}</p>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Payment Reminder</label>
                      <div class="col-sm-9">
                        <p class="col-form-label text-muted">{{$data->jobDetail->payment_reminder}}</p>
                      </div>
                    </div>
                  </div>
                </div>
    <!-- new row -->
        <!-- new row -->
    
        <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Reporting To</label>
                      <div class="col-sm-9">
                        <p class="col-form-label text-muted">{{$data->jobDetail->reporting_to}}</p>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Department</label>
                      <div class="col-sm-9">
                        <p class="col-form-label text-muted">{{$data->jobDetail->department}}</p>
                      </div>
                    </div>
                  </div>
                </div>
    <!-- new row -->
    </div></div></div>





        </form>

        <!-- form end -->
      </div>
      <!-- content-wrapper ends -->
@endsection