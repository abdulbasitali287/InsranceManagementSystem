@extends('admin_frontend.master')
@section('content')
<div class="content-wrapper">

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Customer Detail List</h4>
        <p class="card-description">  <code></code>
        </p>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
                <tr>
                    <th><h6>CusOrLead</h6></th>
                    <th><h6>Account Name</h6></th>
                    <th><h6>EFT</h6></th>
                    <th><h6>Type</h6></th>
                    <th><h6>Referral Source</h6></th>
                    <th><h6>Status</h6></th>
                    <th><h6>Action</h6></th>
                </tr>
            </thead>
            <tbody>
                @if ($customer)
                    <tr>
                        <td>{{ $customer->cus_or_lead }}</td>
                        <td>{{ $customer->account_name }}</td>
                        <td>{{ $customer->eft }}</td>
                        <td>{{ $customer->cus_type }}</td>
                        <td>{{ $customer->referral_src }}</td>
                        <td>{!! $customer->status == 1 ? '<span class="btn btn-success">Active</span>' : '<span class="btn btn-danger">Inactive</span>' !!}</td>
                        <td>
                          <a href="{{ route('customer.edit',$customer->cus_id) }}" class="btn btn-sm btn-info px-2">Edit</a>
                        </td>
                    </tr>
                @else
                    <tr>
                        <td colspan="13">No customer details available.</td>
                    </tr>
                @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Payment Detail List</h4>
        <p class="card-description">  <code></code>
        </p>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
                <tr>
                    <th><h6>Type of Payment</h6></th>
                    <th><h6>Carrier Name</h6></th>
                    <th><h6>Policy No.</h6></th>
                    <th><h6>Amount Due</h6></th>
                    <th><h6>Due Date</h6></th>
                    <th><h6>Date Paid</h6></th>
                    <th><h6>Mode of Payment</h6></th>
                    <th><h6>Received By</h6></th>
                    <th><h6>New Amount Due</h6></th>
                    <th><h6>New Due Date</h6></th>
                    <th><h6>Customer Id</h6></th>
                    <th><h6>Action</h6></th>
                </tr>
            </thead>
            <tbody>
                @if ($paymentDetail)
                  @foreach ($paymentDetail as $paymentDetail)
                    <tr>
                        <td>{{ $paymentDetail->typ_of_pay }}</td>
                        <td>{{ $paymentDetail->carrier_name }}</td>
                        <td>{{ $paymentDetail->policy_num }}</td>
                        <td>{{ $paymentDetail->due_amount }}</td>
                        <td>{{ $paymentDetail->due_date }}</td>
                        <td>{{ $paymentDetail->paid_date }}</td>
                        <td>{{ $paymentDetail->mode_of_pay }}</td>
                        <td>{{ $paymentDetail->received_by }}</td>
                        <td>{{ $paymentDetail->new_due_amount }}</td>
                        <td>{{ $paymentDetail->new_due_date }}</td>
                        <td>{{ $paymentDetail->customer_id }}</td>
                        <td>
                          <a href="{{ route('customer.edit',$paymentDetail->id) }}" class="btn btn-sm btn-info px-2">Edit</a>
                        </td>
                    </tr>
                  @endforeach
                @else
                    <tr>
                        <td colspan="13">No payment details available.</td>
                    </tr>
                @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Driver Details List</h4>
        <p class="card-description">  <code></code>
        </p>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
                <tr>
                    <th><h6>Named Driver</h6></th>
                    <th><h6>Relationship</h6></th>
                    <th><h6>First Name</h6></th>
                    <th><h6>Middle Name</h6></th>
                    <th><h6>Last Name</h6></th>
                    <th><h6>Email</h6></th>
                    <th><h6>Phone</h6></th>
                    <th><h6>Gender</h6></th>
                    <th><h6>DOB</h6></th>
                    <th><h6>SS #</h6></th>
                    <th><h6>ID #</h6></th>
                    <th><h6>ID Type</h6></th>
                    <th><h6>Employer or Business Name</h6></th>
                    <th><h6>Type of Business / Work</h6></th>
                    <th><h6>EIN (if applies):</h6></th>
                    <th><h6>Business / Work Phone</h6></th>
                    <th><h6>Customer Id</h6></th>
                    <th><h6>Action</h6></th>
                </tr>
            </thead>
            <tbody>
                @if ($driverDetail)
                  @foreach ($driverDetail as $driverDetail)
                    <tr>
                        <td>{{ $driverDetail->driver_name }}</td>
                        <td>{{ $driverDetail->relationship }}</td>
                        <td>{{ $driverDetail->f_name }}</td>
                        <td>{{ $driverDetail->m_name }}</td>
                        <td>{{ $driverDetail->l_name }}</td>
                        <td>{{ $driverDetail->email }}</td>
                        <td>{{ $driverDetail->phone }}</td>
                        <td>{{ $driverDetail->gender }}</td>
                        <td>{{ $driverDetail->dob }}</td>
                        <td>{{ $driverDetail->ss_no }}</td>
                        <td>{{ $driverDetail->id_no }}</td>
                        <td>{{ $driverDetail->id_type }}</td>
                        <td>{{ $driverDetail->employer_or_bsn_name }}</td>
                        <td>{{ $driverDetail->type_of_bsn_or_work }}</td>
                        <td>{{ $driverDetail->ein }}</td>
                        <td>{{ $driverDetail->bsn_or_work_phone }}</td>
                        <td>{{ $driverDetail->customer_id }}</td>
                        <td>
                          <a href="{{ route('customer.edit',$driverDetail->id) }}" class="btn btn-sm btn-info px-2">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="13">No driver details available.</td>
                    </tr>
                @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Physical Address Details List</h4>
        <p class="card-description">  <code></code>
        </p>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
                <tr>
                    <th><h6>Street Address</h6></th>
                    <th><h6>City</h6></th>
                    <th><h6>Country</h6></th>
                    <th><h6>State</h6></th>
                    <th><h6>Zip Code</h6></th>
                    <th><h6>Rent or Own</h6></th>
                    <th><h6>Customer Id</h6></th>
                    <th><h6>Action</h6></th>
                </tr>
            </thead>
            <tbody>
                @if ($physicalAddress)
                  @foreach ($physicalAddress as $physicalAddress)
                    <tr>
                        <td>{{ $physicalAddress->pa_street_address }}</td>
                        <td>{{ $physicalAddress->pa_city }}</td>
                        <td>{{ $physicalAddress->pa_country }}</td>
                        <td>{{ $physicalAddress->pa_state }}</td>
                        <td>{{ $physicalAddress->pa_zip_code }}</td>
                        <td>{{ $physicalAddress->pa_rent_or_own }}</td>
                        <td>{{ $physicalAddress->customer_id }}</td>
                        <td>
                          <a href="{{ route('customer.edit',$physicalAddress->id) }}" class="btn btn-sm btn-info px-2">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="13">No driver details available.</td>
                    </tr>
                @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Mailing Address Details List</h4>
        <p class="card-description">  <code></code>
        </p>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
                <tr>
                    <th><h6>Street Address</h6></th>
                    <th><h6>City</h6></th>
                    <th><h6>Country</h6></th>
                    <th><h6>State</h6></th>
                    <th><h6>Zip Code</h6></th>
                    <th><h6>Rent or Own</h6></th>
                    <th><h6>Customer Id</h6></th>
                    <th><h6>Action</h6></th>
                </tr>
            </thead>
            <tbody>
                @if ($mailingAddress)
                  @foreach ($mailingAddress as $mailingAddress)
                    <tr>
                        <td>{{ $mailingAddress->ma_street_address }}</td>
                        <td>{{ $mailingAddress->ma_city }}</td>
                        <td>{{ $mailingAddress->ma_country }}</td>
                        <td>{{ $mailingAddress->ma_state }}</td>
                        <td>{{ $mailingAddress->ma_zip_code }}</td>
                        <td>{{ $mailingAddress->ma_rent_or_own }}</td>
                        <td>{{ $mailingAddress->customer_id }}</td>
                        <td>
                          <a href="{{ route('customer.edit',$mailingAddress->id) }}" class="btn btn-sm btn-info px-2">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="13">No driver details available.</td>
                    </tr>
                @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Work/Business Address Details List</h4>
        <p class="card-description">  <code></code>
        </p>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
                <tr>
                    <th><h6>Street Address</h6></th>
                    <th><h6>City</h6></th>
                    <th><h6>Country</h6></th>
                    <th><h6>State</h6></th>
                    <th><h6>Zip Code</h6></th>
                    <th><h6>Rent or Own</h6></th>
                    <th><h6>Customer Id</h6></th>
                    <th><h6>Action</h6></th>
                </tr>
            </thead>
            <tbody>
                @if ($workBussinessAddress)
                  @foreach ($workBussinessAddress as $workBussinessAddress)
                    <tr>
                        <td>{{ $workBussinessAddress->wb_street_address }}</td>
                        <td>{{ $workBussinessAddress->wb_city }}</td>
                        <td>{{ $workBussinessAddress->wb_country }}</td>
                        <td>{{ $workBussinessAddress->wb_state }}</td>
                        <td>{{ $workBussinessAddress->wb_zip_code }}</td>
                        <td>{{ $workBussinessAddress->wb_rent_or_own }}</td>
                        <td>{{ $workBussinessAddress->customer_id }}</td>
                        <td>
                          <a href="{{ route('customer.edit',$workBussinessAddress->id) }}" class="btn btn-sm btn-info px-2">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="13">No driver details available.</td>
                    </tr>
                @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
      <div class="card-body">
        <h4 class="card-title">Insured Item Details List</h4>
        <p class="card-description">  <code></code>
        </p>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
                <tr>
                    <th><h6>Insurance Company</h6></th>
                    <th><h6>Policy Number</h6></th>
                    <th><h6>Type</h6></th>
                    <th><h6>Year</h6></th>
                    <th><h6>Make</h6></th>
                    <th><h6>Model</h6></th>
                    <th><h6>VIN Number</h6></th>
                    <th><h6>Liability Limits</h6></th>
                    <th><h6>Comp (OTC) Deductible</h6></th>
                    <th><h6>Collision Deductible</h6></th>
                    <th><h6>UM/UIM BI Limit</h6></th>
                    <th><h6>UM/UIM PD</h6></th>
                    <th><h6>Rental Amount</h6></th>
                    <th><h6>Towing Amount</h6></th>
                    <th><h6>Gap Y/N</h6></th>
                    <th><h6>PIP Amount</h6></th>
                    <th><h6>Med Amount</h6></th>
                    <th><h6>Customer Id</h6></th>
                    <th><h6>Action</h6></th>
                </tr>
            </thead>
            <tbody>
                @if ($insuredItem)
                  @foreach ($insuredItem as $insuredItem)
                    <tr>
                        <td>{{ $insuredItem->ins_com }}</td>
                        <td>{{ $insuredItem->policy_no }}</td>
                        <td>{{ $insuredItem->type }}</td>
                        <td>{{ $insuredItem->year }}</td>
                        <td>{{ $insuredItem->make }}</td>
                        <td>{{ $insuredItem->model }}</td>
                        <td>{{ $insuredItem->vin_no }}</td>
                        <td>{{ $insuredItem->liability_limit }}</td>
                        <td>{{ $insuredItem->comp_deductible }}</td>
                        <td>{{ $insuredItem->collison_deductible }}</td>
                        <td>{{ $insuredItem->um_uim_bi_limit }}</td>
                        <td>{{ $insuredItem->um_uim_pd }}</td>
                        <td>{{ $insuredItem->rent_amount }}</td>
                        <td>{{ $insuredItem->towing_amount }}</td>
                        <td>{{ $insuredItem->gap }}</td>
                        <td>{{ $insuredItem->pip_amount }}</td>
                        <td>{{ $insuredItem->med_amount }}</td>
                        <td>{{ $insuredItem->customer_id }}</td>
                        <td>
                          <a href="{{ route('customer.edit',$insuredItem->id) }}" class="btn btn-sm btn-info px-2">Edit</a>
                        </td>
                    </tr>
                  @endforeach
                @else
                    <tr>
                        <td colspan="13">No insured item details available.</td>
                    </tr>
                @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
      <div class="card-body">
        <h4 class="card-title">Lien Info Details List</h4>
        <p class="card-description">  <code></code>
        </p>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
                <tr>
                    <th><h6>Item No.</h6></th>
                    <th><h6>Lien Account</h6></th>
                    <th><h6>Lien Holder Address</h6></th>
                    <th><h6>City</h6></th>
                    <th><h6>State</h6></th>
                    <th><h6>Zip</h6></th>
                    <th><h6>Lien Contact Name</h6></th>
                    <th><h6>Lien Holder Phone</h6></th>
                    <th><h6>Lien Holder Email</h6></th>
                    <th><h6>Customer Id</h6></th>
                    <th><h6>Action</h6></th>
                </tr>
            </thead>
            <tbody>
                @if ($lienInfo)
                  @foreach ($lienInfo as $lienInfo)
                    <tr>
                        <td>{{ $lienInfo->item_no }}</td>
                        <td>{{ $lienInfo->account }}</td>
                        <td>{{ $lienInfo->address }}</td>
                        <td>{{ $lienInfo->city }}</td>
                        <td>{{ $lienInfo->state }}</td>
                        <td>{{ $lienInfo->zip }}</td>
                        <td>{{ $lienInfo->contact_name }}</td>
                        <td>{{ $lienInfo->phone_no }}</td>
                        <td>{{ $lienInfo->email }}</td>
                        <td>{{ $lienInfo->customer_id }}</td>
                        <td>
                          <a href="{{ route('customer.edit',$lienInfo->id) }}" class="btn btn-sm btn-info px-2">Edit</a>
                        </td>
                    </tr>
                  @endforeach
                @else
                    <tr>
                        <td colspan="13">No insured item details available.</td>
                    </tr>
                @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Premium Calculation Details List</h4>
        <p class="card-description">  <code></code>
        </p>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
                <tr>
                    <th><h6>Base Premium</h6></th>
                    <th><h6>Crime Prevention Fee</h6></th>
                    <th><h6>Policy Fee</h6></th>
                    <th><h6>Agency Fee</h6></th>
                    <th><h6>Other Fees</h6></th>
                    <th><h6>Total Premium</h6></th>
                    <th><h6>Customer Id</h6></th>
                    <th><h6>Action</h6></th>
                </tr>
            </thead>
            <tbody>
                @if ($premiumCalculation)
                  @foreach ($premiumCalculation as $premiumCalculation)
                    <tr>
                        <td>{{ $premiumCalculation->base_premium }}</td>
                        <td>{{ $premiumCalculation->crime_prevention_fee }}</td>
                        <td>{{ $premiumCalculation->policy_fee }}</td>
                        <td>{{ $premiumCalculation->agency_fee }}</td>
                        <td>{{ $premiumCalculation->other_fees }}</td>
                        <td>{{ $premiumCalculation->total_premium }}</td>
                        <td>{{ $premiumCalculation->customer_id }}</td>
                        <td>
                          <a href="{{ route('customer.edit',$premiumCalculation->id) }}" class="btn btn-sm btn-info px-2">Edit</a>
                        </td>
                    </tr>
                  @endforeach
                @else
                    <tr>
                        <td colspan="13">No premium calculation details available.</td>
                    </tr>
                @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Dates & AmountS Detail List</h4>
        <p class="card-description">  <code></code>
        </p>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
                <tr>
                    <th><h6>Base Premium</h6></th>
                    <th><h6>Crime Prevention Fee</h6></th>
                    <th><h6>Policy Fee</h6></th>
                    <th><h6>Agency Fee</h6></th>
                    <th><h6>Other Fees</h6></th>
                    <th><h6>Total Premium</h6></th>
                    <th><h6>Customer Id</h6></th>
                    <th><h6>Action</h6></th>
                    <th><h6>Action</h6></th>
                    <th><h6>Action</h6></th>
                </tr>
            </thead>
            <tbody>
                @if ($datesAndAmount)
                  @foreach ($datesAndAmount as $datesAndAmount)
                    <tr>
                        <td>{{ $datesAndAmount->effective_date }}</td>
                        <td>{{ $datesAndAmount->expiry_date }}</td>
                        <td>{{ $datesAndAmount->reminder_date }}</td>
                        <td>{{ $datesAndAmount->canc_notice_date }}</td>
                        <td>{{ $datesAndAmount->due_date }}</td>
                        <td>{{ $datesAndAmount->date_paid }}</td>
                        <td>{{ $datesAndAmount->next_amount_due }}</td>
                        <td>{{ $datesAndAmount->new_amount_due }}</td>
                        <td>{{ $datesAndAmount->customer_id }}</td>
                        <td>
                          <a href="{{ route('customer.edit',$datesAndAmount->id) }}" class="btn btn-sm btn-info px-2">Edit</a>
                        </td>
                    </tr>
                  @endforeach
                @else
                    <tr>
                        <td colspan="13">No premium calculation details available.</td>
                    </tr>
                @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
