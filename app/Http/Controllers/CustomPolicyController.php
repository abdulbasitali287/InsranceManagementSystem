<?php

namespace App\Http\Controllers;

use App\Models\CustomPolicy;
use App\Models\Notes;
use App\Models\CustomPayment;
use App\Models\Employee;
use Illuminate\Http\Request;

class CustomPolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $policy = Notes::orderBy('id','DESC')->get()->all();
        return view('policy.index',compact('policy'));
    }

    public function todo_create()
    {
        // Retrieve all customers from the database
        $customers = CustomPayment::all();
        $employee = Employee::all();
    
    
        // Pass the $customers data to the view
        return view('policy.create', compact('customers','employee'));
    }

    public function reminder_create()
    {
        // Retrieve all customers from the database
        $customers = CustomPayment::all();
        $employee = Employee::all();
    
    
        // Pass the $customers data to the view
        return view('policy.create', compact('customers','employee'));
    }

    public function todo()
    {
        $policy = Notes::where('todo_list', true)
                        ->orderBy('date')
                        ->get();
    
        return view('policy.todo', compact('policy'));
    }

    public function remainder()
    {
        $policy = Notes::where('remainder', true)
                        ->orderBy('date')
                        ->get();
    
        return view('policy.remainder', compact('policy'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('policy.create');
    // }

    public function create()
{
    // Retrieve all customers from the database
    $customers = CustomPayment::all();
    $employee = Employee::all();


    // Pass the $customers data to the view
    return view('policy.create', compact('customers','employee'));
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $policy = Notes::create($request->all());
        return redirect()->route('policy.index')->with('message', 'Record added successfully !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $policy = Notes::find($id);
        return view('policy.view', compact('policy'));
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $policy = Notes::find($id);
        $employee = Employee::all();
        $customers = CustomPayment::all();

        return view('policy.edit', compact('policy','customers','employee'));
  
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
        unset($request['_token']);
        unset($request['_method']);
        $policy = Notes::where('id',$id)->update($request->all());
        return redirect()->route('policy.index')->with('message', 'Updated successfully !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Notes::where('id', $id)->delete();
        return redirect()->route('policy.index')->with('message','Deleted successfully !!');
   
    }
}
