<?php

namespace App\Http\Controllers;
use App\Models\Carrier;
use App\Models\CarrierRepInfo;
use App\Models\CurrentAppointedAgents;
use App\Models\CurrentClients;
use App\Models\AgencyInformation;
use App\Models\AppointedAgents;
use App\Models\Certification;
use App\Models\CommissionInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarrierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Carrier::orderBy('id','DESC')->get()->all();
        return view('carrier.index',compact('data'));     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carrier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carrier = Carrier::create([
            'status' =>$request->status,
            'carrier_name' =>$request->carrier_name,
            'display_name' =>$request->display_name,
            'line_of_business' =>$request->line_of_business,
            'state_appointed' =>$request->state_appointed,
            'type_of_company' =>$request->type_of_company,
            'tax_id' =>$request->tax_id,
            'NAIC' =>$request->NAIC,
            'phone' =>$request->phone,
            'phone_type' =>$request->phone_type,
            'fax' =>$request->fax,
            'fax_type' =>$request->fax_type,
            'email' =>$request->email,
            'email_type' =>$request->email_type,
            'address' =>$request->address,
            'website' =>$request->website,
            'notes' =>$request->notes,
            'file' => $request->file('file')->store('carrier', 'public'),
            'url' =>$request->url,
            'website_link' =>$request->website_link,
            'types' =>$request->types,
          ]); 
          $carrier->save();

        $CarrierRepInfo = CarrierRepInfo::create([
            'name' => $request->input('name'),
            'title' => $request->input('title'),
            'phone' => $request->input('phone'),
            'fax' => $request->input('fax'),
            'email' => $request->input('email'),
            'notes' => $request->input('notes'),
            'current_policies' => $request->input('current_policies'),
            'contracted' => $request->input('contracted'),
            'carrier_id' => $carrier->id,
        ]);
        $CarrierRepInfo->save();

        $CurrentAppointedAgents = CurrentAppointedAgents::create([
            'current_appointed_agents' => $request->input('current_appointed_agents'),
            'carrier_id' => $carrier->id,    
        ]);
        $CurrentAppointedAgents->save();

        $CurrentClients = CurrentClients::create([
            'current_appointed_agents' => $request->input('current_appointed_agents'),
            'carrier_id' => $carrier->id,    
        ]);
        $CurrentClients->save();

        $AgencyInformation = AgencyInformation::create([
            'agent_id' => $request->input('agent_id'),
            'portal' => $request->input('portal'),
            'portal_type' => $request->input('portal_type'),
            'user_id' => $request->input('user_id'),
            'password' => $request->input('password'),
            'notes' => $request->input('notes'),
            'carrier_id' => $carrier->id,    
        ]);
        $AgencyInformation->save();

        $AppointedAgents = AppointedAgents::create([
            'agent' => $request->input('agent'),
            'agent_id' => $request->input('agent_id'),
            'portal' => $request->input('portal'),
            'portal_type' => $request->input('portal_type'),
            'user_id' => $request->input('user_id'),
            'password' => $request->input('password'),
            'commission_paid' => $request->input('commission_paid'),
            'notes' => $request->input('notes'),
            'carrier_id' => $carrier->id,    
        ]);
        $AppointedAgents->save();


        $Certification = Certification::create([
            'certification_req' => $request->input('certification_req'),
            'certification_notes' => $request->input('certification_notes'),
            'carrier_id' => $carrier->id,    
        ]);
        $Certification->save();

        $CommissionInfo = CommissionInfo::create([
            'upload' => $request->file('upload')->store('carrier', 'public'),
            'contract' => $request->file('contract')->store('carrier', 'public'),
            'commission_schedules' => $request->file('commission_schedules')->store('carrier', 'public'),
            'carrier_id' => $carrier->id,    
        ]);
        $CommissionInfo->save();

        return redirect()->route('carrier.index')
        ->with('message','Carrier created successfully !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carrier = Carrier::find($id);
        return view('carrier.view',compact('carrier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carrier = Carrier::find($id);
        return view('carrier.edit',compact('carrier'));
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
        $carrier = Carrier::find($id)->update([
            'status' =>$request->status,
            'carrier_name' =>$request->carrier_name,
            'display_name' =>$request->display_name,
            'line_of_business' =>$request->line_of_business,
            'state_appointed' =>$request->state_appointed,
            'type_of_company' =>$request->type_of_company,
            'tax_id' =>$request->tax_id,
            'NAIC' =>$request->NAIC,
            'phone' =>$request->phone,
            'phone_type' =>$request->phone_type,
            'fax' =>$request->fax,
            'fax_type' =>$request->fax_type,
            'email' =>$request->email,
            'email_type' =>$request->email_type,
            'address' =>$request->address,
            'website' =>$request->website,
            'notes' =>$request->notes,
            'file' => $request->file('file')->store('carrier', 'public'),
            'url' =>$request->url,
            'website_link' =>$request->website_link,
            'types' => $request->types,
          ]); 
        $CarrierRepInfo = CarrierRepInfo::where('carrier_id',$id)->update([
            'name' => $request->input('name'),
            'title' => $request->input('title'),
            'phone' => $request->input('phone'),
            'fax' => $request->input('fax'),
            'email' => $request->input('email'),
            'notes' => $request->input('notes'),
            'current_policies' => $request->input('current_policies'),
            'contracted' => $request->input('contracted'),
        ]);
        $CurrentAppointedAgents = CurrentAppointedAgents::where('carrier_id',$id)->update([
            'current_appointed_agents' => $request->input('current_appointed_agents'),
        ]);
        $CurrentClients = CurrentClients::where('carrier_id',$id)->update([
            'current_appointed_agents' => $request->input('current_appointed_agents'),
        ]);
        $AgencyInformation = AgencyInformation::where('carrier_id',$id)->update([
            'agent_id' => $request->input('agent_id'),
            'portal' => $request->input('portal'),
            'portal_type' => $request->input('portal_type'),
            'user_id' => $request->input('user_id'),
            'password' => $request->input('password'),
            'notes' => $request->input('notes'),
        ]);
        $AppointedAgents = AppointedAgents::where('carrier_id',$id)->update([
            'agent' => $request->input('agent'),
            'agent_id' => $request->input('agent_id'),
            'portal' => $request->input('portal'),
            'portal_type' => $request->input('portal_type'),
            'user_id' => $request->input('user_id'),
            'password' => $request->input('password'),
            'commission_paid' => $request->input('commission_paid'),
            'notes' => $request->input('notes'),
        ]);
        $Certification = Certification::where('carrier_id',$id)->update([
            'certification_req' => $request->input('certification_req'),
            'certification_notes' => $request->input('certification_notes'),
        ]);
        $CommissionInfo = CommissionInfo::where('carrier_id',$id)->update([
            'upload' => $request->file('upload')->store('carrier', 'public'),
            'contract' => $request->file('contract')->store('carrier', 'public'),
            'commission_schedules' => $request->file('commission_schedules')->store('carrier', 'public'),
        ]);
        return redirect()->route('carrier.index')
        ->with('message','Carrier Updated successfully !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carrier = Carrier::find($id)->delete();
        return redirect()->route('carrier.index')
                        ->with('message','Carrier Deleted successfully !!');
    }
}
