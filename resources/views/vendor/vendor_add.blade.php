@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">

<form method="post" action="{{ route('vendor.store') }}" class="form-sample">
          @csrf
<!-- 1st card  -->

    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">New Vendor</h4>

          
            <p class="card-description"> Add a new Vendor </p>
<!-- row -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">DISPLAY NAME</label>
                  <div class="col-sm-9">
                    <input type="text" name="display_name" class="form-control"  required/>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Vendor Name</label>
                  <div class="col-sm-9">
                    <input type="text" name="vendor_name" class="form-control" required />
            
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
                    <input type="text" class="form-control" name="tax_id" required/>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Tel  </label>
                  <div class="col-sm-9">
                    <input type="tel" class="form-control" name="phone"  required />
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
                    <input type="tel" class="form-control" name="fax"  required />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Email </label>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" name="email"  required />
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
{{-- TODO ADD address field in databse --}}
<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Address   </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="address"  required />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Website  </label>
                  <div class="col-sm-9">
                    <input type="url" class="form-control" name="website" required />
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
                    <input type="text" class="form-control" name="notes"  required />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Vendor Status</label>
                  <div class="col-sm-9">
                    <select class="form-control" name="vendor_fields" required>
                      <option value="Active">Active</option>
                      <option value="Inactive">Inactive</option>
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
                    <input type="text" class="form-control" name="type_of_vendor"  required/>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Account #</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="account_no"  required/>
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
                    <input type="text" class="form-control" name="account_holder_name" required/>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Person In Charge</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="person_incharge" required/>
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
                    <input type="date" class="form-control" name="due_date" required/>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Amount Constant</label>
                  <div class="col-sm-9">
                    <select class="form-control" name="amount_constant" required>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>
                  </div>
                </div>
              </div>
{{--! This was not added --}}
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Amount Due</label>
                  <div class="col-sm-9">
                    <input type="float" class="form-control" name="amount_due" required/>
                
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
                      <option value="Daily">Daily</option>
                      <option value="Weekly">Weekly</option>
                      <option value="Monthly">Monthly</option>
                      <option value="Quarterly">Quarterly</option>
                      <option value="Semi-Anually">Semi-Anually</option>
                      <option value="Anually">Anually</option>
                      <option value="Due on Reciept">Due on Reciept</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>
                </div>
              </div>
              

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Payment Method</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="billing_method" required/>
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
                    <input type="url" class="form-control"  name="logins_website" required/>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">User Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="username" required/>
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
                    <input type="password" class="form-control"  name="password" required/>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">PIN</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="pin" required/>
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
                    <input type="text" class="form-control" name="login_note" required/>
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
                    <input type="text" class="form-control" name="poc_name" required/>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Title</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="poc_title" required/>
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
                    <input type="text" class="form-control" name="poc_address" required/>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Tel</label>
                  <div class="col-sm-9">
                    <input type="tel" class="form-control" name="poc_phone" required/>
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
                    <input type="tel" class="form-control" name="poc_fax" required/>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" name="poc_email" required/>
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
                    <input type="url" class="form-control" name="poc_website" required/>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Notes:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="poc_notes" required/>
                  </div>
                </div>
             
            </div>
<!-- row -->
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
<!-- row -->

</div></div></div>
             </form>

        
    <!-- form end -->
  </div>
 
  @endsection