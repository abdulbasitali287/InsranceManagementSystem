@extends('admin_frontend.master')
@section('content')
<div class="content-wrapper">
<form class="form-sample"method="post" action= "{{route('employee.update', $data->id)}}" enctype="multipart/form-data">
               @method('patch')
              @csrf
    <!-- form start  -->
    
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">

              <h4 class="card-title">Employee</h4>
             
                <p class="card-description"> Edit new Employee </p>
    
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Name</label>
                      <div class="col-sm-9">
                        <input type="text" name="name" value="{{$data->name}}" class="form-control" required/>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">DOB</label>
                      <div class="col-sm-9">
                        <input type="date" name="dob" value="{{$data->dob}}" class="form-control" required/>
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
                        <input type="text" name="tax_id" value="{{$data->tax_id}}"  class="form-control"  required/>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">DL / ID #</label>
                      <div class="col-sm-9">
                        <input type="text" name="dl_id" value="{{$data->dl_id}}"  class="form-control"  required/>
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
                        <input type="text" name="phone" value="{{$data->phone}}" class="form-control" required />
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Email </label>
                      <div class="col-sm-9">
                        <input type="text"  name="email" value="{{$data->email}}" class="form-control"  required/>
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
                        <input type="text" name="address"  value="{{$data->address}}" class="form-control" required />
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Notes</label>
                      <div class="col-sm-9">
                        <input type="text" name="notes" value="{{$data->notes}}"   class="form-control" required/>
                      </div>
                    </div>
                  </div>
                </div>
    <!-- new row -->
    
    <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Upload File(s)</label>
                      <div class="col-sm-9">
                        <input type="file" name="file" class="form-control" required/>
                      </div>
                    </div>
                  </div>
    
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
                        <input type="text" name="job_title"  value="{{$data->jobDetail->job_title}}" class="form-control"  required/>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Start Date</label>
                      <div class="col-sm-9">
                        <input type="date" name="start_date" value="{{$data->jobDetail->start_date}}" class="form-control" required/>
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
                        <input type="text"  name="pay_type"  value="{{$data->jobDetail->pay_type}}"  class="form-control" required/>
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
                        <input type="text" name="pay_amount" value="{{$data->jobDetail->pay_amount}}" class="form-control" required />
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Pay Frequency</label>
                      <div class="col-sm-9">
                        <input type="text" name="pay_frequency" value="{{$data->jobDetail->pay_frequency}}" class="form-control" required/>
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
                        <input type="text" name="payment_method" value="{{$data->jobDetail->payment_method}}" class="form-control" required />
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Payment Reminder</label>
                      <div class="col-sm-9">
                        <input type="date" name="payment_reminder" value="{{$data->jobDetail->payment_reminder}}" class="form-control" required/>
                      </div>
                    </div>
                  </div>
                </div>
    <!-- new row -->
    <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Reporting To</label>
                      <div class="col-sm-9">
                        <input type="text" name="reporting_to" value="{{$data->jobDetail->reporting_to}}" class="form-control" required />
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Department</label>
                      <div class="col-sm-9">
                        <input type="text" name="department"  value="{{$data->jobDetail->department}}" class="form-control" required/>
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
    <p class="card-description"> Pay History  </p>
    
    <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Payment Date </label>
                      <div class="col-sm-9">
                        <input type="date" name="payment_date" value="{{$data->paymentHistory[0]->payment_date}}"  class="form-control"  required/>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Payment Amount</label>
                      <div class="col-sm-9">
                        <input type="text" name="payment_amount" value="{{$data->paymentHistory[0]->payment_amount}}" class="form-control" required/>
                      </div>
                    </div>
                  </div>
                </div>
    <!-- new row -->
    
    <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Description </label>
                      <div class="col-sm-9">
                        <input type="text" name="description" value="{{$data->paymentHistory[0]->description}}" class="form-control" required />
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Confirmation #</label>
                      <div class="col-sm-9">
                        <input type="text" name="confirmation_num" value="{{$data->paymentHistory[0]->confirmation_num}}" class="form-control" required />
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
    <p class="card-description">Work History   </p>
    
    <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Previous Company </label>
                      <div class="col-sm-9">
                        <input type="text" name="previous_company" value="{{$data->workHistory[0]->previous_company}}" class="form-control"  required/>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Job Title</label>
                      <div class="col-sm-9">
                        <input type="text" name="job_title" value="{{$data->workHistory[0]->job_title}}" class="form-control" required />
                      </div>
                    </div>
                  </div>
                </div>
    <!-- new row -->
    
    <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Start Date </label>
                      <div class="col-sm-9">
                        <input type="date" name="start_date" value="{{$data->workHistory[0]->start_date}}" class="form-control" required />
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">End Date</label>
                      <div class="col-sm-9">
                        <input type="date" name="end_date"   value="{{$data->workHistory[0]->end_date}}"  class="form-control" required/>
                      </div>
                    </div>
                  </div>
                </div>
    <!-- new row -->
    
    <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Description </label>
                      <div class="col-sm-9">
                        <input type="date" name="description" value="{{$data->workHistory[0]->description}}"  class="form-control" required />
                      </div>
                    </div>
                  </div>
    
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
    <p class="card-description">Education History    </p>
    
    <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Degree</label>
                      <div class="col-sm-9">
                        <input type="text" name="degree" value="{{$data->educationHistory[0]->degree}}" class="form-control"  required/>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Field of study</label>
                      <div class="col-sm-9">
                        <input type="text" name="field_of_study" value="{{$data->educationHistory[0]->field_of_study}}" class="form-control" required/>
                      </div>
                    </div>
                  </div>
                </div>
    <!-- new row -->
    
    <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Year of completion</label>
                      <div class="col-sm-9">
                        <input type="date"  name="year_of_completion" value="{{$data->educationHistory[0]->year_of_completion}}" class="form-control" required />
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Notes</label>
                      <div class="col-sm-9">
                        <input type="text" name="notes" value="{{$data->educationHistory[0]->notes}}" class="form-control" required/>
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
    <p class="card-description">Family Information     </p>
    
    <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Name</label>
                      <div class="col-sm-9">
                        <input type="text" name="name" value="{{$data->familyInformation[0]->name}}" class="form-control" required />
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Type of Relationship</label>
                      <div class="col-sm-9">
                        <input type="text"  name="type_of_relation" value="{{$data->familyInformation[0]->type_of_relation}}" class="form-control" required/>
                      </div>
                    </div>
                  </div>
                </div>
    <!-- new row -->
    
    <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">DOB</label>
                      <div class="col-sm-9">
                        <input type="date" name="dob" value="{{$data->familyInformation[0]->dob}}" class="form-control" required />
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Phone</label>
                      <div class="col-sm-9">
                        <input type="text" name="phone" value="{{$data->familyInformation[0]->phone}}" class="form-control" required/>
                      </div>
                    </div>
                  </div>
                </div>
    <!-- new row -->
    
    <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input type="text" name="email" value="{{$data->familyInformation[0]->email}}" class="form-control" required />
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
                      <label class="col-sm-3 col-form-label"></label>
                      <div class="col-sm-9">
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      </div>
                    </div>
                  </div>
    
                  <div class="col-md-6">
                    <div class="form-group row">
                    </div>
                  </div>
                </div>
    <!-- new row -->
              
            </div>
          </div>
        </div>
        </form>

        <!-- form end -->
      </div>
      <!-- content-wrapper ends -->
@endsection
