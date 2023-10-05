<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\PaymentHistory;
use App\Models\FamilyInformation;
use App\Models\EducationHistory;
use App\Models\WorkHistory;
use App\Models\JobDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $employee = Employee::all();
        return view('employee.index',compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //  $file = request()->file('file');
      //  $path= $file->store('images', ['disk' => 'public']);
        $employee = Employee::create([
            'name' =>$request->name,
            'dob' =>$request->dob,
            'tax_id' =>$request->tax_id,
            'dl_id' =>$request->dl_id,
            'phone' =>$request->phone,
            'email' =>$request->email,
            'address' =>$request->address,
            // 'file' =>  $path,
            'notes' =>$request->notes,

          ]);
          $employee->save();
          $JobDetail = JobDetail::create([
            'job_title' =>$request->job_title,
            'start_date' =>$request->start_date,
            'pay_type' =>$request->pay_type,
            'pay_amount' =>$request->pay_amount,
            'pay_frequency' =>$request->pay_frequency,
            'payment_method' =>$request->payment_method,
            'payment_reminder' =>$request->payment_reminder,
            'reporting_to' =>$request->reporting_to,
            'department' =>$request->department,
            'employee_id' => $employee->id,
          ]);
          $JobDetail->save();
          $PaymentHistory = PaymentHistory::create([
            'payment_date' =>$request->payment_date,
            'payment_amount' =>$request->payment_amount,
            'description' =>$request->description,
            'confirmation_num' =>$request->confirmation_num,
            'employee_id' => $employee->id,
          ]);
          $PaymentHistory->save();
          $WorkHistory = WorkHistory::create([
            'previous_company' =>$request->previous_company,
            'job_title' =>$request->job_title,
            'start_date' =>$request->start_date,
            'end_date' =>$request->end_date,
            'description' => $request->description,
            'employee_id' => $employee->id,

          ]);
          $WorkHistory->save();
          $EducationHistory = EducationHistory::create([
            'degree' =>$request->degree,
            'field_of_study' => $request->field_of_study,
            'year_of_completion' => $request->year_of_completion,
            'notes' =>$request->notes,
            'employee_id' => $employee->id,
          ]);
          $EducationHistory->save();
          $FamilyInformation = FamilyInformation::create([
            'name' => $request->name,
            'type_of_relation' =>$request->type_of_relation,
            'dob' =>$request->dob,
            'phone' =>$request->phone,
            'email' =>$request->email,
            'employee_id' => $employee->id,
          ]);
          $FamilyInformation->save();
          $WorkHistory = WorkHistory::create([
            'previous_company' =>$request->previous_company,
            'job_title' =>$request->job_title,
            'start_date' =>$request->start_date,
            'end_date' =>$request->end_date,
            'description' => $request->description,
            'employee_id' => $employee->id,

          ]);
          $WorkHistory->save();
      
        return redirect()->route('employee.index')->with('message','Employee Created successfully !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data =Employee::find($id);
        return view('employee.view',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Employee::find($id);
        return view('employee.edit',compact('data'));
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
        // $file = request()->file('file');
        // $path = $file->store('images', ['disk' => 'public']);
        
        $employee = Employee::find($id)->update([
            'name'    =>$request->name,
            'dob'     =>$request->dob,
            'tax_id'  =>$request->tax_id,
            'dl_id'   =>$request->dl_id,
            'phone'   =>$request->phone,
            'email'   =>$request->email,
            'address' =>$request->address,
            // 'file'    => $path,
            'notes'   =>$request->notes,

          ]);
          $PaymentHistory = PaymentHistory::where('employee_id',$id)->update([
            'payment_date'   =>$request->payment_date,
            'payment_amount' =>$request->payment_amount,
            'description'     =>$request->description,
            'confirmation_num' =>$request->confirmation_num,
          ]);
          $FamilyInformation = FamilyInformation::where('employee_id',$id)->update([
            
            'name' => $request->name,
            'type_of_relation' =>$request->type_of_relation,
            'dob' =>$request->dob,
            'phone' =>$request->phone,
            'email' =>$request->email,

          ]);
          $EducationHistory = EducationHistory::where('employee_id',$id)->update([
            'degree' =>$request->degree,
            'field_of_study' => $request->field_of_study,
            'year_of_completion' => $request->year_of_completion,
            'notes' =>$request->notes,
          ]);
          $WorkHistory = WorkHistory::where('employee_id',$id)->update([
            'previous_company' =>$request->previous_company,
            'job_title' =>$request->job_title,
            'start_date' =>$request->start_date,
            'end_date' =>$request->end_date,
            'description' => $request->description,

          ]);
          $JobDetail = JobDetail::where('employee_id',$id)->update([
            'job_title' =>$request->job_title,
            'start_date' =>$request->start_date,
            'pay_type' =>$request->pay_type,
            'pay_amount' =>$request->pay_amount,
            'pay_frequency' =>$request->pay_frequency,
            'payment_method' =>$request->payment_method,
            'payment_reminder' =>$request->payment_reminder,
            'reporting_to' =>$request->reporting_to,
            'department' =>$request->department,
          ]);
        return redirect()->route('employee.index')->with('message','Employee Updated successfully !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Employee::where('id', $id)->delete();
        // $data->delete();
        return redirect()->route('employee.index')->with('message','Employee Deleted successfully !!');
    }
}