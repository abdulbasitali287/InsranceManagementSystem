@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
<form class="form-sample">

<!--  card 1st  -->

    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Vendor Details</h4>


            <p class="card-description"> Vendor </p>
<!-- row -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">DISPLAY NAME</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $vendor->display_name }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Vendor Name</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $vendor->vendor_name }}</p>
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Tax ID # </label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $vendor->tax_id }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Tel  </label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $vendor->phone }}</p>
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Fax  </label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $vendor->fax }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Email </label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $vendor->email }}</p>
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Address   </label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $vendor->address }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Website  </label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $vendor->website }}</p>
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Notes   </label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $vendor->notes }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                 
                </div>
              </div>
            </div>
<!-- row -->
</div></div></div>
<!-- 2nd card  -->

<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">

<p class="card-description"> Files</p>

<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Type of Vendor</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $vendor->type_of_vendor }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Account #</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $vendor->account_no }}</p>
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Account Holder Name</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $vendor->account_holder_name }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Person In Charge</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $vendor->account_holder_name }}</p>
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Due Date</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $vendor->due_date }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Amount Constant</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $vendor->amount_constant }}</p>
                  </div>
                </div>
              </div>
              </div>

             
<!-- row -->
<div class="row">
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Amount Due</label>
      <div class="col-sm-9">
      <p class="col-form-label text-muted">{{ $vendor->amount_due }}</p>
      </div>
    </div>
  </div>
<div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Billing Terms</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $vendor->billing_terms }}</p>
                  </div>
                </div>
              </div>
              

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Payment Method</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $vendor->billing_method }}</p>
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
</div></div></div>
<!-- 3rd card  -->

<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">
<p class="card-description"> Log In(s) Info</p>

<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Website</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $vendor->vendorLoginInfo->website }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">User Name</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $vendor->vendorLoginInfo->username }}</p>
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Password</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">pass</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">PIN</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $vendor->vendorLoginInfo->pin }}</p>
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Notes</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $vendor->vendorLoginInfo->note }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                </div>
              </div>
            </div>
<!-- row -->
</div></div></div>
<!-- 4th card  -->

<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">

<p class="card-description"> Point of Contact  </p>

<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Name</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $vendor->vendorPointOfContact[0]->name }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Title</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $vendor->vendorPointOfContact[0]->title }}</p>
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Address</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $vendor->vendorPointOfContact[0]->address }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Tel</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $vendor->vendorPointOfContact[0]->phone }}</p>
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Fax</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $vendor->vendorPointOfContact[0]->fax }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $vendor->vendorPointOfContact[0]->email }}</p>
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Website</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $vendor->vendorPointOfContact[0]->website }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Notes:</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted">{{ $vendor->vendorPointOfContact[0]->notes }}</p>
                  </div>
                </div>
              </div>
            </div>
            

<!-- row -->

        </div>
      </div>
    </div>
    </form>

    <!-- form end -->
  </div>
 
  @endsection