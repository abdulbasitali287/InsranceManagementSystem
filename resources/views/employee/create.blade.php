@extends('admin_frontend.master')
@section('content')
<div class="content-wrapper">
<form class="form-sample" method="POST"  action="{{ route('employee.store') }}" enctype="multipart/form-data">
    @csrf
    <!-- card  -->
    
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Team Member</h4>

                <p class="card-description"> Add a new Team Member </p>
    
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Name</label>
                      <div class="col-sm-9" id="try">
                        <input type="text" name="name" class="form-control" required/>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">DOB</label>
                      <div class="col-sm-9">
                        <input type="date" name="dob" class="form-control" required/>
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
                        <input type="text" name="tax_id"  class="form-control"  required/>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">DL / ID #</label>
                      <div class="col-sm-9">
                        <input type="text" name="dl_id" class="form-control"  required/>
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
                        <input type="tel" name="phone" class="form-control" required />
                      </div>
                    </div>
                  </div>
    
                 {{-- <div class="col-md-6">
                    <div class="form-group row">
                  <label class="col-sm-3 col-form-label">
                    <button type="button" class="btn btn-primary mr-2" onclick="add_phone()">Add more</button> 
                  </label>
                  <div class="col-sm-9" id="phone">
                      </div>
                    </div>
                  </div> --}}

                </div>
    <!-- new row -->
    <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Email </label>
                      <div class="col-sm-9">
                        <input type="email"  name="email" class="form-control"  required/>
                      </div>
                    </div>
                  </div>
    
                  {{-- <div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label">
                    <button type="button" class="btn btn-primary mr-2" onclick="add_email()">Add more</button> 
                  </label>
                  <div class="col-sm-9" id="email">
                      </div>
                    </div>
                  </div> --}}

                </div>
    <!-- new row -->
    <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Address </label>
                      <div class="col-sm-9">
                        <input type="text" name="address" class="form-control" required />
                      </div>
                    </div>
                  </div>
    
                  {{-- <div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label">
                    <button type="button" class="btn btn-primary mr-2" onclick="add_address()">Add more</button> 
                  </label>
                  <div class="col-sm-9" id="address">
                      </div>
                    </div>
                  </div> --}}

                </div>
    <!-- new row -->
    
    <div class="row">
                  {{-- <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Upload File(s)</label>
                      <div class="col-sm-9">
                        <input type="file" name="file" class="form-control" />
                      </div>
                    </div>
                  </div> --}}
    
                  <div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Notes</label>
                      <div class="col-sm-9">
                        <input type="text" name="notes" class="form-control" required/>
                      </div>
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
                        <input type="text" name="job_title" class="form-control"  required/>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Start Date</label>
                      <div class="col-sm-9">
                        <input type="date" name="start_date" class="form-control" required/>
                      </div>
                    </div>
                  </div>
                </div>
    <!-- new row -->
    
    <div class="row">
    <!-- <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Type of Employee</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="pay_type" required>
                          <option>Category1</option>
                          <option>Category2</option>
                        </select>
                      </div>
                    </div>
                  </div> -->
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Pay Type</label>
                      <div class="col-sm-9">
                        <input type="text"  name="pay_type" class="form-control" required/>
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
                        <input type="text" name="pay_amount" class="form-control" required />
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Pay Frequency</label>
                      <div class="col-sm-9">
                        <input type="text" name="pay_frequency" class="form-control" required/>
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
                        <input type="text" name="payment_method" class="form-control" required />
                      </div>
                    </div>
                  </div>
    
                  {{-- <div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label">
                    <button type="button" class="btn btn-primary mr-2" onclick="add_pay()">Add more</button> 
                  </label>
                  <div class="col-sm-9" id="pay">
                      </div>
                  </div>
                </div> --}}
    <!-- new row -->
    <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Payment Reminder</label>
                      <div class="col-sm-9">
                        <input type="date" name="payment_reminder" class="form-control" required/>
                      </div>
                    </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                    </div>
                  </div>
                </div>
    <!-- new row -->
    <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Reporting To</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="reporting_to" required>
                      <option>ex</option>
                      <option>ex</option>
                    </select>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Department</label>
                      <div class="col-sm-9">
                        <input type="text" name="department" class="form-control" required/>
                      </div>
                    </div>
                  </div>
                </div>
                    <!-- new row -->
                    {{-- <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label"></label>
                      <div class="col-sm-9">
                    <button type="button" class="btn btn-primary mr-2">Request Leave</button> 
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                    </div>
                  </div>
                </div> --}}
    <!-- new row -->


                    </div></div></div>
<!-- card -->
<div class="col-sm-9">
  <button type="submit" class="btn btn-primary mr-2">Submit</button>
  </div>

    <!-- new row -->
    
    <!-- new row -->
       
              
    
        </form>
        </div>
                  </div>
                </div>
        <!-- form end -->
      </div>
      <!-- content-wrapper ends -->
    <script src="{{asset('assets/js/employee.js')}}"></script>
@endsection