@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
<form class="form-sample" method="post" action={{ url('vendor/'. $vendor->id) }}>
          @csrf
          @method('PUT')
<!-- 1st start  -->

    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Edit Vendor Details</h4>

         
            <p class="card-description"> Vendor </p>
<!-- row -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">DISPLAY NAME</label>
                  <div class="col-sm-9">
                    <input type="text" name="display_name" class="form-control" value="{{ $vendor->display_name }}" required/>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Vendor Name</label>
                  <div class="col-sm-9">
                    <input type="text" name="vendor_name" class="form-control" value="{{ $vendor->vendor_name }}" required/>
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
                    <input type="text" class="form-control" name="tax_id" value="{{ $vendor->tax_id }}" required/>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Tel  </label>
                  <div class="col-sm-9">
                    <input type="tel" class="form-control" name="phone"  value="{{ $vendor->phone }}" required />
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
                    <input type="tel" class="form-control" name="fax" value="{{ $vendor->fax }}" required />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Email </label>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" name="email" value="{{ $vendor->email }}" required />
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
                    <input type="text" class="form-control"  name="address"  value="{{ $vendor->address }}" required required/>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Website  </label>
                  <div class="col-sm-9">
                    <input type="url" class="form-control" name="website"  required value="{{ $vendor->website }}" required/>
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
                    <input type="text" class="form-control"  name="notes"   value="{{ $vendor->notes }}" required/>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Vendor Status</label>
                  <div class="col-sm-9">
                    <select class="form-control" name="vendor_fields" required>
                      <option @if($vendor->vendor_fields == 'Active') selected  @endif value="Active">Active</option>
                      <option @if($vendor->vendor_fields == 'Inactive') selected  @endif  value="Inactive">Inactive</option>
                    </select>
            
                  </div>
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
                    <input type="text" class="form-control" name="type_of_vendor"  value="{{ $vendor->type_of_vendor }}" required/>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Account #</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="account_no" value="{{ $vendor->account_no }}" required/>
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
                    <input type="text" class="form-control"  name="account_holder_name"  value="{{ $vendor->account_holder_name }}" required/>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Person In Charge</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="person_incharge"  value="{{ $vendor->account_holder_name }}" required/>
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
                    <input type="date" class="form-control"  name="due_date" value="<?php echo $vendor->due_date ?>" required/>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Amount Constant</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="amount_constant" value="{{ $vendor->amount_constant }}" required/>
                  </div>
                </div>
              </div>

{{--! This was not added --}}
<div class="col-md-6">
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Amount Due</label>
    <div class="col-sm-9">
      <input type="float" class="form-control" name="amount_due" value="{{ $vendor->amount_due }}"  required/>
  
    </div>
  </div>
</div>

              
            </div>
<!-- row -->
<div class="row">
<div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Billing Terms</label>
                  <div class="col-sm-9">
                    <select class="form-control" name="billing_terms" required>
              
                      <option @if($vendor->billing_terms == 'Daily' ) selected  @endif value="Daily">Daily</option>
                      <option @if($vendor->billing_terms == 'Weekly' ) selected  @endif value="Weekly">Weekly</option>
                      <option @if($vendor->billing_terms == 'Monthly' ) selected  @endif value="Monthly">Monthly</option>
                      <option @if($vendor->billing_terms == 'Quarterly' ) selected  @endif value="Quarterly">Quarterly</option>
                      <option @if($vendor->billing_terms == 'Semi-Anually' ) selected  @endif value="Semi-Anually">Semi-Anually</option>
                      <option @if($vendor->billing_terms == 'Anually' ) selected  @endif value="Anually">Anually</option>
                      <option @if($vendor->billing_terms == 'Due on Reciept' ) selected  @endif value="Due on Reciept">Due on Reciept</option>
                      <option @if($vendor->billing_terms == 'Other' ) selected  @endif value="Other">Other</option>
                    </select>
                  </div>
                </div>
              </div>
              

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Payment Method</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control"  name="billing_method" value="{{ $vendor->billing_method }}" required/>
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
                    <input type="text" class="form-control" name="logins_website"  value="{{ $vendor->vendorLoginInfo->website }}" required/>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">User Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="username" value="{{ $vendor->vendorLoginInfo->username }}" required/>
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
                    <input type="text" class="form-control"  name="password" value="" required/>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">PIN</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="pin" value="{{ $vendor->vendorLoginInfo->pin }}" required/>
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
                    <input type="text" class="form-control"  name="login_note" value="{{ $vendor->vendorLoginInfo->note }}" required/>
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
                    <input type="text" class="form-control" name="poc_name" value="{{ $vendor->vendorPointOfContact[0]->name }}" required/>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Title</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="poc_title" value="{{ $vendor->vendorPointOfContact[0]->title }}" required/>
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
                    <input type="text" class="form-control" name="poc_address" value="{{  $vendor->vendorPointOfContact[0]->address  }}" required/>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Tel</label>
                  <div class="col-sm-9">
                    <input type="tel" class="form-control" name="poc_phone" value="{{ $vendor->vendorPointOfContact[0]->phone }}" required/>
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
                    <input type="tel" class="form-control" name="poc_fax" value="{{ $vendor->vendorPointOfContact[0]->fax }}"required/>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" name="poc_email" value="{{ $vendor->vendorPointOfContact[0]->email }}" required/>
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
                    <input type="url" class="form-control" name="poc_website" value="{{ $vendor->vendorPointOfContact[0]->website }}" required/>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Notes:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control"  name="poc_notes"  value="{{ $vendor->vendorPointOfContact[0]->notes }}" required />
                  </div>
                </div>
             
            </div>
<!-- row -->
<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label"></label>
                  <div class="col-sm-9">
                  <button type="submit" class="btn btn-primary mr-2">Update</button>
                </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                 
                </div>
             
            </div>
<!-- row -->

        </div></div></div>
    </form>

    <!-- form end -->
  </div>
 
  @endsection