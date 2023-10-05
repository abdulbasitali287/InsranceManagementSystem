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
                    <th><h6>Customer Name</h6></th>
                    <th><h6>CusOrLead</h6></th>
                    <th><h6>Account Name</h6></th>
                    <th><h6>EFT</h6></th>
                    <th><h6>Type</h6></th>
                    <th><h6>Referral Source</h6></th>
                    <th><h6>Status</h6></th>
                </tr>
            </thead>
            <tbody>
                @if ($customer)
                    <tr>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->cus_or_lead }}</td>
                        <td>{{ $customer->account_name }}</td>
                        <td>{{ $customer->eft }}</td>
                        <td>{{ $customer->cus_type }}</td>
                        <td>{{ $customer->referral_src }}</td>
                        <td>{!! $customer->status == 1 ? '<span class="btn btn-success">Active</span>' : '<span class="btn btn-danger">Inactive</span>' !!}</td>
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
                    <th><h6>typ_of_pay</h6></th>
                    <th><h6>carrier_name</h6></th>
                    <th><h6>policy_num</h6></th>
                    <th><h6>due_amount</h6></th>
                    <th><h6>due_date</h6></th>
                    <th><h6>paid_date</h6></th>
                    <th><h6>mode_of_pay</h6></th>
                    <th><h6>received_by</h6></th>
                    <th><h6>new_due_amount</h6></th>
                    <th><h6>new_due_date</h6></th>
                </tr>
            </thead>
            <tbody>
                @if ($paymentDetail)
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
                    </tr>
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
                    <th><h6>driver_name</h6></th>
                    <th><h6>relationship</h6></th>
                    <th><h6>f_name</h6></th>
                    <th><h6>m_name</h6></th>
                    <th><h6>l_name</h6></th>
                    <th><h6>email</h6></th>
                    <th><h6>phone</h6></th>
                    <th><h6>gender</h6></th>
                    <th><h6>dob</h6></th>
                    <th><h6>ss_no</h6></th>
                    <th><h6>id_no</h6></th>
                    <th><h6>id_type</h6></th>
                </tr>
            </thead>
            <tbody>
                @if ($driverDetail)
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
                    </tr>
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
        <h4 class="card-title">Customer Other Details List</h4>
        <p class="card-description">  <code></code>
        </p>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
                <tr>
                    <th><h6>phy_address</h6></th>
                    <th><h6>city</h6></th>
                    <th><h6>country</h6></th>
                    <th><h6>state</h6></th>
                    <th><h6>zip_code</h6></th>
                    <th><h6>emp_or_bsn_name</h6></th>
                    <th><h6>type_of_bsn_or_work</h6></th>
                    <th><h6>rent_or_own</h6></th>
                    <th><h6>mailing_addr</h6></th>
                    <th><h6>ein_no</h6></th>
                    <th><h6>bsn_or_work_phone</h6></th>
                    <th><h6>bsn_web</h6></th>
                    <th><h6>bsn_addr</h6></th>
                </tr>
            </thead>
            <tbody>
                @if ($customerOtherDetail)
                    <tr>
                        <td>{{ $customerOtherDetail->phy_address }}</td>
                        <td>{{ $customerOtherDetail->city }}</td>
                        <td>{{ $customerOtherDetail->country }}</td>
                        <td>{{ $customerOtherDetail->state }}</td>
                        <td>{{ $customerOtherDetail->zip_code }}</td>
                        <td>{{ $customerOtherDetail->emp_or_bsn_name }}</td>
                        <td>{{ $customerOtherDetail->type_of_bsn_or_work }}</td>
                        <td>{{ $customerOtherDetail->rent_or_own }}</td>
                        <td>{{ $customerOtherDetail->mailing_addr }}</td>
                        <td>{{ $customerOtherDetail->ein_no }}</td>
                        <td>{{ $customerOtherDetail->bsn_or_work_phone }}</td>
                        <td>{{ $customerOtherDetail->bsn_web }}</td>
                        <td>{{ $customerOtherDetail->bsn_addr }}</td>
                    </tr>
                @else
                    <tr>
                        <td colspan="13">No customer other details available.</td>
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
                    <th><h6>Ins_com</h6></th>
                    <th><h6>policy_no</h6></th>
                    <th><h6>type</h6></th>
                    <th><h6>lh_name</h6></th>
                    <th><h6>lh_account</h6></th>
                    <th><h6>lh_addr</h6></th>
                    <th><h6>lh_city</h6></th>
                    <th><h6>lh_state</h6></th>
                    <th><h6>lh_zip</h6></th>
                    <th><h6>lh_con_name</h6></th>
                    <th><h6>lh_phone_no</h6></th>
                    <th><h6>lh_email</h6></th>
                    <th><h6>lh_year</h6></th>
                    <th><h6>lh_make</h6></th>
                    <th><h6>lh_model</h6></th>
                    <th><h6>lh_vin_no</h6></th>
                    <th><h6>liability_limit</h6></th>
                    <th><h6>comp_deductible</h6></th>
                    <th><h6>collison_deductible</h6></th>
                    <th><h6>um_uim_bi_deduct</h6></th>
                    <th><h6>um_uim_pd</h6></th>
                    <th><h6>rent_amount</h6></th>
                    <th><h6>towing_amount</h6></th>
                    <th><h6>gap</h6></th>
                    <th><h6>pip_amount</h6></th>
                    <th><h6>med_amount</h6></th>
                </tr>
            </thead>
            <tbody>
                @if ($insuredItem)
                    <tr>
                        <td>{{ $insuredItem->Ins_com }}</td>
                        <td>{{ $insuredItem->policy_no }}</td>
                        <td>{{ $insuredItem->type }}</td>
                        <td>{{ $insuredItem->lh_name }}</td>
                        <td>{{ $insuredItem->lh_account }}</td>
                        <td>{{ $insuredItem->lh_addr }}</td>
                        <td>{{ $insuredItem->lh_city }}</td>
                        <td>{{ $insuredItem->lh_state }}</td>
                        <td>{{ $insuredItem->lh_zip }}</td>
                        <td>{{ $insuredItem->lh_con_name }}</td>
                        <td>{{ $insuredItem->lh_phone_no }}</td>
                        <td>{{ $insuredItem->lh_email }}</td>
                        <td>{{ $insuredItem->lh_year }}</td>
                        <td>{{ $insuredItem->lh_make }}</td>
                        <td>{{ $insuredItem->lh_model }}</td>
                        <td>{{ $insuredItem->lh_vin_no }}</td>
                        <td>{{ $insuredItem->liability_limit }}</td>
                        <td>{{ $insuredItem->comp_deductible }}</td>
                        <td>{{ $insuredItem->collison_deductible }}</td>
                        <td>{{ $insuredItem->um_uim_bi_deduct }}</td>
                        <td>{{ $insuredItem->um_uim_pd }}</td>
                        <td>{{ $insuredItem->rent_amount }}</td>
                        <td>{{ $insuredItem->towing_amount }}</td>
                        <td>{{ $insuredItem->gap }}</td>
                        <td>{{ $insuredItem->pip_amount }}</td>
                        <td>{{ $insuredItem->med_amount }}</td>
                    </tr>
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
                    <th><h6>base_premium</h6></th>
                    <th><h6>crime_prevention_fee</h6></th>
                    <th><h6>policy_fee</h6></th>
                    <th><h6>agency_fee</h6></th>
                    <th><h6>total_premium</h6></th>
                    <th><h6>exp_date</h6></th>
                    <th><h6>reminder_date</h6></th>
                    <th><h6>canc_notice_date</h6></th>
                    <th><h6>due_date</h6></th>
                    <th><h6>next_amount_due</h6></th>
                    <th><h6>paid_date</h6></th>
                    <th><h6>new_amount_due</h6></th>
                    <th><h6>new_due_date</h6></th>
                </tr>
            </thead>
            <tbody>
                @if ($premiumCalculation)
                    <tr>
                        <td>{{ $premiumCalculation->base_premium }}</td>
                        <td>{{ $premiumCalculation->crime_prevention_fee }}</td>
                        <td>{{ $premiumCalculation->policy_fee }}</td>
                        <td>{{ $premiumCalculation->agency_fee }}</td>
                        <td>{{ $premiumCalculation->total_premium }}</td>
                        <td>{{ $premiumCalculation->exp_date }}</td>
                        <td>{{ $premiumCalculation->reminder_date }}</td>
                        <td>{{ $premiumCalculation->canc_notice_date }}</td>
                        <td>{{ $premiumCalculation->due_date }}</td>
                        <td>{{ $premiumCalculation->next_amount_due }}</td>
                        <td>{{ $premiumCalculation->paid_date }}</td>
                        <td>{{ $premiumCalculation->new_amount_due }}</td>
                        <td>{{ $premiumCalculation->new_due_date }}</td>
                    </tr>
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
