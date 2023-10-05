@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
<form class="form-sample" action={{ url('policy/'.$policy->id) }} method="post">
@csrf
@method('PUT')
<!-- form start  -->

    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Edit Policy Information</h4>
            <!-- <p class="card-description"> Agency Info </p> -->

            <!-- row -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Policy #</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" required name="policy_no" value="{{ $policy->policy_no }}" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Blind Date</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" required name="blind_date" value="{{ $policy->blind_date }}" />
                  </div>
                </div>
              </div>
            </div>
            <!-- new row -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Effective Date</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" required name="effective_date" value="{{ $policy->effective_date }}"  />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Expiration Date</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" required name="expiration_date"  value="{{ $policy->expiration_date }}"/>
                  </div>
                </div>
              </div>
            </div>
            <!-- row new -->
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Policy Period</label>
                  <div class="col-sm-9">
                    <select class="form-control" required name="policy_period">
                      <option @if($policy->policy_period == 'Monthly') selected @endif value="Monthly">Monthly</option>
                      <option @if($policy->policy_period == 'Quarterly') selected @endif value="Quarterly">Quarterly</option>
                      <option @if($policy->policy_period == 'Semi-Annual') selected @endif value="Semi-Annual">Semi-Annual</option>
                      <option @if($policy->policy_period == 'Annually') selected @endif value="Annually">Annually</option>
                      <option @if($policy->policy_period == 'Variable') selected @endif value="Variable">Variable</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">EFT</label>
                  <div class="col-sm-9">
                    <select class="form-control" required name="eft">
                      <option @if($policy->eft == 'Yes') selected @endif  value="Yes">Yes</option>
                      <option @if($policy->eft == 'No') selected @endif  value="No">No</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <!-- row new -->

      
            <!-- row new -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Policy Note</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" value="{{ $policy->policy_note }}" required name="policy_note" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">EFT Date</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" value="{{ $policy->eft_date }}" required name="eft_date" />
                  </div>
                </div>
              </div> 
            </div>
  <!-- row  -->
  <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Status</label>
                  <div class="col-sm-9">
                  <select class="form-control" required name="status">
                      <option @if($policy->status == 'Active') selected @endif  value="Active">Active</option>
                      <option  @if($policy->status == 'Inactive') selected @endif  value="Inactive">Inactive</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                </div>
              </div> 
            </div>
  <!-- agency end  -->
  </div></div></div>
<!-- card -->
<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">

  <p class="card-description">Type of Policy</p>

  <div class="row">
              <div class="col-md-6">
                 <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Carrier</label>
                  <div class="col-sm-9">
                    <select class="form-control" required name="carrier">
                      <option @if($policy->carrier == 'Carrier 1') selected @endif value="Carrier 1">Carrier 1</option>
                      <option  @if($policy->carrier == 'Carrier 2') selected @endif  value="Carrier 2">Carrier 2</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Product</label>
                  <div class="col-sm-9">
                    <select class="form-control" required name="product">
                      <option @if($policy->product == 'Product 1') selected @endif  value="Product 1">Product 1</option>
                      <option  @if($policy->carrier == 'Product 2') selected @endif value="Product 2">Product 2</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <!-- row new -->

            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Total Premium</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" value="{{ $policy->total_premium }}" required name="total_premium" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Due Date</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" value="{{ $policy->due_date }}"  required name="due_date" />
                  </div>
                </div>
              </div>

            </div>
            <!-- row new -->

            <!-- row new -->

            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Remaining Payment</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control"  value="{{ $policy->remaining_payments }}" required name="remaining_payments" />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Type of Policy </label>
                  <div class="col-sm-9">
                  <select class="form-control" required name="type_of_policy" id="ddl" onmousedown="this.value='';" onchange="add_auto(this.value);">>
                      <option @if($policy->type_of_policy == 'Personal') selected @endif value="Personal">Personal</option>
                      <option @if($policy->type_of_policy == 'Commercial') selected @endif value="Commercial">Commercial</option>
                      <option @if($policy->type_of_policy == 'Auto') selected @endif value="Auto">Auto</option>
                    </select>
                  </div>
                </div> 
              </div>
            </div>
            <!-- row new -->

        </div></div></div>
        <div id="autos_div">

</div>
<div id="additional_policy">
  
</div>

        <div class="col-12 grid-margin">
   {{-- <button type="button" class="btn btn-primary mr-2" onclick="add_policy()">Add Additional Policy </button>  --}}
   <button type="submit" class="btn btn-primary mr-2" >Update </button> 

</div>




    </form>

    <!-- form end -->
  </div>
  <script src="{{asset('assets/js/employee.js')}}"></script>


@endsection
