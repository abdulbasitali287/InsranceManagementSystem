@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
    
    <!-- {{ Form::open([ 'url' => $url, 'method' => $method ]) }}
        <input type="hidden" name="form_type" value="customer_form"> -->
    
        <!-- {{ Form::close() }} -->

  <!-- 1st card -->
  {{ Form::open([ 'url' => $url, 'method' => $method ]) }}
  @method($method)
<div class="col-12 grid-margin" id="appendClone">

{{-- customer or lead info section sart --}}
    <section class="mb-2 clone">
        <div class="card" id="cloneContainer">
            <div class="card-body">
                <h4 class="card-title">Customer\Lead Info</h4>
                <p class="card-description">Customer\Lead Info Fields</p>
                <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                {{ Form::label("customer or lead","Customer / Lead" , ["class" => "col-sm-3 col-form-label"]) }}
                                <div class="col-sm-9">
                                {{ Form::select('cus_or_lead', ['customer' => 'Customer', 'lead' => 'Lead'], null, ['placeholder' => 'Customer / Lead...' , "class" => "form-control"]) }}
                                @error("cus_or_lead")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("account or client name","Account / Client Name" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::select('account_name', ['bussiness name' => 'Bussiness Name', 'client name' => 'Client Name', 'lead name' => 'Lead Name'], null, ['placeholder' => 'Account / Client Name...' , "class" => "form-control"]) }}
                                @error("account_name")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-6">
                        <div class="form-group row">
                            {{ Form::label("cus name","Customer Name" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('cus_name', null , ["class" => "form-control"]) }}
                                @error("cus_name")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        </div> --}}
                    </div>
                    <!-- row end -->
    
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("status","Status" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::select('status', ['0' => 'Inactive', '1' => 'Active'], null, ['placeholder' => 'Status...' , "class" => "form-control"]) }}
                                @error("status")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                {{ Form::label("eft","EFT" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::select('eft', ['yes' => 'Yes', 'no' => 'No'], null, ['placeholder' => 'EFT...' , "class" => "form-control"]) }}
                                @error("eft")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->
    
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("customer type","Type of Customer" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::select('cus_type', ['personal' => 'Personal', 'commercial' => 'Commercial', 'both' => 'Both', 'lead' => 'Lead'], null, ['placeholder' => 'Type of Customer...' , "class" => "form-control"]) }}
                                @error("cus_type")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("reffral source","Refferal Source" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::select('refferal_src', ['other client' => 'Other Client',
                                'previous client' => 'Previous Client',
                                'phone' => 'Phone',
                                'walk-in' => 'Walk-in',
                                'website' => 'Website',
                                'social media' => 'Social Media',
                                'other' => 'Other'] , null, ['placeholder' => 'Refferal Source...' , "class" => "form-control"]) }}
                                @error("refferal_src")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->
    

                </div> {{-- card body --}}
            </div> {{-- card close --}}
        </section>
        <!-- <div class="col-12 grid-margin">
            {{ Form::submit('Add Customer',['class' => 'btn btn-primary mr-2 px-4']) }}
          </div> -->
        {{-- customer or lead info section end --}}

    {{-- payment detail start --}}
    <section class="clone my-2">
        <div class="card" id="cloneContainer">
            <div class="card-body">
                <h4 class="card-title">Payment Details</h4>
                <p class="card-description">payment detail Fields</p>
                <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("type of payment","Type of Payment" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::select('pay_type', ['new' => 'New', 'renewal' => 'Renewal','reinstate' => 'Reinstate','rewrite' => 'Rewrite'], null, ['placeholder' => 'Type of Payment...' , "class" => "form-control"]) }}
                                @error("pay_type")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("carrier name","Carrier Name" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('carrier_name', null , ["class" => "form-control"]) }}
                                @error("carrier_name")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("policy number","Policy No." , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('policy_no', null , ["class" => "form-control"]) }}
                                @error("policy_no")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("due amount","Amount Due" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::number('due_amount', null , ["class" => "form-control"]) }}
                                @error("due_amount")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("due date","Due Date" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::date('due_date', "" , ["class" => "form-control"]) }}
                                @error("due_date")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("paid date","Date Paid" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::date('paid_date', "" , ["class" => "form-control"]) }}
                                @error("paid_date")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->
    
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("mode of pay","Mode of Payment" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::select('mode_of_pay', 
                                [
                                    'cash in bank' => 'Cash in Bank',
                                    'cash in office' => 'Cash in Office',
                                    'phone payment' => 'Phone Payment',
                                    'web payment' => 'Web Payment',
                                    'paid to carrier' => 'Paid to Carrier',
                                    'debit card' => 'Debit Card',
                                    'credit card' => 'Credit Card',
                                    'etf' => 'ETF'
                                ]
                                , null, ['placeholder' => 'Mode of Payment...' , "class" => "form-control"]) }}
                                @error("mode_of_pay")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("received by","Received By" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::select('received_by',
                                [
                                    'received by' => 'Received by',
                                    'carrier' => 'Carrier',
                                    'nadia' => 'Nadia',
                                    'kiren' => 'Kiren',
                                    'csr' => 'CSR',
                                ], null, ['placeholder' => 'Received By...' , "class" => "form-control"]) }}
                                @error("received_by")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("new due amount","New Amount Due" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::number('new_due_amount', null , ["class" => "form-control"]) }}
                                @error("new_due_amount")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("new due date","New Due Date" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::date('new_due_date', "" , ["class" => "form-control"]) }}
                                @error("new_due_date")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <!-- {{-- <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("customer id","Customer" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                <select name="customer_id[]" class="form-control">
                                    <option value="">Select customer</option>
                                    @foreach ($customers as $customer)
                                        <option value="{{ $customer->cus_id }}">{{ $customer->name }}</option>
                                    @endforeach
                                </select>
                                @error("customer_id")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div> --}} -->
                    <!-- row end -->
    
                </div> {{-- card body --}}
            </div> {{-- card close --}}
    </section>
    {{-- payment detail end --}}

    {{-- driver detail start --}}
    <section class="clone my-2" id="driverSection">
        <div class="card" id="cloneContainer">
            <div class="card-body">
                <h4 class="card-title">Driver Details</h4>
                <p class="card-description">driver detail Fields</p>
                <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("driver name","Named Driver" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::select('driver_name[]', ['named' => 'Named','rated' => 'Rated', 'excluded' => 'Excluded'], null, ['placeholder' => 'Named Driver...' , "class" => "form-control"]) }}
                                @error("driver_name")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("relationship","Relationship" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::select('relationship[]', [
                                   'self' => 'Self',
                                   'spouse/partner' => 'Spouse / Partner',
                                   'child' => 'Child',
                                   'sibling' => 'Sibling',
                                   'parent' => 'Parent',
                                   'other family' => 'Other Family',
                                   'other than family' => 'Other than Family'
                                ], null, ['placeholder' => 'Relationship...' , "class" => "form-control"]) }}
                                @error("relationship")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("first name","First Name" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('f_name[]', null , ["class" => "form-control"]) }}
                                @error("f_name")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("middle name","Middle Name" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('m_name[]', null , ["class" => "form-control"]) }}
                                @error("m_name")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("last name","Last Name" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('l_name[]', null , ["class" => "form-control"]) }}
                                @error("l_name")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("email","Email" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::email('email[]', null , ["class" => "form-control"]) }}
                                @error("email")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("phone","Phone" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('phone[]', null , ["class" => "form-control"]) }}
                                @error("phone")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("gender","Gender" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::select('gender[]', ['male' => 'Male','female' => 'Female'], null, ['placeholder' => 'Gender...' , "class" => "form-control"]) }}
                                @error("gender")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("date of birth","DOB" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::date('dob[]', null , ["class" => "form-control"]) }}
                                @error("dob")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("ss no","SS #" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('ss_no[]', null , ["class" => "form-control"]) }}
                                @error("ss_no")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("id no","ID #" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('id_no[]', null , ["class" => "form-control"]) }}
                                @error("id_no")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("id type","ID Type" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('id_type[]', null , ["class" => "form-control"]) }}
                                @error("id_type")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("employer or bussiness name","Employer or Business Name" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('emp_or_bsn_name[]', null , ["class" => "form-control"]) }}
                                @error("emp_or_bsn_name")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("type of bussiness or work","Type of Business / Work" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('type_of_bsn_or_work[]', null , ["class" => "form-control"]) }}
                                @error("type_of_bsn_or_work")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("ein if applies","EIN (if applies):" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::number('ein_no[]', null , ["class" => "form-control"]) }}
                                @error("ein_no")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("bussiness or work phone","Business / Work Phone" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::number('bsn_work_phone[]', null , ["class" => "form-control"]) }}
                                @error("bsn_work_phone")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-sm-9" id="values-container">
                                    <button type="button" class="btn btn-sm btn-success p-2 my-2" id="addDriverBtn" onclick="moreDrivers()">Add More Driver Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> {{-- card body --}}
            </div> {{-- card close --}}
    </section>
    {{-- driver detail end --}}

    {{-- address details section start --}}
    <section class="mb-2 clone">
        <div class="card" id="cloneContainer">
            <div class="card-body">
                <h2 class="fw-bold">Address Details</h2>
                <h4 class="card-title">Physical Address</h4>
                <p class="card-description">Physical Address Fields</p>
                <!-- row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                        {{ Form::label("street address","Street Address" , ["class" => "col-sm-3 col-form-label"]) }}
                        <div class="col-sm-9">
                            {{ Form::text('pa_street_address', null , ["class" => "form-control"]) }}
                            @error("pa_street_address")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                        {{ Form::label("city","City" , ["class" => "col-sm-3 col-form-label"]) }}
                        <div class="col-sm-9">
                            {{ Form::text('pa_city', null , ["class" => "form-control"]) }}
                            @error("pa_city")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>
                    </div>
                </div>
                <!-- row end -->

                <!-- row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                        {{ Form::label("country","Country" , ["class" => "col-sm-3 col-form-label"]) }}
                        <div class="col-sm-9">
                            {{ Form::text('pa_country', null , ["class" => "form-control"]) }}
                            @error("pa_country")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                        {{ Form::label("state","State" , ["class" => "col-sm-3 col-form-label"]) }}
                        <div class="col-sm-9">
                            {{ Form::text('pa_state', null , ["class" => "form-control"]) }}
                            @error("pa_state")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>
                    </div>
                </div>
                <!-- row end -->

                <!-- row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                        {{ Form::label("zip code","Zip Code" , ["class" => "col-sm-3 col-form-label"]) }}
                        <div class="col-sm-9">
                            {{ Form::number('pa_zip_code', null , ["class" => "form-control"]) }}
                            @error("pa_zip_code")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                        {{ Form::label("rent or own","Rent or Own" , ["class" => "col-sm-3 col-form-label"]) }}
                        <div class="col-sm-9">
                            {{ Form::select('pa_rent_or_own', ['rent' => 'Rent' , 'own' => 'Own'] , null , ["class" => "form-control" , 'placeholder' => 'Rent or Own...']) }}
                            @error("pa_rent_or_own")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>
                    </div>
                </div>
                <!-- row end -->

                <!-- =================================================== -->
                <h4 class="card-title">Mailing Address</h4>
                <!-- =================================================== -->
                <p class="card-description">Mailing Address Fields</p>
                <!-- row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                        {{ Form::label("street address","Street Address" , ["class" => "col-sm-3 col-form-label"]) }}
                        <div class="col-sm-9">
                            {{ Form::text('ma_street_address', null , ["class" => "form-control"]) }}
                            @error("ma_street_address")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                        {{ Form::label("city","City" , ["class" => "col-sm-3 col-form-label"]) }}
                        <div class="col-sm-9">
                            {{ Form::text('ma_city', null , ["class" => "form-control"]) }}
                            @error("ma_city")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>
                    </div>
                </div>
                <!-- row end -->

                <!-- row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                        {{ Form::label("country","Country" , ["class" => "col-sm-3 col-form-label"]) }}
                        <div class="col-sm-9">
                            {{ Form::text('ma_country', null , ["class" => "form-control"]) }}
                            @error("ma_country")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                        {{ Form::label("state","State" , ["class" => "col-sm-3 col-form-label"]) }}
                        <div class="col-sm-9">
                            {{ Form::text('ma_state', null , ["class" => "form-control"]) }}
                            @error("ma_state")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>
                    </div>
                </div>
                <!-- row end -->

                <!-- row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                        {{ Form::label("zip code","Zip Code" , ["class" => "col-sm-3 col-form-label"]) }}
                        <div class="col-sm-9">
                            {{ Form::number('ma_zip_code', null , ["class" => "form-control"]) }}
                            @error("ma_zip_code")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                        {{ Form::label("rent or own","Rent or Own" , ["class" => "col-sm-3 col-form-label"]) }}
                        <div class="col-sm-9">
                            {{ Form::select('ma_rent_or_own', ['rent' => 'Rent' , 'own' => 'Own'] , null , ["class" => "form-control" , 'placeholder' => 'Rent or Own...']) }}
                            @error("ma_rent_or_own")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>
                    </div>
                </div>
                <!-- row end -->
                <!-- =================================================== -->
                <h4 class="card-title">Work/Business Address</h4>
                <!-- =================================================== -->
                <p class="card-description">Work/Business Address Fields</p>
                <!-- row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                        {{ Form::label("street address","Street Address" , ["class" => "col-sm-3 col-form-label"]) }}
                        <div class="col-sm-9">
                            {{ Form::text('wb_street_address', null , ["class" => "form-control"]) }}
                            @error("wb_street_address")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                        {{ Form::label("city","City" , ["class" => "col-sm-3 col-form-label"]) }}
                        <div class="col-sm-9">
                            {{ Form::text('wb_city', null , ["class" => "form-control"]) }}
                            @error("wb_city")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>
                    </div>
                </div>
                <!-- row end -->

                <!-- row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                        {{ Form::label("country","Country" , ["class" => "col-sm-3 col-form-label"]) }}
                        <div class="col-sm-9">
                            {{ Form::text('wb_country', null , ["class" => "form-control"]) }}
                            @error("wb_country")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                        {{ Form::label("state","State" , ["class" => "col-sm-3 col-form-label"]) }}
                        <div class="col-sm-9">
                            {{ Form::text('wb_state', null , ["class" => "form-control"]) }}
                            @error("wb_state")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>
                    </div>
                </div>
                <!-- row end -->

                <!-- row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                        {{ Form::label("zip code","Zip Code" , ["class" => "col-sm-3 col-form-label"]) }}
                        <div class="col-sm-9">
                            {{ Form::number('wb_zip_code', null , ["class" => "form-control"]) }}
                            @error("wb_zip_code")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                        {{ Form::label("rent or own","Rent or Own" , ["class" => "col-sm-3 col-form-label"]) }}
                        <div class="col-sm-9">
                            {{ Form::select('wb_rent_or_own', ['rent' => 'Rent' , 'own' => 'Own'] , null , ["class" => "form-control" , 'placeholder' => 'Rent or Own...']) }}
                            @error("wb_rent_or_own")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>
                    </div>
                </div>
                <!-- row end -->
                </div> {{-- card body --}}
            </div> {{-- card close --}}
        </section>
        {{-- address details section end --}}

    <!-- ==================== insured items, lien info and premium calculations start ==================== -->
    <section class="clone my-2">
        <div class="card my-2" id="cloneILPContainer">
            <div class="card-body">
                <!-- ========== insured items start =============== -->
                <h4 class="card-title">Insured Items</h4>
                <p class="card-description">insured items Fields</p>
                <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("Insurance company","Insurance Company" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('ins_com', null , ["class" => "form-control"]) }}
                                @error("ins_com")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("policy_no","Policy Number" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('ins_policy_no', null , ["class" => "form-control"]) }}
                                @error("ins_policy_no")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("type","Type" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::select('ins_type', ['1-3 month' => '1-3 month' ,'6-12 month' => '6-12 month'] , null , ["class" => "form-control",'placeholder' => 'Type 1-3-6-12 (Months)']) }}
                                @error("ins_type")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("insurance year","Year" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('ins_year', null , ["class" => "form-control"]) }}
                                @error("ins_year")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("insurance make","Make" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('ins_make', null , ["class" => "form-control"]) }}
                                @error("ins_make")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("insurance model","Model" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('ins_model', null , ["class" => "form-control"]) }}
                                @error("ins_model")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    {{-- row --}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("insurance vin no","VIN Number" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('ins_vin_no', null , ["class" => "form-control"]) }}
                                @error("ins_vin_no")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("liability limit","Liability Limits" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('liability_limit', null , ["class" => "form-control"]) }}
                                @error("liability_limit")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    {{-- row end --}}

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("comp deductible","Comp (OTC) Deductible" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('comp_deductible', null , ["class" => "form-control"]) }}
                                @error("comp_deductible")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("collison deductible","Collision Deductible" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('collison_deductible', null , ["class" => "form-control"]) }}
                                @error("collison_deductible")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("um_uim_bi_limit","UM/UIM BI Limit" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('um_uim_bi_limit', null , ["class" => "form-control"]) }}
                                @error("um_uim_bi_limit")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("um_uim_pd","UM/UIM PD" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('um_uim_pd', null , ["class" => "form-control"]) }}
                                @error("um_uim_pd")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("rent amount","Rental Amount" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::number('rent_amount', null , ["class" => "form-control"]) }}
                                @error("rent_amount")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("towing amount","Towing Amount" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::number('towing_amount', null , ["class" => "form-control"]) }}
                                @error("towing_amount")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("gap","Gap Y/N" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('gap', null , ["class" => "form-control"]) }}
                                @error("gap")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("pip amount","PIP Amount" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::number('pip_amount', null , ["class" => "form-control"]) }}
                                @error("pip_amount")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("med amount","Med Amount" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::number('med_amount', null , ["class" => "form-control"]) }}
                                @error("med_amount")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->
                    <!-- ========== insured items end =============== -->

                    <!-- ========== lien info start =============== -->
                    <h4 class="card-title">Lien Info</h4>
                    <p class="card-description">lien info Fields</p>
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("item number","Item No." , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('lh_item_no', null , ["class" => "form-control"]) }}
                                @error("lh_item_no")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("lein holder account","Lien Account" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('lh_account', null , ["class" => "form-control"]) }}
                                @error("lh_account")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("lein holder address","Lien Holder Address" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('lh_address', null , ["class" => "form-control"]) }}
                                @error("lh_address")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("lein holder city","City" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('lh_city', null , ["class" => "form-control"]) }}
                                @error("lh_city")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("lein holder state","State" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('lh_state', null , ["class" => "form-control"]) }}
                                @error("lh_state")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("lein holder zip","Zip" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('lh_zip', null , ["class" => "form-control"]) }}
                                @error("lh_zip")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("lein holder contact name","Lien Contact Name" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('lh_con_name', null , ["class" => "form-control"]) }}
                                @error("lh_con_name")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("lein holder phone no","Lien Holder Phone" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('lh_phone_no', null , ["class" => "form-control"]) }}
                                @error("lh_phone_no")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row start -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("lein holder email","Lien Holder Email" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::email('lh_email', null , ["class" => "form-control"]) }}
                                @error("lh_email")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->
                    <!-- ========== lien info end =============== -->
                    
                    <!-- ========== premium calculation start =============== -->
                    <h4 class="card-title">Premium Calculation</h4>
                    <p class="card-description">Premium Calculation Fields</p>
                <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("base premium","Base Premium" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('base_premium[]', null , ["class" => "form-control"]) }}
                                @error("base_premium")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("crime prevention fee","Crime Prevention Fee" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::number('crime_prevention_fee[]', null , ["class" => "form-control"]) }}
                                @error("crime_prevention_fee")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("policy fee","Policy Fee" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::number('policy_fee[]', null , ["class" => "form-control"]) }}
                                @error("policy_fee")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("Agency fee","Agency Fee" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::number('agency_fee[]', null , ["class" => "form-control"]) }}
                                @error("agency_fee")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("Other Fees","Other Fees" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::number('other_fees[]', null , ["class" => "form-control"]) }}
                                @error("other_fees")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("total premium","Total Premium" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::number('total_premium[]', null , ["class" => "form-control"]) }}
                                @error("total_premium")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->
                    <!-- ========== premium calculation end =============== -->
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-sm-9" id="values-container">
                                    <button type="button" class="btn btn-sm btn-success p-2 my-2" id="addMore" onclick="moreILP()">Add More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                </div> {{-- card body --}}
            </div> {{-- card close --}}
    </section>
    <!-- ==================== insured items, lien info and premium calculations start ==================== -->

    {{-- dates and amount section sart --}}
    <section class="mb-2 clone">
        <div class="card" id="cloneContainer">
            <div class="card-body">
                <h4 class="card-title">Dates & Amount</h4>
                <p class="card-description">Dates & Amount Info Fields</p>
                <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                {{ Form::label("effective date","Effective Date" , ["class" => "col-sm-3 col-form-label"]) }}
                                <div class="col-sm-9">
                                {{ Form::date('effective_date', "" , ["class" => "form-control"]) }}
                                @error("effective_date")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                {{ Form::label("expiry date","Exp Date" , ["class" => "col-sm-3 col-form-label"]) }}
                                <div class="col-sm-9">
                                {{ Form::date('expiry_date', "" , ["class" => "form-control"]) }}
                                @error("expiry_date")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->
    
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                {{ Form::label("reminder date","Reminder Date" , ["class" => "col-sm-3 col-form-label"]) }}
                                <div class="col-sm-9">
                                {{ Form::date('reminder_date', "" , ["class" => "form-control"]) }}
                                @error("reminder_date")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                {{ Form::label("cancellation notice date","Cancellation Notice Date" , ["class" => "col-sm-3 col-form-label"]) }}
                                <div class="col-sm-9">
                                {{ Form::date('canc_notice_date', "" , ["class" => "form-control"]) }}
                                @error("canc_notice_date")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                {{ Form::label("due date","Due Date" , ["class" => "col-sm-3 col-form-label"]) }}
                                <div class="col-sm-9">
                                {{ Form::date('da_due_date', "" , ["class" => "form-control"]) }}
                                @error("da_due_date")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                {{ Form::label("date paid","Date Paid" , ["class" => "col-sm-3 col-form-label"]) }}
                                <div class="col-sm-9">
                                {{ Form::date('da_date_paid', "" , ["class" => "form-control"]) }}
                                @error("da_date_paid")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                {{ Form::label("next amount due","Next Amount Due" , ["class" => "col-sm-3 col-form-label"]) }}
                                <div class="col-sm-9">
                                {{ Form::number('next_amount_due', "" , ["class" => "form-control"]) }}
                                @error("next_amount_due")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                {{ Form::label("new amount due","New Amount Due" , ["class" => "col-sm-3 col-form-label"]) }}
                                <div class="col-sm-9">
                                {{ Form::number('new_amount_due', "" , ["class" => "form-control"]) }}
                                @error("new_amount_due")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->
    
                </div> {{-- card body --}}
            </div> {{-- card close --}}
        </section>
        {{-- dates and amount section end --}}

    <div class="col-12 grid-margin">
      {{ Form::submit($btnText,['class' => 'btn btn-primary mr-2 px-4']) }}
    </div>

      {{ Form::close() }}

          {{-- script tag start --}}
          {{-- <script>
                function cloneFields() { 
                  let clone = document.getElementById("cloneContainer");
                  let appendClone = document.getElementById("appendClone");
                  const cloned = clone.cloneNode(true);
                  appendClone.insertAdjacentElement("beforeend",cloned);
              }
          </script> --}}
          {{-- script tag close --}}

          <script>
              function moreDrivers(){
                  var driverSectionCloning = document.getElementById("driverSection");
                  var cloned = driverSectionCloning.cloneNode(true);
                //   console.log(cloned.querySelectorAll('input').forEach(function (e){
                //     console.log(e.getAttribute("name"));
                //   }));
                  driverSectionCloning.insertAdjacentElement("afterend",cloned);
                }
              function moreILP(){
                  var premiumSectionCloning = document.getElementById("cloneILPContainer");
                  var cloned = premiumSectionCloning.cloneNode(true);
                  premiumSectionCloning.insertAdjacentElement("afterend",cloned);
                }
            //   function morePremiums(){
            //       var premiumSectionCloning = document.getElementById("primiumCalculations");
            //       var cloned = premiumSectionCloning.cloneNode(true);
            //       premiumSectionCloning.insertAdjacentElement("afterend",cloned);
            //     }
          </script>


</div> {{-- grid margin close --}}
@endsection