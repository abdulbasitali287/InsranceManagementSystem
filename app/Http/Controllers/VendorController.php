<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use App\Models\VendorLoginInfo;
use App\Models\VendorPointOfContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Vendor::orderBy('id','DESC')->get()->all();
        return view('vendor.vendor_list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('vendor.vendor_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $vendor = Vendor::create(array_slice($request->all(), 1, 19, true));
        $vendor_login = VendorLoginInfo::create([
            'website' => $request->input('logins_website'),
            'username' => $request->input('username'),
            'password' => Hash::make($request->input('password')),
            'pin' => $request->input('pin'),
            'note' => $request->input('login_note'),
            'vendor_id' => $vendor->id,
        ]);
        $vendor_poc = VendorPointOfContact::create([
            'name' => $request->input('poc_name'),
            'title' => $request->input('poc_title'),
            'address' => $request->input('poc_address'),
            'phone' => $request->input('poc_phone'),
            'fax' => $request->input('poc_fax'),
            'email' =>  $request->input('poc_email'),
            'website' =>  $request->input('poc_website'),
            'notes' =>  $request->input('poc_notes'),
            'vendor_id' =>  $vendor->id,
        ]);
        return redirect()->route('vendor.index')
        ->with('message','Vendor created successfully !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vendor = Vendor::find($id);
        return view('vendor.vendor_details',compact('vendor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $vendor = Vendor::find($id);
        return view('vendor.vendor_edit',compact('vendor'));
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

        $vendor = Vendor::where('id',$id)->update(array_slice($request->all(), 2, 19, true));
        $vendor_login = VendorLoginInfo::where('vendor_id',$id)->update([
            'website' => $request->input('logins_website'),
            'username' => $request->input('username'),
            'password' => Hash::make($request->input('password')),
            'pin' => $request->input('pin'),
            'note' => $request->input('login_note'),
        ]);
        $vendor_poc = VendorPointOfContact::where('vendor_id',$id)->update([
            'name' => $request->input('poc_name'),
            'title' => $request->input('poc_title'),
            'address' => $request->input('poc_address'),
            'phone' => $request->input('poc_phone'),
            'fax' => $request->input('poc_fax'),
            'email' =>  $request->input('poc_email'),
            'website' =>  $request->input('poc_website'),
            'notes' =>  $request->input('poc_notes'),
        ]);
        return redirect()->route('vendor.edit',$id)
        ->with('message','Vendor updated successfully !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Vendor::find($id)->delete();
        return redirect()->route('vendor.index')
                        ->with('message','Vendor Deleted successfully !!');
    }
}
