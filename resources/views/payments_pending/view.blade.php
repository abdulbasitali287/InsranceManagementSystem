@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
  
  <div class="col-12 col-md-6 grid-margin">
    <div class="d-flex justify-content-between flex-column flex-md-row">
        <div class="mb-2 mb-md-0">
            <a href="{{url('policy/create')}}" class="btn btn-primary mr-2">Add Record</a>
            <a href="{{url('payment/'.$payment->id.'/edit/#payment')}}" class="btn btn-primary mr-2">Add Payment</a>
        </div>
        <div>
            <a href="{{url('customer-documents/'.$payment->id)}}" class="btn btn-success">Document Management</a>
        </div>
    </div>
</div>





 {{-- new row div --}}

 

 <div class="row">

  <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-9">
            <div class="d-flex align-items-center align-self-start">
              <h3 class="mb-0">{{ $payment->fees }}</h3>
              {{-- <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p> --}}
            </div>
          </div>
          <div class="col-3">
            <div class="icon icon-box-success ">
              <span class="mdi mdi-arrow-top-right icon-item"></span>
            </div>
          </div>
        </div>
        <h6 class="text-muted font-weight-normal">Total Pay</h6>
      </div>
    </div>
  </div>


  <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-9">
            <div class="d-flex align-items-center align-self-start">
              <h3 class="mb-0">{{ $payment->amount_paid }}</h3>
              <p class="text-success ms-2 mb-0 font-weight-medium"> Date: {{ $payment->pay_date }} </p>
            </div>
          </div>
          <div class="col-3">
            <div class="icon icon-box-success">
              <span class="mdi mdi-arrow-top-right icon-item"></span>
            </div>
          </div>
        </div>
        <h6 class="text-muted font-weight-normal">Amount Pay</h6>
        
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-9">
            <div class="d-flex align-items-center align-self-start">
              <h3 class="mb-0">{{ $payment->balance }}</h3>
              {{-- <p class="text-danger ms-2 mb-0 font-weight-medium">-2.4%</p> --}}
            </div>
          </div>
          <div class="col-3">
            <div class="icon icon-box-success">
              <span class="mdi mdi-arrow-bottom-left icon-item"></span>
            </div>
          </div>
        </div>
        <h6 class="text-muted font-weight-normal">Balance</h6>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-9">
            <div class="d-flex align-items-center align-self-start">
              <h3 class="mb-0">{{ $payment->next_pay }}</h3>
              {{-- <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p> --}}
            </div>
          </div>
          <div class="col-3">
            <div class="icon icon-box-success ">
              <span class="mdi mdi-arrow-top-right icon-item"></span>
            </div>
          </div>
        </div>
        <h6 class="text-muted font-weight-normal">Next payment</h6>
      </div>
    </div>
  </div>
</div>

 {{-- row div end --}}

 
