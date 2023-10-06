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
        // $customers = Customer::select('cus_id','name')->get();
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
        // $driver = [];
        // for ($i=0; $i < count($request->input('driver_name')) ; $i++) { 
        //     $driver = $request->input('driver_name')[$i];
        //     echo $request->input('relationship')[$i];
        //     echo $request->input('f_name')[$i];
        //     echo $request->input('m_name')[$i];
        //     echo $request->input('l_name')[$i];
        //     echo $request->input('email')[$i];
        //     echo $request->input('phone')[$i];
        //     echo $request->input('gender')[$i];
        //     echo $request->input('dob')[$i];
        //     echo $request->input('ss_no')[$i];
        //     echo $request->input('id_no')[$i];
        //     echo $request->input('id_type')[$i];
            
        // }
        // echo "<pre>";
        // print_r($driver);
        // echo "</pre>";
        // die();
        // $validated = $request->validate([
        //     // customer or lead info validations ==============
        //     'cus_or_lead' => 'required',
        //     'account_name' => 'required',
        //     'cus_name' => 'required',
        //     'eft' => 'required',
        //     'cus_type' => 'required',
        //     'status' => 'required',
        //     'refferal_src' => 'required',
        //     // payment detail validations =====================
        //     'pay_type' => 'required',
        //     'carrier_name' => 'required',
        //     'policy_no' => 'required',
        //     'due_amount' => 'required',
        //     'due_date' => 'required',
        //     'paid_date' => 'required',
        //     'mode_of_pay' => 'required',
        //     'received_by' => 'required',
        //     'new_due_amount' => 'required',
        //     'new_due_date' => 'required',
        //     // driver detail validations ========================
        //      $driver => 'required',
        //      'relationship' => 'required',
        //      'f_name' => 'required',
        //      'm_name' => 'required',
        //      'l_name' => 'required',
        //      'email' => 'required',
        //      'phone' => 'required',
        //      'gender' => 'required',
        //      'dob' => 'required',
        //      'ss_no' => 'required',
        //      'id_no' => 'required',
        //      'id_type' => 'required',
        //     // // customer other details validations ===================
        //     'phy_address' => 'required',
        //     'city' => 'required',
        //     'country' => 'required',
        //     'state' => 'required',
        //     'zip_code' => 'required',
        //     'emp_or_bsn_name' => 'required',
        //     'type_of_bsn_or_work' => 'required',
        //     'rent_or_own' => 'required',
        //     'mailing_addr' => 'required',
        //     'ein_no' => 'required',
        //     'bsn_or_work_phone' => 'required',
        //     'bsn_web' => 'required',
        //     'bsn_addr' => 'required',
        //     // // insured items validations ================================
        //     'ins_com' => 'required',
        //     'ins_policy_no' => 'required',
        //     'type' => 'required',
        //     // 'lh_name' => 'required',
        //     'lh_account' => 'required',
        //     'lh_addr' => 'required',
        //     'lh_city' => 'required',
        //     'lh_state' => 'required',
        //     'lh_zip' => 'required',
        //     'lh_con_name' => 'required',
        //     'lh_phone_no' => 'required',
        //     'lh_email' => 'required',
        //     'lh_year' => 'required',
        //     'lh_make' => 'required',
        //     'lh_model' => 'required',
        //     'lh_vin_no' => 'required',
        //     'liability_limit' => 'required',
        //     'comp_deductible' => 'required',
        //     'collison_deductible' => 'required',
        //     'um_uim_bi_deduct' => 'required',
        //     'um_uim_pd' => 'required',
        //     'rent_amount' => 'required',
        //     'towing_amount' => 'required',
        //     'gap' => 'required',
        //     'pip_amount' => 'required',
        //     'med_amount' => 'required',
        //     // premium calculation validations ==================
        //     'base_premium.*' => 'required',
        //     'crime_prevention_fee.*' => 'required',
        //     'policy_fee.*' => 'required',
        //     'agency_fee.*' => 'required',
        //     'total_premium.*' => 'required',
        //     'exp_date.*' => 'required',
        //     'reminder_date.*' => 'required',
        //     'canc_notice_date.*' => 'required',
        //     'pre_due_date.*' => 'required',
        //     'next_amount_due.*' => 'required',
        //     'pre_paid_date.*' => 'required',
        //     'new_amount_due.*' => 'required',
        //     'pre_new_due_date.*' => 'required',
        //     // ============================
        //     // 'customer_id' => 'required',
        // ]);

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
        ->select('insured_items.*','lien_infos.*','premium_calculations.*')
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
        
        // $insuredItem = InsuredItem::where('customer_id',$id)->get();
        // $lienInfo = LienInfo::where('customer_id',$id)->get();
        // $premiumCalculation = PremiumCalculation::where('customer_id',$id)->get();
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
        // echo "<pre>";
        // echo "</pre>";
        // exit();
        $request->validated();
        // $customer = Customer::where('cus_id',$customer->cus_id)->update([
        //     'cus_or_lead' => $request->input('cus_or_lead'),
        //     'account_name' => $request->input('account_name'),
        //     'name' => $request->input('cus_name'),
        //     'eft' => $request->input('eft'),
        //     'cus_type' => $request->input('cus_type'),
        //     'status' => $request->input('status'),
        //     'referral_src' => $request->input('refferal_src'),
        // ]);

        // $paymentDetailData = [
        //     'typ_of_pay' => $request->input('pay_type'),
        //     'carrier_name' => $request->input('carrier_name'),
        //     'policy_num' => $request->input('policy_no'),
        //     'due_amount' => $request->input('due_amount'),
        //     'due_date' => $request->input('due_date'),
        //     'paid_date' => $request->input('paid_date'),
        //     'mode_of_pay' => $request->input('mode_of_pay'),
        //     'received_by' => $request->input('received_by'),
        //     'new_due_amount' => $request->input('new_due_amount'),
        //     'new_due_date' => $request->input('new_due_date'),
        //     'customer_id' => $customer->cus_id
            // 'customer_id' => $request->input('customer_id')
        // ];
        // PaymentDetail::where('customer_id',$customer->cus_id)->update($paymentDetailData);
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
        // $customer_id = $request->input('customer_id');

        
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
                'customer_id' => $customer->cus_id,
                // 'customer_id' => $request->input('customer_id'), 
            ];
            DriverDetail::where('customer_id',$customer->cus_id)->where('id',$driver_id[$i])->update($driverSave);
        }
        exit();
        
        // $CustomerOtherDetail = [
        //     'phy_address' => $request->input('phy_address'),
        //     'city' => $request->input('city'),
        //     'country' => $request->input('country'),
        //     'state' => $request->input('state'),
        //     'zip_code' => $request->input('zip_code'),
        //     'emp_or_bsn_name' => $request->input('emp_or_bsn_name'),
        //     'type_of_bsn_or_work' => $request->input('type_of_bsn_or_work'),
        //     'rent_or_own' => $request->input('rent_or_own'),
        //     'mailing_addr' => $request->input('mailing_addr'),
        //     'ein_no' => $request->input('ein_no'),
        //     'bsn_or_work_phone' => $request->input('bsn_or_work_phone'),
        //     'bsn_web' => $request->input('bsn_web'),
        //     'bsn_addr' => $request->input('bsn_addr'),
        //     'customer_id' => $customer->cus_id,
        //     // 'customer_id' => $request->input('customer_id'),
        // ];
        // CustomerOtherDetail::where('customer_id',$customer->cus_id)->update($CustomerOtherDetail);
        // exit();
        $InsuredItems = [
            'ins_com' => $request->input('ins_com'),
            'policy_no' => $request->input('policy_no'),
            'type' => $request->input('type'),
            'year' => $request->input('ins_year'),
            'make' => $request->input('ins_make'),
            'model' => $request->input('ins_model'),
            'vin_no' => $request->input('ins_vin_no'),
            'liability_limit' => $request->input('liability_limit'),
            'comp_deductible' => $request->input('comp_deductible'),
            'collison_deductible' => $request->input('collison_deductible'),
            'um_uim_bi_deduct' => $request->input('um_uim_bi_deduct'),
            'um_uim_pd' => $request->input('um_uim_pd'),
            'rent_amount' => $request->input('rent_amount'),
            'towing_amount' => $request->input('towing_amount'),
            'gap' => $request->input('gap'),
            'pip_amount' => $request->input('pip_amount'),
            'med_amount' => $request->input('med_amount'),
            // 'customer_id' => $customer->cus_id,
            // 'lh_name' => $request->input('lh_name'),
        ];
        InsuredItem::where('customer_id',$customer->cus_id)->update($InsuredItems);


        $LienInfoData = [
            'item_no' => $request->input('lh_item_no'),
            'account' => $request->input('lh_account'),
            'address' => $request->input('lh_addr'),
            'city' => $request->input('lh_city'),
            'state' => $request->input('lh_state'),
            'zip' => $request->input('lh_zip'),
            'con_name' => $request->input('lh_con_name'),
            'phone_no' => $request->input('lh_phone_no'),
            'email' => $request->input('lh_email'),
        ];
        LienInfo::where('customer_id',$customer->cus_id)->update($LienInfoData);
        
        $base_premium = $request->input('base_premium');
        $crime_prevention_fee = $request->input('crime_prevention_fee');
        $policy_fee = $request->input('policy_fee');
        $agency_fee = $request->input('agency_fee');
        $total_premium = $request->input('total_premium');
        $exp_date = $request->input('exp_date');
        $reminder_date = $request->input('reminder_date');
        $canc_notice_date = $request->input('canc_notice_date');
        $due_date = $request->input('pre_due_date');
        $next_amount_due = $request->input('next_amount_due');
        $paid_date = $request->input('pre_paid_date');
        $new_amount_due = $request->input('new_amount_due');
        $new_due_date = $request->input('pre_new_due_date');

        for ($i=0; $i < count($base_premium); $i++) { 
            $dataSave = [
                'base_premium' => $base_premium[$i],
                'crime_prevention_fee' => $crime_prevention_fee[$i],
                'policy_fee' => $policy_fee[$i],
                'agency_fee' => $agency_fee[$i],
                'total_premium' => $total_premium[$i],
                'exp_date' => $exp_date[$i],
                'reminder_date' => $reminder_date[$i],
                'canc_notice_date' => $canc_notice_date[$i],
                'due_date' => $due_date[$i],
                'next_amount_due' => $next_amount_due[$i],
                'paid_date' => $paid_date[$i],
                'new_amount_due' => $new_amount_due[$i],
                'new_due_date' => $new_due_date[$i],
                'customer_id' => $customer->cus_id
            ];
            PremiumCalculation::create($dataSave);
        }

        return redirect()->back()->with('success','record added successfully...!');
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
            // $customer->customer_other_details()->delete();
        }
        return redirect()->back()->with('success','record deleted successfully...!');
    }

    public function customerUpdate(Request $request , $id){
        $customer = Customer::findOrFail($id);
        if ($customer) {
            $customer->update([
                'cus_or_lead' => $request->input('cus_or_lead'),
                'account_name' => $request->input('account_name'),
                'eft' => $request->input('eft'),
                'cus_type' => $request->input('cus_type'),
                'status' => $request->input('status'),
                'referral_src' => $request->input('refferal_src'),
            ]);
        }
    }
}
