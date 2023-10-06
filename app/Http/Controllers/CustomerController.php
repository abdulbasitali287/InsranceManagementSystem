<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\LienInfo;
use App\Models\InsuredItem;
use App\Models\DriverDetail;
use Illuminate\Http\Request;
use App\Models\PaymentDetail;
use App\Models\DatesAndAmount;
use App\Models\MailingAddress;
use App\Models\PhysicalAddress;
use App\Models\PremiumCalculation;
use Illuminate\Support\Facades\DB;
use App\Models\CustomerOtherDetail;
use App\Models\WorkBussinessAddress;
use App\Http\Requests\CustomerFormRequest;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Customer::get();
        return view('customer.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function create()
    {
        $method = "POST";
        $btnText = "Add";
        $url = route('customer.store');
        $moreFieldFalse = false;
        return view('customer.create',compact('method','btnText','url','moreFieldFalse'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerFormRequest $request)
    {   
        $request->validated();

        $customer = Customer::create([
            'cus_or_lead' => $request->input('cus_or_lead'),
            'account_name' => $request->input('account_name'),
            'eft' => $request->input('eft'),
            'cus_type' => $request->input('cus_type'),
            'status' => $request->input('status'),
            'referral_src' => $request->input('refferal_src'),
        ]);
        
        $paymentDetailData = [
            'typ_of_pay' => $request->input('pay_type'),
            'carrier_name' => $request->input('carrier_name'),
            'policy_num' => $request->input('policy_no'),
            'due_amount' => $request->input('due_amount'),
            'due_date' => $request->input('due_date'),
            'paid_date' => $request->input('paid_date'),
            'mode_of_pay' => $request->input('mode_of_pay'),
            'received_by' => $request->input('received_by'),
            'new_due_amount' => $request->input('new_due_amount'),
            'new_due_date' => $request->input('new_due_date'),
            'customer_id' => $customer->cus_id
        ];

        PaymentDetail::create($paymentDetailData);
        
        $driver_name = $request->input('driver_name');
        $relationship = $request->input('relationship');
        $f_name = $request->input('f_name');
        $m_name = $request->input('m_name');
        $l_name = $request->input('l_name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $gender = $request->input('gender');
        $dob = $request->input('dob');
        $ss_no = $request->input('ss_no');
        $id_no = $request->input('id_no');
        $id_type = $request->input('id_type');
        $emp_or_bsn_name = $request->input('emp_or_bsn_name');
        $type_of_bsn_or_work = $request->input('type_of_bsn_or_work');
        $ein_no = $request->input('ein_no');
        $bsn_work_phone = $request->input('bsn_work_phone');
        
        for ($i=0; $i < count($driver_name); $i++) { 
            $driverSave = [
                'driver_name' => $driver_name[$i], 
                'relationship' => $relationship[$i], 
                'f_name' => $f_name[$i], 
                'm_name' => $m_name[$i], 
                'l_name' => $l_name[$i], 
                'email' => $email[$i], 
                'phone' => $phone[$i], 
                'gender' => $gender[$i], 
                'dob' => $dob[$i], 
                'ss_no' => $ss_no[$i], 
                'id_no' => $id_no[$i], 
                'id_type' => $id_type[$i],
                'employer_or_bsn_name' => $emp_or_bsn_name[$i],
                'type_of_bsn_or_work' => $type_of_bsn_or_work[$i],
                'ein' => $ein_no[$i],
                'bsn_or_work_phone' => $bsn_work_phone[$i],
                'customer_id' => $customer->cus_id
            ];
            DriverDetail::create($driverSave);
        }

        $physicalAddressData = [
            'pa_street_address' => $request->input('pa_street_address'),
            'pa_city' => $request->input('pa_city'),
            'pa_country' => $request->input('pa_country'),
            'pa_state' => $request->input('pa_state'),
            'pa_zip_code' => $request->input('pa_zip_code'),
            'pa_rent_or_own' => $request->input('pa_rent_or_own'),
            'customer_id' => $customer->cus_id
        ];

        $mailingAddressData = [
            'ma_street_address' => $request->input('ma_street_address'),
            'ma_city' => $request->input('ma_city'),
            'ma_country' => $request->input('ma_country'),
            'ma_state' => $request->input('ma_state'),
            'ma_zip_code' => $request->input('ma_zip_code'),
            'ma_rent_or_own' => $request->input('ma_rent_or_own'),
            'customer_id' => $customer->cus_id
        ];

        $workBussinessAddressData = [
            'wb_street_address' => $request->input('wb_street_address'),
            'wb_city' => $request->input('wb_city'),
            'wb_country' => $request->input('wb_country'),
            'wb_state' => $request->input('wb_state'),
            'wb_zip_code' => $request->input('wb_zip_code'),
            'wb_rent_or_own' => $request->input('wb_rent_or_own'),
            'customer_id' => $customer->cus_id
        ];

        PhysicalAddress::create($physicalAddressData);
        MailingAddress::create($mailingAddressData);
        WorkBussinessAddress::create($workBussinessAddressData);
        

            $ins_com = $request->input('ins_com');
            $policy_no = $request->input('ins_policy_no');
            $type = $request->input('ins_type');
            $year = $request->input('ins_year');
            $make = $request->input('ins_make');
            $model = $request->input('ins_model');
            $vin_no = $request->input('ins_vin_no');
            $liability_limit = $request->input('liability_limit');
            $comp_deductible = $request->input('comp_deductible');
            $collison_deductible = $request->input('collison_deductible');
            $um_uim_bi_limit = $request->input('um_uim_bi_limit');
            $um_uim_pd = $request->input('um_uim_pd');
            $rent_amount = $request->input('rent_amount');
            $towing_amount = $request->input('towing_amount');
            $gap = $request->input('gap');
            $pip_amount = $request->input('pip_amount');
            $med_amount = $request->input('med_amount');
            
            for ($i=0; $i < count($ins_com); $i++) {             
                $InsuredItems = [
                    'ins_com' => $ins_com[$i],
                    'policy_no' => $policy_no[$i],
                    'type' => $type[$i],
                    'year' => $year[$i],
                    'make' => $make[$i],
                    'model' => $model[$i],
                    'vin_no' => $vin_no[$i],
                    'liability_limit' => $liability_limit[$i],
                    'comp_deductible' => $comp_deductible[$i],
                    'collison_deductible' => $collison_deductible[$i],
                    'um_uim_bi_limit' => $um_uim_bi_limit[$i],
                    'um_uim_pd' => $um_uim_pd[$i],
                    'rent_amount' => $rent_amount[$i],
                    'towing_amount' => $towing_amount[$i],
                    'gap' => $gap[$i],
                    'pip_amount' => $pip_amount[$i],
                    'med_amount' => $med_amount[$i],
                    'customer_id' => $customer->cus_id
                ];
                InsuredItem::create($InsuredItems);
            }

            $item_no = $request->input('lh_item_no');
            $account = $request->input('lh_account');
            $address = $request->input('lh_address');
            $city = $request->input('lh_city');
            $state = $request->input('lh_state');
            $zip = $request->input('lh_zip');
            $contact_name = $request->input('lh_con_name');
            $phone_no = $request->input('lh_phone_no');
            $email = $request->input('lh_email');

            for ($i=0; $i < count($request->input('lh_item_no')); $i++) { 
                $lienInfo = [
                    'item_no' => $item_no[$i],
                    'account' => $account[$i],
                    'address' => $address[$i],
                    'city' => $city[$i],
                    'state' => $state[$i],
                    'zip' => $zip[$i],
                    'contact_name' => $contact_name[$i],
                    'phone_no' => $phone_no[$i],
                    'email' => $email[$i],
                    'customer_id' => $customer->cus_id
                ];
                LienInfo::create($lienInfo);
            }

        $base_premium = $request->input('base_premium');
        $crime_prevention_fee = $request->input('crime_prevention_fee');
        $policy_fee = $request->input('policy_fee');
        $agency_fee = $request->input('agency_fee');
        $other_fees = $request->input('other_fees');
        $total_premium = $request->input('total_premium');

        for ($i=0; $i < count($base_premium); $i++) { 
            $dataSave = [
                'base_premium' => $base_premium[$i],
                'crime_prevention_fee' => $crime_prevention_fee[$i],
                'policy_fee' => $policy_fee[$i],
                'agency_fee' => $agency_fee[$i],
                'other_fees' => $other_fees[$i],
                'total_premium' => $total_premium[$i],
                'customer_id' => $customer->cus_id,
            ];
            PremiumCalculation::create($dataSave);
        }

        $datesAndAmount = [
            'effective_date' => $request->input('effective_date'),
            'expiry_date' => $request->input('expiry_date'),
            'reminder_date' => $request->input('reminder_date'),
            'canc_notice_date' => $request->input('canc_notice_date'),
            'due_date' => $request->input('da_due_date'),
            'date_paid' => $request->input('da_date_paid'),
            'next_amount_due' => $request->input('next_amount_due'),
            'new_amount_due' => $request->input('new_amount_due'),
            'customer_id' => $customer->cus_id,
        ];
        DatesAndAmount::create($datesAndAmount);

        return redirect()->back()->with('success','record added successfully...!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $customer = Customer::findOrFail($id);
        $paymentDetail = PaymentDetail::where('customer_id',$id)->get();
        $driverDetail = DriverDetail::where('customer_id',$id)->get();
        $physicalAddress = PhysicalAddress::where('customer_id',$id)->get();
        $mailingAddress = MailingAddress::where('customer_id',$id)->get();
        $workBussinessAddress = WorkBussinessAddress::where('customer_id',$id)->get();
        $insuredItem = InsuredItem::where('customer_id',$id)->get();
        $lienInfo = LienInfo::where('customer_id',$id)->get();
        $premiumCalculation = PremiumCalculation::where('customer_id',$id)->get();
        $datesAndAmount = DatesAndAmount::where('customer_id',$id)->get();

        return view('customer.show',compact('customer','paymentDetail','driverDetail','insuredItem','premiumCalculation','lienInfo','physicalAddress','mailingAddress','workBussinessAddress','datesAndAmount'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $InsLienPre = DB::table('insured_items')
        ->join('customers','insured_items.customer_id','=','customers.cus_id')
        ->join('lien_infos','customers.cus_id','=','lien_infos.customer_id')
        ->join('premium_calculations','customers.cus_id','=','premium_calculations.customer_id')
        ->select('insured_items.*','insured_items.id AS ins_id','lien_infos.*','lien_infos.id AS lien_info_id','premium_calculations.*','premium_calculations.id AS prc_id')
        ->get();
        $url = 'customer' . "/" . $id;
        $method = 'PUT';
        $btnText = "Update";
        $moreFieldFalse = false;
        $customer = Customer::findOrFail($id);
        $paymentDetail = PaymentDetail::where('customer_id',$id)->first();
        $driverDetail = DriverDetail::where('customer_id',$id)->get();
        $physicalAddress = PhysicalAddress::where('customer_id',$id)->first();
        $mailingAddress = MailingAddress::where('customer_id',$id)->first();
        $workBussinessAddress = WorkBussinessAddress::where('customer_id',$id)->first();
        $datesAndAmount = DatesAndAmount::where('customer_id',$id)->first();
        return view('customer.edit',compact('customer','paymentDetail','driverDetail','physicalAddress','mailingAddress','workBussinessAddress','datesAndAmount','url','moreFieldFalse','method','btnText','InsLienPre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerFormRequest $request, Customer $customer)
    {
        $request->validated();
        
        Customer::where('cus_id',$customer->cus_id)->update([
            'cus_or_lead' => $request->input('cus_or_lead'),
            'account_name' => $request->input('account_name'),
            'eft' => $request->input('eft'),
            'cus_type' => $request->input('cus_type'),
            'status' => $request->input('status'),
            'referral_src' => $request->input('refferal_src'),
        ]);
        
        $paymentDetailData = [
            'typ_of_pay' => $request->input('pay_type'),
            'carrier_name' => $request->input('carrier_name'),
            'policy_num' => $request->input('policy_no'),
            'due_amount' => $request->input('due_amount'),
            'due_date' => $request->input('due_date'),
            'paid_date' => $request->input('paid_date'),
            'mode_of_pay' => $request->input('mode_of_pay'),
            'received_by' => $request->input('received_by'),
            'new_due_amount' => $request->input('new_due_amount'),
            'new_due_date' => $request->input('new_due_date'),
        ];

        PaymentDetail::where('customer_id',$customer->cus_id)->update($paymentDetailData);

        $driver_id = $request->input('driver_id');
        $driver_name = $request->input('driver_name');
        $relationship = $request->input('relationship');
        $f_name = $request->input('f_name');
        $m_name = $request->input('m_name');
        $l_name = $request->input('l_name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $gender = $request->input('gender');
        $dob = $request->input('dob');
        $ss_no = $request->input('ss_no');
        $id_no = $request->input('id_no');
        $id_type = $request->input('id_type');
        $emp_or_bsn_name = $request->input('emp_or_bsn_name');
        $type_of_bsn_or_work = $request->input('type_of_bsn_or_work');
        $ein_no = $request->input('ein_no');
        $bsn_work_phone = $request->input('bsn_work_phone');
        
        for ($i=0; $i < count($driver_name); $i++) { 
            $driverSave = [
                'driver_name' => $driver_name[$i], 
                'relationship' => $relationship[$i], 
                'f_name' => $f_name[$i], 
                'm_name' => $m_name[$i], 
                'l_name' => $l_name[$i], 
                'email' => $email[$i], 
                'phone' => $phone[$i], 
                'gender' => $gender[$i], 
                'dob' => $dob[$i], 
                'ss_no' => $ss_no[$i], 
                'id_no' => $id_no[$i], 
                'id_type' => $id_type[$i],
                'employer_or_bsn_name' => $emp_or_bsn_name[$i],
                'type_of_bsn_or_work' => $type_of_bsn_or_work[$i],
                'ein' => $ein_no[$i],
                'bsn_or_work_phone' => $bsn_work_phone[$i],
            ];
            DriverDetail::where('customer_id',$customer->cus_id)->where('id',$driver_id[$i])->update($driverSave);
        }
        
        $physicalAddressData = [
            'pa_street_address' => $request->input('pa_street_address'),
            'pa_city' => $request->input('pa_city'),
            'pa_country' => $request->input('pa_country'),
            'pa_state' => $request->input('pa_state'),
            'pa_zip_code' => $request->input('pa_zip_code'),
            'pa_rent_or_own' => $request->input('pa_rent_or_own'),
        ];

        $mailingAddressData = [
            'ma_street_address' => $request->input('ma_street_address'),
            'ma_city' => $request->input('ma_city'),
            'ma_country' => $request->input('ma_country'),
            'ma_state' => $request->input('ma_state'),
            'ma_zip_code' => $request->input('ma_zip_code'),
            'ma_rent_or_own' => $request->input('ma_rent_or_own'),
        ];

        $workBussinessAddressData = [
            'wb_street_address' => $request->input('wb_street_address'),
            'wb_city' => $request->input('wb_city'),
            'wb_country' => $request->input('wb_country'),
            'wb_state' => $request->input('wb_state'),
            'wb_zip_code' => $request->input('wb_zip_code'),
            'wb_rent_or_own' => $request->input('wb_rent_or_own'),
        ];

        PhysicalAddress::where('customer_id',$customer->cus_id)->update($physicalAddressData);
        MailingAddress::where('customer_id',$customer->cus_id)->update($mailingAddressData);
        WorkBussinessAddress::where('customer_id',$customer->cus_id)->update($workBussinessAddressData);
        
        $datesAndAmount = [
            'effective_date' => $request->input('effective_date'),
            'expiry_date' => $request->input('expiry_date'),
            'reminder_date' => $request->input('reminder_date'),
            'canc_notice_date' => $request->input('canc_notice_date'),
            'due_date' => $request->input('da_due_date'),
            'date_paid' => $request->input('da_date_paid'),
            'next_amount_due' => $request->input('next_amount_due'),
            'new_amount_due' => $request->input('new_amount_due'),
        ];

        DatesAndAmount::where('customer_id',$customer->cus_id)->update($datesAndAmount);

        $ins_id = $request->input('insurance_id');
        $ins_com = $request->input('ins_com');
        $policy_no = $request->input('ins_policy_no');
        $type = $request->input('ins_type');
        $year = $request->input('ins_year');
        $make = $request->input('ins_make');
        $model = $request->input('ins_model');
        $vin_no = $request->input('ins_vin_no');
        $liability_limit = $request->input('liability_limit');
        $comp_deductible = $request->input('comp_deductible');
        $collison_deductible = $request->input('collison_deductible');
        $um_uim_bi_limit = $request->input('um_uim_bi_limit');
        $um_uim_pd = $request->input('um_uim_pd');
        $rent_amount = $request->input('rent_amount');
        $towing_amount = $request->input('towing_amount');
        $gap = $request->input('gap');
        $pip_amount = $request->input('pip_amount');
        $med_amount = $request->input('med_amount');
        
        for ($i=0; $i < count($ins_com); $i++) {             
            $InsuredItems = [
                'ins_com' => $ins_com[$i],
                'policy_no' => $policy_no[$i],
                'type' => $type[$i],
                'year' => $year[$i],
                'make' => $make[$i],
                'model' => $model[$i],
                'vin_no' => $vin_no[$i],
                'liability_limit' => $liability_limit[$i],
                'comp_deductible' => $comp_deductible[$i],
                'collison_deductible' => $collison_deductible[$i],
                'um_uim_bi_limit' => $um_uim_bi_limit[$i],
                'um_uim_pd' => $um_uim_pd[$i],
                'rent_amount' => $rent_amount[$i],
                'towing_amount' => $towing_amount[$i],
                'gap' => $gap[$i],
                'pip_amount' => $pip_amount[$i],
                'med_amount' => $med_amount[$i],
            ];
            InsuredItem::where('id',$ins_id[$i])->where('customer_id',$customer->cus_id)->update($InsuredItems);
        }

        $lien_id = $request->input('lien_info_id');
        $item_no = $request->input('lh_item_no');
        $account = $request->input('lh_account');
        $address = $request->input('lh_address');
        $city = $request->input('lh_city');
        $state = $request->input('lh_state');
        $zip = $request->input('lh_zip');
        $contact_name = $request->input('lh_con_name');
        $phone_no = $request->input('lh_phone_no');
        $email = $request->input('lh_email');

        for ($i=0; $i < count($request->input('lh_item_no')); $i++) { 
            $lienInfo = [
                'item_no' => $item_no[$i],
                'account' => $account[$i],
                'address' => $address[$i],
                'city' => $city[$i],
                'state' => $state[$i],
                'zip' => $zip[$i],
                'contact_name' => $contact_name[$i],
                'phone_no' => $phone_no[$i],
                'email' => $email[$i],
            ];
            LienInfo::where('id',$lien_id[$i])->where('customer_id',$customer->cus_id)->update($lienInfo);
        }

        $pre_id = $request->input('prc_id');
        $base_premium = $request->input('base_premium');
        $crime_prevention_fee = $request->input('crime_prevention_fee');
        $policy_fee = $request->input('policy_fee');
        $agency_fee = $request->input('agency_fee');
        $other_fees = $request->input('other_fees');
        $total_premium = $request->input('total_premium');

        for ($i=0; $i < count($base_premium); $i++) { 
            $dataSave = [
                'base_premium' => $base_premium[$i],
                'crime_prevention_fee' => $crime_prevention_fee[$i],
                'policy_fee' => $policy_fee[$i],
                'agency_fee' => $agency_fee[$i],
                'other_fees' => $other_fees[$i],
                'total_premium' => $total_premium[$i],
            ];
            PremiumCalculation::where('id',$pre_id[$i])->where('customer_id',$customer->cus_id)->update($dataSave);
        }

        return redirect()->back()->with('success','data updated successfully...!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        if ($customer) {
            $customer->payment_detail()->delete();
            $customer->driver_detail()->delete();
            $customer->physical_address()->delete();
            $customer->mailing_address()->delete();
            $customer->work_bussiness_address()->delete();
            $customer->insured_items()->delete();
            $customer->lien_info()->delete();
            $customer->premium_calculation()->delete();
            $customer->date_and_amount()->delete();
            $customer->delete();
        }
        return redirect()->back()->with('success','record deleted successfully...!');
    }
}
