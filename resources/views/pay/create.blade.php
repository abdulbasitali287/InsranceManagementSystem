@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
<form action="{{ url('payment')}}" method="POST" enctype="multipart/form-data">
  @csrf
<!-- 1st card -->
<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">
<h4 class="card-title">Payment </h4>
<!-- info -->
<!-- product -->
<p class="card-description"> Payment Information Fields</p>
<!-- row  -->
            <div class="row">

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Agent</label>
                  <div class="col-sm-9">
                    <select class="form-control" name="agent" required>
                      <option value="Agent 1">Agent 1</option>
                      <option value="Agent 2">Agent 2</option>
                    </select>
                  </div>
                </div>
              </div>

                            <div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Customer</label>
                    <div class="col-sm-9">
                    <select class="form-control" name="customer" required>
                      <option value="Customer 1">Customer 1</option>
                      <option value="Customer 2">Customer 2</option>
                    </select>
                    </div>
                    </div>
                </div>

            </div>
<!-- row -->
<div class="row">

{{-- <div class="col-md-6">
      <div class="form-group row">
      <label class="col-sm-3 col-form-label">Policy</label>
      <div class="col-sm-9">
          <select class="form-control" name="policy" required>
          <option>ex</option>
          <option>ex</option>
          </select>
      </div>
      </div>
  </div> --}}

    <div class="col-md-6">
      <div class="form-group row">
      <label class="col-sm-3 col-form-label">Payment Method</label>
      <div class="col-sm-9">
          <select class="form-control" name="payment_method" required>
          <option value="Cash">Cash</option>
          <option value="Card">Card</option>
          <option value="cheque">cheque</option>
          <option value="E-cheque">E-cheque</option>
          <option value="EFT/Auto Pay">EFT/Auto Pay</option>
          <option value="Money Order">Money Order</option>
          </select>
      </div>
      </div>
  </div>

  {{-- <div class="col-md-6">
      <div class="form-group row">
      <label class="col-sm-3 col-form-label">Split Payment</label>
      <div class="col-sm-9">
          <select class="form-control" name="split_payment" required id ="payment" onmousedown="this.value='';" onchange="jsFunction(this.value);">
          <option value="No">No</option>
          <option value="Yes">Yes</option>
          </select>
      </div>
      </div>
  </div> --}}

  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Member fee</label>
      <div class="col-sm-9">
        <input type="number" class="form-control" name="member_fee" required />
      </div>
    </div>
  </div>


</div>
<!-- row -->
<div class="row">

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Payment amount</label>
    <div class="col-sm-9">
      <input type="number" class="form-control" name="payment_amount" required />
    </div>
  </div>
</div>

</div>
<!-- row -->
<div class="row">

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Total Payment</label>
    <div class="col-sm-9">
      <input type="number" class="form-control" name="total_payment" required />
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Agency fee</label>
    <div class="col-sm-9">
      <input type="number" class="form-control" name="agency_fee" required />
    </div>
  </div>
</div>
          

</div>
<!-- row -->
<div class="row">

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Total recieved </label>
    <div class="col-sm-9">
      <input type="number" class="form-control" name="total_recieved" required />
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Future due date </label>
    <div class="col-sm-9">
      <input type="date" class="form-control" name="future_due_date" required />
    </div>
  </div>
</div>

</div>
<!-- end -->
<!-- row -->
<div class="row">

  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Notes</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="notes" required />
      </div>
    </div>
  </div>
  
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Type Of Payment</label>
      <div class="col-sm-9">
        <select class="form-control" name="type_of_payment" required>
          <option value="Monthly">Monthly</option>
          <option value="Endorsement">Endorsement</option>
          <option value="Down">Down</option>
          <option value="Renewal">Renewal</option>
          <option value="Reinstate">Reinstate</option>
          </select>
      </div>
    </div>
  </div>
  
  <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Upload Reciept</label>
                  <div class="col-sm-9">
                    <input type="file" name="receipt" class="form-control" required />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Policy </label>
                  <div class="col-sm-9">
                  <select class="form-control" name="policy" required>
                  <option value="Policy 1">Policy 1</option>
                  <option value="Policy 2">Policy 2</option>
                  </select>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                </div>
              </div>
              
            </div>
  <!-- end -->
</div></div></div>
<div id="pay_card">

    <!-- 2nd card -->


</div>


<div class="col-12 grid-margin">
   <button type="submit" class="btn btn-primary mr-2" >Upload </button> 

</div>

</form>
</div>
<script src="{{asset('assets/js/employee.js')}}"></script>

@endsection