<div class="row">
  <div class="col-md-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Customer Details</h4>
        {{-- <canvas id="transaction-history" class="transaction-chart"></canvas> --}}
       
        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
         
          <div class="text-md-center text-xl-left">
            <h6 class="mb-1">Name</h6>
            <p class="text-muted mb-0">{{ $payment->name }}</p>
          </div>
          <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
            {{-- for side text --}}
            <h6 class="font-weight-bold mb-0"></h6>
          </div>
        </div>

        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
          <div class="text-md-center text-xl-left">
            <h6 class="mb-1">Email</h6>
            <p class="text-muted mb-0">{{ $payment->email }}</p>
          </div>
          <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
            <h6 class="font-weight-bold mb-0"></h6>
          </div>
        </div>

        {{-- new fields --}}
        
        {{-- <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
          <div class="text-md-center text-xl-left">
            <h6 class="mb-1">Total Fee</h6>
            <p class="text-muted mb-0">{{ $payment->fees }}</p>
          </div>
          <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
            <h6 class="font-weight-bold mb-0"></h6>
          </div>
        </div>

        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
          <div class="text-md-center text-xl-left">
            <h6 class="mb-1">Amount Paid</h6>
            <p class="text-muted mb-0">{{ $payment->amount_paid }}</p>
          </div>
          <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
            <h6 class="font-weight-bold mb-0"></h6>
          </div>
        </div>

        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
          <div class="text-md-center text-xl-left">
            <h6 class="mb-1">Balance</h6>
            <p class="text-muted mb-0">{{ $payment->balance }}</p>
          </div>
          <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
            <h6 class="font-weight-bold mb-0"></h6>
          </div>
        </div>

        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
          <div class="text-md-center text-xl-left">
            <h6 class="mb-1">Next Payment</h6>
            <p class="text-muted mb-0">{{ $payment->next_pay }}</p>
          </div>
          <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
            <h6 class="font-weight-bold mb-0"></h6>
          </div>
        </div> --}}

        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
          <div class="text-md-center text-xl-left">
            <h6 class="mb-1">Phone</h6>
            <p class="text-muted mb-0">{{ $payment->phone }}</p>
          </div>
          <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
            <h6 class="font-weight-bold mb-0"></h6>
          </div>
        </div>

        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
          <div class="text-md-center text-xl-left">
            <h6 class="mb-1">SSN</h6>
            <p class="text-muted mb-0">{{ $payment->ssn }}</p>
          </div>
          <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
            <h6 class="font-weight-bold mb-0"></h6>
          </div>
        </div>

        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
          <div class="text-md-center text-xl-left">
            <h6 class="mb-1">Date of birth</h6>
            <p class="text-muted mb-0">{{ $payment->dob }}</p>
          </div>
          <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
            {{-- <h6 class="font-weight-bold mb-0"> something</h6>
            <p class="text-muted mb-0">{{ $payment->dob }}</p> --}}

          </div>
        </div>

        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
          <div class="text-md-center text-xl-left">
            <h6 class="mb-1">Address</h6>
            <p class="text-muted mb-0">{{ $payment->address }}</p>
          </div>
          <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
            <h6 class="font-weight-bold mb-0"></h6>
          </div>
        </div>

        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
          <div class="text-md-center text-xl-left">
            <h6 class="mb-1">Marital Status</h6>
            <p class="text-muted mb-0">{{ $payment->marital_status }}</p>
          </div>
          <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
            <h6 class="font-weight-bold mb-0"></h6>
          </div>
        </div>

        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
          <div class="text-md-center text-xl-left">
            <h6 class="mb-1">Filling Status</h6>
            <p class="text-muted mb-0">{{ $payment->filing_status }}</p>
          </div>
          <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
            <h6 class="font-weight-bold mb-0"></h6>
          </div>
        </div>

        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
          <div class="text-md-center text-xl-left">
            <h6 class="mb-1">Service Code</h6>
            <p class="text-muted mb-0">{{ $payment->service_code }}</p>
          </div>
          <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
            <h6 class="font-weight-bold mb-0"></h6>
          </div>
        </div>

       

        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
          <div class="text-md-center text-xl-left">
            <h6 class="mb-1">Type</h6>
            <p class="text-muted mb-0">{{ $payment->type_bu }}</p>
          </div>
          <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
            <h6 class="font-weight-bold mb-0"></h6>
          </div>
        </div>

        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
          <div class="text-md-center text-xl-left">
            <h6 class="mb-1">Service CO</h6>
            <p class="text-muted mb-0">{{ $payment->service_co }}</p>
          </div>
          <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
            <h6 class="font-weight-bold mb-0"></h6>
          </div>
        </div>

        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
          <div class="text-md-center text-xl-left">
            <h6 class="mb-1">Hire Date</h6>
            <p class="text-muted mb-0">{{ $payment->hire_date }}</p>
          </div>
          <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
            <h6 class="font-weight-bold mb-0"></h6>
          </div>
        </div>

        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
          <div class="text-md-center text-xl-left">
            <h6 class="mb-1">Busines name</h6>
            <p class="text-muted mb-0">{{ $payment->name_bu }}</p>
          </div>
          <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
            <h6 class="font-weight-bold mb-0"></h6>
          </div>
        </div>

        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
          <div class="text-md-center text-xl-left">
            <h6 class="mb-1">EIN</h6>
            <p class="text-muted mb-0">{{ $payment->ein }}</p>
          </div>
          <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
            <h6 class="font-weight-bold mb-0"></h6>
          </div>
        </div>

        <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
          <div class="text-md-center text-xl-left">
            <h6 class="mb-1">Busines Address</h6>
            <p class="text-muted mb-0">{{ $payment->address_bu }}</p>
          </div>
          <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
            <h6 class="font-weight-bold mb-0"></h6>
          </div>
        </div>

      
{{-- file  --}}

{{-- hiding all file divs  --}}

