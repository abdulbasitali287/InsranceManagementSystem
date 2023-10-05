<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use Illuminate\Http\Request;
use App\Models\CustomPayment;
use Faker\Provider\ar_EG\Company;
use Illuminate\Support\Traits\CapsuleManagerTrait;

class CustomPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        // $search = $request->input('search');

        // $query = CustomPayment::orderBy('id', 'DESC');

        // if ($search) {
        //     $query->where(function ($q) use ($search) {
        //         $q->where('name', 'like', '%' . $search . '%')
        //         ->orWhere('email', 'like', '%' . $search . '%')
        //         ->orWhere('ssn', 'like', '%' . $search . '%')
        //         ->orWhere('phone', 'like', '%' . $search . '%');
        //     });
        // }
        // $payments = $query->get();
        return view('payments_pending.index', compact('payments'));
    }

    public function document()
    {
        return view('payments_pending.document');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
     
        return view('payments_pending.create');
    }
    

    public function searchAjax(Request $request)
{
    $search = $request->input('search');
    
    $query = Notes::where('todo_list', true);

    if ($search) {
        $query->where(function ($q) use ($search) {
            $q->where('name', 'like', '%' . $search . '%')
              ->orWhere('email', 'like', '%' . $search . '%')
              ->orWhere('ssn', 'like', '%' . $search . '%')
              ->orWhere('phone', 'like', '%' . $search . '%');
        });
    }

    $payments = $query->orderBy('date')->get();

    return response()->json(['payments' => $payments]);
}


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    $file = request()->file('file');
    //    $path= $file->store('uploads', ['disk' => 'public']);

    //    $file2 = request()->file('file2');
    //    $path2= $file2->store('uploads', ['disk' => 'public']);

    //    $file3 = request()->file('file3');
    //    $path3= $file3->store('uploads', ['disk' => 'public']);

    //    $file4 = request()->file('file4');
    //    $path4= $file4->store('uploads', ['disk' => 'public']);

    //    $file5 = request()->file('file5');
    //    $path5= $file5->store('uploads', ['disk' => 'public']);

        $payment = new CustomPayment;

        // customer Schema 
        $payment->name = $request['name'];
        $payment->phone = $request['phone'];
        $payment->email = $request['email'];
        $payment->ssn = $request['ssn'];
        $payment->dob = $request['dob'];
        $payment->address = $request['address'];
        $payment->marital_status = $request['marital_status'];
        $payment->filing_status = $request['filing_status'];
        $payment->name_sp = $request['name_sp'];
        $payment->ssn_sp = $request['ssn_sp'];
        $payment->dob_sp = $request['dob_sp'];
        $payment->service_code = $request['service_code'];
        $payment->fees = $request['fees'];
        $payment->service_co = $request['service_co'];
        $payment->hire_date = $request['hire_date'];
        $payment->last_activity = $request['last_activity'];
        $payment->business_name = $request['business_name'];
        $payment->type_bu = $request['type_bu'];
        $payment->ein = $request['ein'];
        $payment->address_bu = $request['address_bu'];

        // new fields 
        $payment->balance = $request['balance'];
        $payment->amount_paid = $request['amount_paid'];
        $payment->next_pay = $request['next_pay'];
        $payment->pay_date = $request['pay_date'];
        // $payment->file = $path;
        // $payment->file2 = $path2;
        // $payment->file3 = $path3;
        // $payment->file4 = $path4;
        // $payment->file5 = $path5;
 
        // checking if not empty then submit
        if ($request->hasFile('file')) {
            // Process the uploaded file and update the file field in the database
            $file = request()->file('file');
            $path= $file->store('uploads', ['disk' => 'public']);
            $payment->file = $path;
        }

        if ($request->hasFile('file2')) {
            // Process the uploaded file and update the file field in the database
            $file2 = request()->file('file2');
            $path2= $file2->store('uploads', ['disk' => 'public']);
            $payment->file2 = $path2;
        }

        if ($request->hasFile('file3')) {
            // Process the uploaded file and update the file field in the database
            $file3 = request()->file('file3');
            $path3= $file3->store('uploads', ['disk' => 'public']);
            $payment->file3 = $path3;
        }
        
        if ($request->hasFile('file4')) {
            // Process the uploaded file and update the file field in the database
            $file4 = request()->file('file4');
            $path4= $file4->store('uploads', ['disk' => 'public']);
            $payment->file4 = $path4;
        }

        if ($request->hasFile('file5')) {
            // Process the uploaded file and update the file field in the database
            $file5 = request()->file('file5');
            $path5= $file5->store('uploads', ['disk' => 'public']);
            $payment->file5 = $path5;
        }




      




        // payment schema old
        // $payment->agent = $request['agent'];
        // $payment->customer = $request['customer'];
        // $payment->policy = $request['policy'];
        // $payment->split_payment = $request['split_payment'];
        // $payment->payment_amount = $request['payment_amount'];
        // $payment->payment_method = $request['payment_method'];
        // $payment->total_payment = $request['total_payment'];
        // $payment->agency_fee = $request['agency_fee'];
        // $payment->total_recieved = $request['total_recieved'];
        // $payment->type_of_payment = $request['type_of_payment'];
        // $payment->future_due_date = $request['future_due_date'];
        // $payment->notes = $request['notes'];
        // $payment->payment_amount_Split = $request['payment_amount_Split'];
        // $payment->payment_method_Split = $request['payment_method_Split'];

        //* for image store 
        // if ($request->has('receipt')) {
        //     $payment->receipt = $request->file('receipt')->store('images', 'public');
           
        // }


        $payment->save();
        return redirect()->route('payment.index')
        ->with('message','Customer created successfully !!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $payment = CustomPayment::find($id);
    //     return view('payments_pending.view', compact('payment'));
    // }

    public function show($id)
    {
    $payment = CustomPayment::find($id);

    // Retrieve the associated notes records for the given $id
    // $notes = Notes::where('custom_payment_id', $id)->get();
    $notes = Notes::where('custom_payment_id', $id)
                  ->orderBy('created_at', 'desc') // Order by created_at in descending order
                  ->get();

    return view('payments_pending.view', compact('payment', 'notes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $payment = CustomPayment::find($id);
        return view('payments_pending.edit', compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // file update is commented out
        // $file = request()->file('file');
        // $path= $file->store('uploads', ['disk' => 'public']);

    //    $file2 = request()->file('file2');
    //    $path2= $file2->store('uploads', ['disk' => 'public']);

    //    $file3 = request()->file('file3');
    //    $path3= $file3->store('uploads', ['disk' => 'public']);

        $payment = CustomPayment::find($id);

         // customer Schema 
         $payment->name = $request['name'];
         $payment->phone = $request['phone'];
         $payment->email = $request['email'];
         $payment->ssn = $request['ssn'];
         $payment->dob = $request['dob'];
         $payment->address = $request['address'];
         $payment->marital_status = $request['marital_status'];
         $payment->filing_status = $request['filing_status'];
         $payment->name_sp = $request['name_sp'];
         $payment->ssn_sp = $request['ssn_sp'];
         $payment->dob_sp = $request['dob_sp'];
         $payment->service_code = $request['service_code'];
         $payment->fees = $request['fees'];
         $payment->service_co = $request['service_co'];
         $payment->hire_date = $request['hire_date'];
         $payment->last_activity = $request['last_activity'];
         $payment->business_name = $request['business_name'];
         $payment->type_bu = $request['type_bu'];
         $payment->ein = $request['ein'];
         $payment->address_bu = $request['address_bu'];

          // new fields 
        $payment->balance = $request['balance'];
        $payment->amount_paid = $request['amount_paid'];
        $payment->next_pay = $request['next_pay'];
        $payment->pay_date = $request['pay_date'];

        if ($request->hasFile('file')) {
            // Process the uploaded file and update the file field in the database
            $file = request()->file('file');
            $path= $file->store('uploads', ['disk' => 'public']);
            $payment->file = $path;
        }

        if ($request->hasFile('file2')) {
            // Process the uploaded file and update the file field in the database
            $file2 = request()->file('file2');
            $path2= $file2->store('uploads', ['disk' => 'public']);
            $payment->file2 = $path2;
        }

        if ($request->hasFile('file3')) {
            // Process the uploaded file and update the file field in the database
            $file3 = request()->file('file3');
            $path3= $file3->store('uploads', ['disk' => 'public']);
            $payment->file3 = $path3;
        }
        
        if ($request->hasFile('file4')) {
            // Process the uploaded file and update the file field in the database
            $file4 = request()->file('file4');
            $path4= $file4->store('uploads', ['disk' => 'public']);
            $payment->file4 = $path4;
        }

        if ($request->hasFile('file5')) {
            // Process the uploaded file and update the file field in the database
            $file5 = request()->file('file5');
            $path5= $file5->store('uploads', ['disk' => 'public']);
            $payment->file5 = $path5;
        }



        // old schema
        // $payment->agent = $request['agent'];
        // $payment->customer = $request['customer'];
        // $payment->policy = $request['policy'];
        // $payment->split_payment = $request['split_payment'];
        // $payment->payment_amount = $request['payment_amount'];
        // $payment->payment_method = $request['payment_method'];
        // $payment->total_payment = $request['total_payment'];
        // $payment->agency_fee = $request['agency_fee'];
        // $payment->total_recieved = $request['total_recieved'];
        // $payment->type_of_payment = $request['type_of_payment'];
        // $payment->future_due_date = $request['future_due_date'];
        // $payment->notes = $request['notes'];
        // $payment->payment_amount_Split = $request['payment_amount_Split'];
        // $payment->payment_method_Split = $request['payment_method_Split'];
        // if ($request->has('receipt')) {
        //     $payment->receipt = $request->file('receipt')->store('images', 'public');
           
        // }
        
        $payment->update();
        return redirect()->route('payment.index')
        ->with('message','Customer upadated successfully !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = CustomPayment::where('id', $id)->delete();
        return redirect()->route('payment.index')->with('message','Deleted successfully !!');
    }
}
