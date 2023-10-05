@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">

    <!-- {{-- {{ Form::open([ 'url' => $url, 'method' => $method ]) }}
    @method($method)
        <input type="hidden" name="form_type" value="customer_form">

        {{ Form::close() }} --}} -->

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
                                {{ Form::label("info type","Info Type" , ["class" => "col-sm-3 col-form-label"]) }}
                                <div class="col-sm-9">
                                    {{ Form::select('cus_or_lead', ['customer' => 'Customer', 'lead' => 'Lead'], isset($customer->cus_or_lead) ? $customer->cus_or_lead : old('cus_or_lead',$customer->cus_or_lead) , ['placeholder' => 'Pick a info type...' , "class" => "form-control"]) }}
                                    @error("cus_or_lead")
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                {{ Form::label("cus name","Customer Name" , ["class" => "col-sm-3 col-form-label"]) }}
                                <div class="col-sm-9">
                                    {{ Form::text('cus_name', old('cus_name',$customer->name) , ["class" => "form-control"]) }}
                                    @error("cus_name")
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
                                {{ Form::label("eft","EFT" , ["class" => "col-sm-3 col-form-label"]) }}
                                <div class="col-sm-9">
                                    {{ Form::select('eft', ['yes' => 'Yes', 'no' => 'No'], $customer->eft , ['placeholder' => 'Pick a eft...' , "class" => "form-control"]) }}
                                    @error("eft")
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                {{ Form::label("cus type","Customer Type" , ["class" => "col-sm-3 col-form-label"]) }}
                                <div class="col-sm-9">
                                    {{ Form::select('cus_type', ['personal' => 'Personal', 'commercial' => 'Commercial', 'both' => 'Both', 'lead' => 'Lead'], $customer->cus_type , ['placeholder' => 'Pick a customer type...' , "class" => "form-control"]) }}
                                    @error("cus_type")
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
                                {{ Form::label("reffral source","Refferal Source" , ["class" => "col-sm-3 col-form-label"]) }}
                                <div class="col-sm-9">
                                    {{ Form::text('refferal_src', $customer->referral_src , ["class" => "form-control"]) }}
                                    @error("refferal_src")
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                {{ Form::label("status","Status" , ["class" => "col-sm-3 col-form-label"]) }}
                                <div class="col-sm-9">
                                    {{ Form::select('status', ['0' => 'Inactive', '1' => 'Active'], $customer->status, ['placeholder' => 'Pick a status...' , "class" => "form-control"]) }}
                                    @error("status")
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
                                {{ Form::label("account name","Account Name" , ["class" => "col-sm-3 col-form-label"]) }}
                                <div class="col-sm-9">
                                    {{ Form::select('account_name', ['bussiness' => 'Bussiness', 'client' => 'Client', 'lead' => 'Lead'], $customer->account_name, ['placeholder' => 'Pick a account name...' , "class" => "form-control"]) }}
                                    @error("account_name")
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
                            {{ Form::label("type of payment","Payment Type" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::select('pay_type', ['new' => 'New', 'renewal' => 'Renewal','reinstate' => 'Reinstate','rewrite' => 'Rewrite'], $paymentDetail->typ_of_pay, ['placeholder' => 'Pick a payment type...' , "class" => "form-control"]) }}
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
                                {{ Form::text('carrier_name', $paymentDetail->carrier_name , ["class" => "form-control"]) }}
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
                            {{ Form::label("policy number","Policy No" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('policy_no', $paymentDetail->policy_num , ["class" => "form-control"]) }}
                                @error("policy_no")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("due amount","Due Amount" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::number('due_amount', $paymentDetail->due_amount , ["class" => "form-control"]) }}
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
                                {{ Form::date('due_date', $paymentDetail->due_date , ["class" => "form-control"]) }}
                                @error("due_date")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("paid date","Paid Date" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::date('paid_date', $paymentDetail->paid_date , ["class" => "form-control"]) }}
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
                            {{ Form::label("mode of pay","Mode of Pay" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::select('mode_of_pay', 
                                [
                                    'cash in bank' => 'Cash in Bank',
                                    'phone payment' => 'Phone Payment',
                                    'web payment' => 'Web Payment',
                                    'paid to carrier' => 'Paid to Carrier',
                                    'debit card' => 'Debit Card',
                                    'credit card' => 'Credit Card',
                                    'etf' => 'ETF'
                                ]
                                , $paymentDetail->mode_of_pay, ['placeholder' => 'Pick a mode of pay...' , "class" => "form-control"]) }}
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
                                ], $paymentDetail->received_by, ['placeholder' => 'Pick a received by...' , "class" => "form-control"]) }}
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
                            {{ Form::label("new due date","New Due Date" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::date('new_due_date', $paymentDetail->new_due_date , ["class" => "form-control"]) }}
                                @error("new_due_date")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("new due amount","New Due Amount" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::number('new_due_amount', $paymentDetail->new_due_amount , ["class" => "form-control"]) }}
                                @error("new_due_amount")
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
    {{-- payment detail end --}}

    {{-- driver detail start --}}

    @foreach ($driverDetail as $driverDetail)
    <section class="clone my-2" id="driverSection">
        <div class="card" id="cloneContainer">
            <div class="card-body">
                <h4 class="card-title">Driver Details</h4>
                <p class="card-description">driver detail Fields</p>
                <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("driver name","Driver Name" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::select('driver_name[]', ['named' => 'Named','rated' => 'Rated', 'excluded' => 'Excluded'], $driverDetail->driver_name, ['placeholder' => 'Pick a driver name...' , "class" => "form-control"]) }}
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
                                ], $driverDetail->relationship, ['placeholder' => 'Pick a relationship...' , "class" => "form-control"]) }}
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
                                {{ Form::text('f_name[]', isset($driverDetail->f_name) ? $driverDetail->f_name : old('f_name')  , ["class" => "form-control"]) }}
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
                                {{ Form::text('m_name[]',isset( $driverDetail->m_name) ? $driverDetail->m_name : old('m_name') , ["class" => "form-control"]) }}
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
                                {{ Form::text('l_name[]', isset($driverDetail->l_name) ? $driverDetail->l_name : old('l_name')  , ["class" => "form-control"]) }}
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
                                {{ Form::email('email[]', isset($driverDetail->email) ? $driverDetail->email : old('email')  , ["class" => "form-control"]) }}
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
                                {{ Form::text('phone[]', isset( $driverDetail->phone) ? $driverDetail->phone : old('phone') , ["class" => "form-control"]) }}
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
                                {{ Form::select('gender[]', ['male' => 'Male','female' => 'Female'], isset( $driverDetail->gender) ? $driverDetail->gender : old('gender'), ['placeholder' => 'pick a gender...' , "class" => "form-control"]) }}
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
                            {{ Form::label("date of birth","dob" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::date('dob[]', isset( $driverDetail->dob) ? $driverDetail->dob : old('dob') , ["class" => "form-control"]) }}
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
                                {{ Form::text('ss_no[]', isset( $driverDetail->ss_no) ? $driverDetail->ss_no : old('ss_no') , ["class" => "form-control"]) }}
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
                            {{ Form::label("id no","Id #" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('id_no[]', isset( $driverDetail->id_no) ? $driverDetail->id_no : old('id_no') , ["class" => "form-control"]) }}
                                @error("id_no")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("id type","Id Type" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('id_type[]', isset( $driverDetail->id_type) ? $driverDetail->id_type : old('id_type') , ["class" => "form-control"]) }}
                                @error("id_type")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    <!-- row
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-sm-9" id="values-container">
                                    <button type="button" class="btn btn-sm btn-success p-2 my-2" id="addDriverBtn" onclick="moreDrivers()">Add More Driver Details</button>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div> {{-- card body --}}
            </div> {{-- card close --}}
    </section>
    {{-- driver detail end --}}
    @endforeach

    {{-- customer other detail start --}}
    <section class="clone my-2">
        <div class="card" id="cloneContainer">
            <div class="card-body">
                <h4 class="card-title">Customer Other Details</h4>
                <p class="card-description">customer other detail Fields</p>
                <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("physical address","Physical Address" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('phy_address', isset($customerOtherDetail->phy_address) ? $customerOtherDetail->phy_address : old('phy_address') , ["class" => "form-control"]) }}
                                @error("phy_address")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("city","City" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('city', isset($customerOtherDetail->city) ? $customerOtherDetail->city : old('city') , ["class" => "form-control"]) }}
                                @error("city")
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
                                {{ Form::text('country', isset($customerOtherDetail->country) ? $customerOtherDetail->country : old('country') , ["class" => "form-control"]) }}
                                @error("country")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("state","State" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('state', isset($customerOtherDetail->state) ? $customerOtherDetail->state : old('state') , ["class" => "form-control"]) }}
                                @error("state")
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
                                {{ Form::text('zip_code', isset($customerOtherDetail->zip_code) ? $customerOtherDetail->zip_code : old('zip_code') , ["class" => "form-control"]) }}
                                @error("zip_code")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("employee or bussiness name","Employee / Bussiness Name" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('emp_or_bsn_name', isset($customerOtherDetail->emp_or_bsn_name) ? $customerOtherDetail->emp_or_bsn_name : old('emp_or_bsn_name') , ["class" => "form-control"]) }}
                                @error("emp_or_bsn_name")
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
                            {{ Form::label("type of bussiness or work","Type of Bussiness / Work" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('type_of_bsn_or_work', isset($customerOtherDetail->type_of_bsn_or_work) ? $customerOtherDetail->type_of_bsn_or_work : old('type_of_bsn_or_work') , ["class" => "form-control"]) }}
                                @error("type_of_bsn_or_work")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("rent or own","Rent / Own" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('rent_or_own', isset($customerOtherDetail->rent_or_own) ? $customerOtherDetail->rent_or_own : old('rent_or_own') , ["class" => "form-control"]) }}
                                @error("rent_or_own")
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
                            {{ Form::label("mailing address","Mailing Address" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('mailing_addr', isset($customerOtherDetail->mailing_addr) ? $customerOtherDetail->mailing_addr : old('mailing_addr') , ["class" => "form-control"]) }}
                                @error("mailing_addr")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("ein no","EIN #" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('ein_no', isset($customerOtherDetail->ein_no) ? $customerOtherDetail->ein_no : old('ein_no') , ["class" => "form-control"]) }}
                                @error("ein_no")
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
                            {{ Form::label("bsn_or_work_phone","Bussiness / Work Phone" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('bsn_or_work_phone', isset($customerOtherDetail->bsn_or_work_phone) ? $customerOtherDetail->bsn_or_work_phone : old('bsn_or_work_phone') , ["class" => "form-control"]) }}
                                @error("bsn_or_work_phone")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("bussiness website","Bussiness Website" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('bsn_web', isset($customerOtherDetail->bsn_web) ? $customerOtherDetail->bsn_web : old('bsn_web') , ["class" => "form-control"]) }}
                                @error("bsn_web")
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
                            {{ Form::label("bussiness address","Bussiness Address" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('bsn_addr', isset($customerOtherDetail->bsn_addr) ? $customerOtherDetail->bsn_addr : old('bsn_addr') , ["class" => "form-control"]) }}
                                @error("bsn_addr")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
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
                        </div> --}}
                    </div>
                    <!-- row end -->
                </div> {{-- card body --}}
            </div> {{-- card close --}}
    </section>
    {{-- customer other detail end --}}

    {{-- insured items start --}}
    <section class="clone my-2">
        <div class="card" id="cloneContainer">
            <div class="card-body">
                <h4 class="card-title">Insured Items</h4>
                <p class="card-description">insured items Fields</p>
                <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("Insurance company","Insurance Company" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('ins_com', old('ins_com',$insuredItem->ins_com) , ["class" => "form-control"]) }}
                                @error("ins_com")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("policy_no","Policy #" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('ins_policy_no', old('ins_policy_no',$insuredItem->policy_no) , ["class" => "form-control"]) }}
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
                                {{ Form::select('type', ['1-3 month' => '1-3 month' ,'6-12 month' => '6-12 month'] , old('type',$insuredItem->type) , ["class" => "form-control"]) }}
                                @error("type")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("lein holder name","Lein Holder Name" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('lh_name', isset($insuredItem->lh_name) ? $insuredItem->lh_name : old('lh_name') , ["class" => "form-control"]) }}
                                @error("lh_name")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div> -->
                    </div>
                    <!-- row end -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("lein holder account","Lein Holder Account" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('lh_account', isset($insuredItem->lh_account) ? $insuredItem->lh_account : old('lh_account') , ["class" => "form-control"]) }}
                                @error("lh_account")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("lein holder address","Lein Holder Address" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('lh_addr', old('lh_addr',$lienInfo->addresss) , ["class" => "form-control"]) }}
                                @error("lh_addr")
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
                            {{ Form::label("lein holder city","Lein Holder City" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('ins_city', old('ins_city',$insuredItem->city) , ["class" => "form-control"]) }}
                                @error("ins_city")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("lein holder state","Lein Holder State" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('ins_state', old('ins_state',$insuredItem->state) , ["class" => "form-control"]) }}
                                @error("ins_state")
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
                            {{ Form::label("lein holder zip","Lein Holder Zip Code" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('lh_zip', old('lh_zip',$lienInfo->zip) , ["class" => "form-control"]) }}
                                @error("lh_zip")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("lein holder contact name","Lein Holder Contact Name" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('lh_con_name', old('lh_con_name',$insuredItem->contact_name) , ["class" => "form-control"]) }}
                                @error("lh_con_name")
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
                            {{ Form::label("lein holder phone no","Lein Holder Phone #" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('lh_phone_no', isset($insuredItem->lh_phone_no) ? $insuredItem->lh_phone_no : old('lh_phone_no') , ["class" => "form-control"]) }}
                                @error("lh_phone_no")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("lein holder email","Lein Holder Email" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::email('lh_email', isset($insuredItem->lh_email) ? $insuredItem->lh_email : old('lh_email') , ["class" => "form-control"]) }}
                                @error("lh_email")
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
                            {{ Form::label("lein holder year","Year" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('lh_year', isset($insuredItem->lh_year) ? $insuredItem->lh_year : old('lh_year') , ["class" => "form-control"]) }}
                                @error("lh_year")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("lein holder make","Make" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('lh_make', isset($insuredItem->lh_make) ? $insuredItem->lh_make : old('lh_make') , ["class" => "form-control"]) }}
                                @error("lh_make")
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
                            {{ Form::label("lein holder model","Lein Holder Model" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('lh_model', isset($insuredItem->lh_model) ? $insuredItem->lh_model : old('lh_model') , ["class" => "form-control"]) }}
                                @error("lh_model")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("lein holder vin no","VIN #" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('lh_vin_no', isset($insuredItem->lh_vin_no) ? $insuredItem->lh_vin_no : old('lh_vin_no') , ["class" => "form-control"]) }}
                                @error("lh_vin_no")
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
                            {{ Form::label("liability limit","Liability Limit" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('liability_limit', isset($insuredItem->liability_limit) ? $insuredItem->liability_limit : old('liability_limit') , ["class" => "form-control"]) }}
                                @error("liability_limit")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("comp deductible","Comp Deductibl" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('comp_deductible', isset($insuredItem->comp_deductible) ? $insuredItem->comp_deductible : old('comp_deductible') , ["class" => "form-control"]) }}
                                @error("comp_deductible")
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
                            {{ Form::label("collison deductible","Collision Deductible" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('collison_deductible', isset($insuredItem->collison_deductible) ? $insuredItem->collison_deductible : old('collison_deductible') , ["class" => "form-control"]) }}
                                @error("collison_deductible")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("um_uim_bi_deduct","UM/UIM PD" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('um_uim_bi_deduct', isset($insuredItem->um_uim_bi_deduct) ? $insuredItem->um_uim_bi_deduct : old('um_uim_bi_deduct') , ["class" => "form-control"]) }}
                                @error("um_uim_bi_deduct")
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
                            {{ Form::label("um_uim_pd","UM/UIM PD" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('um_uim_pd', isset($insuredItem->um_uim_pd) ? $insuredItem->um_uim_pd : old('um_uim_pd') , ["class" => "form-control"]) }}
                                @error("um_uim_pd")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("rent amount","Rent Amount" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::number('rent_amount', isset($insuredItem->rent_amount) ? $insuredItem->rent_amount : old('rent_amount') , ["class" => "form-control"]) }}
                                @error("rent_amount")
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
                            {{ Form::label("towing amount","Towing Amount" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::number('towing_amount', isset($insuredItem->towing_amount) ? $insuredItem->towing_amount : old('towing_amount') , ["class" => "form-control"]) }}
                                @error("towing_amount")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("gap","Gap" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('gap', isset($insuredItem->gap) ? $insuredItem->gap : old('gap') , ["class" => "form-control"]) }}
                                @error("gap")
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
                            {{ Form::label("pip amount","PIP Amount" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::number('pip_amount', isset($insuredItem->pip_amount) ? $insuredItem->pip_amount : old('pip_amount') , ["class" => "form-control"]) }}
                                @error("pip_amount")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("med amount","MED Amount" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::number('med_amount', isset($insuredItem->med_amount) ? $insuredItem->med_amount : old('med_amount') , ["class" => "form-control"]) }}
                                @error("med_amount")
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
    {{-- insured items end --}}

    {{-- premium calculation section sart --}}
    @foreach($premiumCalculation as $premiumCalculation)
    <section class="mb-2 clone" id="primiumCalculations">
        <div class="card" id="cloneContainer">
            <div class="card-body">
                <h4 class="card-title">Premium Calculation</h4>
                <p class="card-description">Premium Calculation Fields</p>
                <!-- row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("base premium","Base Premium" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::text('base_premium[]', isset($premiumCalculation->base_premium) ? $premiumCalculation->base_premium : old('base_premium[]') , ["class" => "form-control"]) }}
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
                                {{ Form::number('crime_prevention_fee[]', isset($premiumCalculation->crime_prevention_fee) ? $premiumCalculation->crime_prevention_fee : old('crime_prevention_fee[]') , ["class" => "form-control"]) }}
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
                                {{ Form::number('policy_fee[]', isset($premiumCalculation->policy_fee) ? $premiumCalculation->policy_fee : old('policy_fee[]') , ["class" => "form-control"]) }}
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
                                {{ Form::number('agency_fee[]', isset($premiumCalculation->agency_fee) ? $premiumCalculation->agency_fee : old('agency_fee[]') , ["class" => "form-control"]) }}
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
                            {{ Form::label("total premium","Total Premium" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::number('total_premium[]', isset($premiumCalculation->total_premium) ? $premiumCalculation->total_premium : old('total_premium[]') , ["class" => "form-control"]) }}
                                @error("total_premium")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("expiry date","Expiray Date" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::date('exp_date[]', isset($premiumCalculation->exp_date) ? $premiumCalculation->exp_date : old('exp_date[]') , ["class" => "form-control"]) }}
                                @error("exp_date")
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
                                {{ Form::date('reminder_date[]', isset($premiumCalculation->reminder_date) ? $premiumCalculation->reminder_date : old('reminder_date[]') , ["class" => "form-control"]) }}
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
                                {{ Form::date('canc_notice_date[]', isset($premiumCalculation->canc_notice_date) ? $premiumCalculation->canc_notice_date : old('canc_notice_date[]') , ["class" => "form-control"]) }}
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
                                {{ Form::date('pre_due_date[]', isset($premiumCalculation->due_date) ? $premiumCalculation->due_date : old('pre_due_date[]') , ["class" => "form-control"]) }}
                                @error("pre_due_date")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("next amount due","Next Amount Due" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::number('next_amount_due[]', isset($premiumCalculation->next_amount_due) ? $premiumCalculation->next_amount_due : old('next_amount_due[]') , ["class" => "form-control"]) }}
                                @error("next_amount_due")
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
                            {{ Form::label("paid date","Paid Date" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::date('pre_paid_date[]', isset($premiumCalculation->paid_date) ? $premiumCalculation->paid_date : old('pre_paid_date[]') , ["class" => "form-control"]) }}
                                @error("pre_paid_date")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            {{ Form::label("new amount due","New Amount Due" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::number('new_amount_due[]', isset($premiumCalculation->new_amount_due) ? $premiumCalculation->new_amount_due : old('new_amount_due[]') , ["class" => "form-control"]) }}
                                @error("new_amount_due")
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
                            {{ Form::label("new due date","New Due Date" , ["class" => "col-sm-3 col-form-label"]) }}
                            <div class="col-sm-9">
                                {{ Form::date('pre_new_due_date[]', isset($premiumCalculation->new_due_date) ? $premiumCalculation->new_due_date : old('pre_new_due_date[]') , ["class" => "form-control"]) }}
                                @error("pre_new_due_date")
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
        @endforeach
        {{-- premium calculation section end --}}

    <div class="col-12 grid-margin">
      {{ Form::submit($btnText,['class' => 'btn btn-primary mr-2 px-4']) }}
    </div>

      {{ Form::close() }}

          <script>
              function moreDrivers(){
                  var driverSectionCloning = document.getElementById("driverSection");
                  var cloned = driverSectionCloning.cloneNode(true);
                  driverSectionCloning.insertAdjacentElement("afterend",cloned);
                }
              function morePremiums(){
                  var premiumSectionCloning = document.getElementById("primiumCalculations");
                  var cloned = premiumSectionCloning.cloneNode(true);
                  premiumSectionCloning.insertAdjacentElement("afterend",cloned);
                }
          </script>


</div> {{-- grid margin close --}}
@endsection