{{-- <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3" id="files">
  <div class="text-md-center text-xl-left">
      @if(!empty($payment->file))
          <a href="{{ url('storage/'.$payment->file) }}">File 1</a>
      @else
          Empty
      @endif
  </div>
  <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
      <h6 class="font-weight-bold mb-0"></h6>
  </div>
</div> --}}

          {{-- <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
            <div class="text-md-center text-xl-left">
                @if(!empty($payment->file2))
                    <a href="{{ url('storage/'.$payment->file2) }}">File 2</a>
                @else
                    Empty
                @endif
            </div>
            <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                <h6 class="font-weight-bold mb-0"></h6>
            </div>
        </div> --}}

          {{-- <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
            <div class="text-md-center text-xl-left">
                @if(!empty($payment->file3))
                    <a href="{{ url('storage/'.$payment->file3) }}">File 3</a>
                @else
                    Empty
                @endif
            </div>
            <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                <h6 class="font-weight-bold mb-0"></h6>
            </div>
        </div> --}}

          {{-- <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
            <div class="text-md-center text-xl-left">
                @if(!empty($payment->file4))
                    <a href="{{ url('storage/'.$payment->file4) }}">File 4</a>
                @else
                    Empty
                @endif
            </div>
            <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                <h6 class="font-weight-bold mb-0"></h6>
            </div>
        </div> --}}

          {{-- <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
            <div class="text-md-center text-xl-left">
                @if(!empty($payment->file5))
                    <a href="{{ url('storage/'.$payment->file5) }}">File 5</a>
                @else
                    Empty
                @endif
            </div>
            <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                <h6 class="font-weight-bold mb-0"></h6>
            </div>
        </div> --}}

        {{-- file divs hide --}}

      </div>
    </div>
  </div>
 {{-- show notes data  --}}

 <div class="col-md-8 grid-margin stretch-card">
  <div class="card">
      <div class="card-body">
          <div class="d-flex flex-row justify-content-between">
              <h4 class="card-title mb-1">Records</h4>
              <p class="text-muted mb-1">Customer Record</p>
          </div>
          <div class="row">
              <div class="col-12">
                  <div class="preview-list">
                      @if ($notes->count() > 0)
                          @foreach ($notes as $note)
                              <div class="preview-item border-bottom">
                                  <div class="preview-thumbnail">
                                    @php
                                    $iconClass = '';
                                    $iconBgColorClass = ''; // New variable for background color class
                                    
                                    switch ($note->record_of) {
                                        case 'Call':
                                            $iconClass = 'mdi mdi-phone';
                                            break;
                                        case 'Text':
                                            $iconClass = 'mdi mdi-message-text-outline';
                                            break;
                                        case 'Meeting':
                                            $iconClass = 'mdi mdi-calendar';
                                            break;
                                        case 'Mail':
                                            $iconClass = 'mdi mdi-email';
                                            break;
                                        case 'Email':
                                            $iconClass = 'mdi mdi-email-outline';
                                            break;
                                        case 'Fax':
                                            $iconClass = 'mdi mdi-fax';
                                            break;
                                        default:
                                            $iconClass = 'mdi mdi-file-document';
                                    }
                                    
                                    // Set background color class based on status
                                    switch ($note->status) {
                                        case 'Pending':
                                            $iconBgColorClass = 'bg-danger';
                                            break;
                                        case 'Process':
                                            $iconBgColorClass = 'bg-warning';
                                            break;
                                        case 'Complete':
                                            $iconBgColorClass = 'bg-primary';
                                            break;
                                        default:
                                            $iconBgColorClass = 'bg-secondary';
                                    }
                                @endphp
                                       <div class="preview-icon {{ $iconBgColorClass }}">
                                        <i class="{{ $iconClass }}"></i>
                                    </div>
                                  </div>
                                  <div class="preview-item-content d-sm-flex flex-grow">
                                      <div class="flex-grow">
                                        {{-- badge badge-outline-primary --}}
                                          <h6 class="preview-subject ">{{ $note->status }} | Create : {{ $note->created_at }}
                                          
                                          </h6>
                                          <a href="{{ url('policy/' .$note->id) }}">
                                            <p class="text-muted mb-0">{{ $note->heading }}</p>

                                          </a>

                                      </div>
                                      <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                          <p class="text-muted">Due: {{ $note->date }}</p>
                                          {{-- <p class="text-muted mb-0">Todo: {{ $note->todo_list ? 'Yes' : 'No' }}, Reminder: {{ $note->remainder ? 'Yes' : 'No' }}</p> --}}
                                          <p class="text-muted mb-0">
                                            <i class="mdi {{ $note->todo_list ? 'mdi-check-circle text-success' : 'mdi-close-circle text-danger' }}"></i>
                                            ToDo
                                            <i class="mdi {{ $note->remainder ? 'mdi-check-circle text-success' : 'mdi-close-circle text-danger' }}"></i>
                                            Reminder
                                        </p>
                                      </div>
                                  </div>
                              </div>
                          @endforeach
                      @else
                          <p>No events found.</p>
                      @endif
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

 
 {{-- notes div end  --}}

 {{-- <div class="col-md-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Default form</h4>
      <p class="card-description"> Basic form layout </p>
      <form class="forms-sample">
        <div class="form-group">
          <label for="exampleInputUsername1">Username</label>
          <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="exampleInputConfirmPassword1">Confirm Password</label>
          <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
        </div>
        <div class="form-check form-check-flat form-check-primary">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input"> Remember me </label>
        </div>
        <button type="submit" class="btn btn-primary me-2">Submit</button>
        <button class="btn btn-dark">Cancel</button>
      </form>
    </div>
  </div> --}}


</div>
</div>


@endsection
