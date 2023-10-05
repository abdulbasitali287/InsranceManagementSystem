@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">

<form action="{{ route('carrier.update',$carrier->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">
<h4 class="card-title">Edit Carrier Fields</h4>
  <p class="card-description"> Carrier Details </p>
<!-- row  -->
<div class="row">
      <div class="col-md-6">
          <div class="form-group row">
          <label class="col-sm-3 col-form-label">Status</label>
          <div class="col-sm-9">
              <select class="form-control" required name="status" >
              <option>Active</option>
              <option>Inactive</option>
              </select>
          </div>
          </div>
      </div>

    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Carrier Name</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" required name="carrier_name" value="{{ $carrier->carrier_name }}"  />
        </div>
      </div>
    </div>
  </div>
<!-- row -->
<div class="row">
      <div class="col-md-6">
          <div class="form-group row">
          <label class="col-sm-3 col-form-label">Line(s) of Business </label>
          <div class="col-sm-9">
              <select class="form-control" required name="line_of_business">
              <option>Commercial Auto</option>
              <option>Personal Auto</option>
              <option>Home Owners</option>
              <option>General Liability </option>
              <option>Medicare</option>
              <option>Business Owners</option>
              <option>Worker's Compensation</option>
              <option>Agriculture Liability</option>
              <option>Agriculture Package</option>
              <option>Agriculture Property</option>
              <option>Agriculture Scheduled & Unscheduled Personal Property</option>
              <option>Boiler Machinery</option>
              <option>Bond</option>
              <option>BOP Property</option>
              <option>BOP Liability</option>
              <option>Commercial Articles</option>
              <option>Commercial Fire</option>
              <option>Commercial Inland Marine</option>
              <option>Commercial Package</option>
              <option>Commercial Property</option>
              <option>Commercial Umbrella</option>
              <option>Computers</option>
              <option>Comtractor's Equipment Floater</option>
              <option>Crime</option>
              <option>Dental</option>
              <option>Directors Officers</option>
              <option>Dwelling Fire</option>
              <option>Earthquake</option>
              <option>Employers Liability</option>
              <option>Employment Practices Liability</option>
              <option>Errors And Omission</option>
              <option>Fiduciary</option>
              <option>Fine Arts</option>
              <option>Flood</option>
              <option>Garage And Dealers</option>
              <option>Glass</option>
              <option>Hail</option>
              <option>Health</option>
              <option>Installation/Builders Risk</option>
              <option>Internet Liability</option>
              <option>Kidnap And Ransom</option>
              <option>Life</option>
              <option>Liquor Liability</option>
              <option>Miscellaneous Professional Liability</option>
              <option>Mobile Home Owners</option>
              <option>Motor Carrier</option>
              <option>Motor Truck Cargo</option>
              <option>Ocean Marine Commercial</option>
              <option>Personal Inland Marine</option>
              <option>Personal Package</option>
              <option>Personal Umbrella</option>
              <option>Physicians And Surgeons</option>
              <option>Recreational Vehicle</option>
              <option>Renters</option>
              <option>Scheduled Property</option>
              <option>Small Farm/Ranch</option>
              <option>Special Multi-peril</option>
              <option>Surety</option>
              <option>Transportation</option>
              <option>Valuable Papers</option>
              <option>Watercraft (Small Boat)</option>
              <option>Wind Policies</option>
              <option>Workplace Violence</option>
              </select>
          </div>
          </div>
      </div>

    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">DISPLAY NAME</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" required name="display_name" value="{{ $carrier->display_name }}" />
        </div>
      </div>
    </div>
  </div>
<!-- row -->
<div class="row">
      <div class="col-md-6">
          <div class="form-group row">
          <label class="col-sm-3 col-form-label">State(s) Appointed </label>
          <div class="col-sm-9">
          <select class="form-control" name="state_appointed" required>
            <option>Alabama</option>
            <option>Alaska</option>
            <option>Arizona</option>
            <option>Arkansas</option>
            <option>California</option>
            <option>Colorado</option>
            <option>Connecticut</option>
            <option>Delaware</option>
            <option>Florida</option>
            <option>Georgia</option>
            <option>Hawaii</option>
            <option>Idaho</option>
            <option>Illinois</option>
            <option>Indiana</option>
            <option>Iowa</option>
            <option>Kansas</option>
            <option>Kentucky</option>
            <option>Louisiana</option>
            <option>Maine</option>
            <option>Maryland</option>
            <option>Massachusetts</option>
            <option>Michigan</option>
            <option>Minnesota</option>
            <option>Mississippi</option>
            <option>Missouri</option>
            <option>Montana</option>
            <option>Nebraska</option>
            <option>Nevada</option>
            <option>New Hampshire</option>
            <option>New Jersey</option>
            <option>New Mexico</option>
            <option>New York</option>
            <option>North Carolina</option>
            <option>North Dakota</option>
            <option>Ohio</option>
            <option>Oklahoma</option>
            <option>Oregon</option>
            <option>Pennsylvania</option>
            <option>Rhode Island</option>
            <option>South Carolina</option>
            <option>South Dakota</option>
            <option>Tennessee</option>
            <option>Texas</option>
            <option>Utah</option>
            <option>Vermont</option>
            <option>Virginia</option>
            <option>Washington</option>
            <option>West Virginia</option>
            <option>Wisconsin</option>
            <option>Wyoming</option>
          </select>
          </div>
          </div>
      </div>

      <div class="col-md-6">
          <div class="form-group row">
          <label class="col-sm-3 col-form-label">Type of Company </label>
          <div class="col-sm-9">
              <select class="form-control" required name="type_of_company" value="{{ $carrier->type_of_company }}">
              <option>Insurance Company</option>
              <option>MGA</option>
              </select>
          </div>
          </div>
      </div>
</div>
<!-- row -->
<div class="row">
    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Tax ID</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" required name="tax_id" value="{{ $carrier->tax_id }}" />
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">NAIC</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" required  name="NAIC" value="{{ $carrier->NAIC }}"/>
        </div>
      </div>
    </div>
  </div>
<!-- row -->
<div class="row">
    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Phone </label>
        <div class="col-sm-9">
          <input type="tel" class="form-control" required name="phone" value="{{ $carrier->phone }}" />
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Phone Type</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="phone_type" value="{{ $carrier->phone_type }}" />
        </div>
      </div>
    </div>
  </div>
<!-- row -->
<div class="row">
    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Fax </label>
        <div class="col-sm-9">
          <input type="tel" class="form-control" required name="fax" value="{{ $carrier->fax }}" />
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Fax Type </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="fax_type"  value="{{ $carrier->fax_type }}" />
        </div>
      </div>
    </div>
  </div>
<!-- row -->
<div class="row">
    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Email  </label>
        <div class="col-sm-9">
          <input type="email" class="form-control" required name="email" value="{{ $carrier->email }}" />
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Email Type </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="email_type" value="{{ $carrier->email_type }}" />
        </div>
      </div>
    </div>
  </div>
<!-- row -->
<div class="row">
    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Address   </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" required name="address" value="{{ $carrier->address }}" />
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Website  </label>
        <div class="col-sm-9">
          <input type="url" class="form-control" required name="website" value="{{ $carrier->website }}" />
        </div>
      </div>
    </div>
  </div>
<!-- row -->
<div class="row">
    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Notes   </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="notes" value="{{ $carrier->notes }}" />
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">UPLOAD FILE(S)  </label>
        <div class="col-sm-9">
          <input type="file" class="form-control" name="file" required   />
        </div>
      </div>
    </div>
  </div>
<!-- row -->
<div class="row">
    {{-- <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Contracted  </label>
        <div class="col-sm-9">
          <input type="date" class="form-control" name="contracted"  />
        </div>
      </div>
    </div> --}}
    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Url  </label>
        <div class="col-sm-9">
          <input type="url" class="form-control" name="url" value="{{ $carrier->url }}"  />
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Website_link  </label>
        <div class="col-sm-9">
          <input type="url" class="form-control" name="website_link" value="{{ $carrier->website_link }}"  />
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Type  </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="types" value="{{ $carrier->type }}"  />
        </div>
      </div>
    </div>
  </div>
</div></div></div>

<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">

<p class="card-description"> Agency Information </p>

<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Agent ID  </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" required name="agent_id" value="{{ $carrier->agencyinformation->agent_id }}"  />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Portal   </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" required name="portal" value="{{ $carrier->agencyinformation->portal }}" />
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Portal Type  </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="portal_type" value="{{ $carrier->agencyinformation->portal_type }}"  />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">User ID  </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" required name="user_id"  value="{{ $carrier->agencyinformation->user_id }}" />
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Password  </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control"required name="password"  value="{{ $carrier->agencyinformation->password }}"  />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Notes  </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="notes"  value="{{ $carrier->agencyinformation->notes }}" />
                  </div>
                </div>
              </div>
            </div>

</div></div></div>

<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">
<p class="card-description"> Appointed Agents  </p>

<div class="row">
<div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Agent </label>
                    <div class="col-sm-9">
                        <select class="form-control " name="agent" required>
                        <option>ex</option>
                        <option>ex</option>
                        </select>
                    </div>
                    </div>
                </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Agent ID   </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" required name="agent_id" value="{{ $carrier->appointedagents[0]->agent_id }}"    />
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Portal </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" required name="portal" value="{{ $carrier->appointedagents[0]->portal }}"  />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Portal Type  </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="portal_type" value="{{ $carrier->appointedagents[0]->portal_type }}" />
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">User ID </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" required name="user_id" value="{{ $carrier->appointedagents[0]->user_id }}"  />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Password </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" required name="password" value="{{ $carrier->appointedagents[0]->password }}" />
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
<div class="row">
<div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Commission Paid </label>
                    <div class="col-sm-9">
                        <select class="form-control" name="commission_paid" required>
                        <option>Direct to Agent</option>
                        <option>Direct to Agency</option>
                        <option>(Type In)</option>
                        </select>
                    </div>
                    </div>
                </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Notes   </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="notes"  value="{{ $carrier->appointedagents[0]->notes }}"  />
                  </div>
                </div>
              </div>
            </div>
</div></div></div>

<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">

<p class="card-description"> Certification </p>

<div class="row">
<div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Certification Req:  </label>
                    <div class="col-sm-9">
                        <select class="form-control" name="certification_req" value=""  required>
                        <option>Yes</option>
                        <option>No</option>
                        </select>
                    </div>
                    </div>
                </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Certification Notes   </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="certification_notes"  value="{{ $carrier->certification->certification_notes }}"  />
                  </div>
                </div>
              </div>
            </div>

</div></div></div>

<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">
<p class="card-description"> Commission Info </p>
{{-- <div class="row"> --}}
{{-- <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Upload</label>
                  <div class="col-sm-9">
                  <button type="button" class="btn btn-primary mr-2" name="upload_1099">Upload 1099</button>
                  <button type="button" class="btn btn-primary mr-2" name="contrat">Contract </button>

                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Schedules</label>
                  <div class="col-sm-9">
                  <button type="button" class="btn btn-primary mr-2" name="schedules">Commission Schedules </button>
                  </div>
                </div>
              </div>
        </div> --}}
<!-- row -->

<div class="row">
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Upload  </label>
      <div class="col-sm-9">
        <input type="file" class="form-control" required name="upload" />
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Contract</label>
      <div class="col-sm-9">
        <input type="file" class="form-control" required name="contract" />
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Schdules  </label>
      <div class="col-sm-9">
        <input type="file" class="form-control" required name="commission_schedules" />
      </div>
    </div>
  </div>
</div>

</div></div></div>
<div class="col-12 grid-margin">
  <div class="card">
  <div class="card-body">
  <p class="card-description"> Current Clients And Agents </p>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Current Appointed Agents  </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" required name="current_appointed_agents" value="{{ $carrier->currentappointedagents->current_appointed_agents }}" />
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Current Appointed Clients</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" required name="current_appointed_agents" value="{{ $carrier->currentclients->current_appointed_agents }}" />
        </div>
      </div>
    </div>
  </div>
<!-- row -->
  <!-- row -->
  </div></div></div>

<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">
<p class="card-description"> Carrier Rep Info  </p>
<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Name  </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" required name="name" value="{{ $carrier->carrierRepinfo[0]->name }}" />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Title </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" required name="title" value="{{ $carrier->carrierRepinfo[0]->title }}" />
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Phone  </label>
                  <div class="col-sm-9">
                    <input type="tel" class="form-control" required name="phone" value="{{ $carrier->carrierRepinfo[0]->phone }}"  />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Fax</label>
                  <div class="col-sm-9">
                    <input type="tel" class="form-control" required name="fax" value="{{ $carrier->carrierRepinfo[0]->fax }}" />
                  </div>
                </div>
              </div>
            </div>
<!-- row -->
<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Email  </label>
                  <div class="col-sm-9">
                    <input type="email" class="form-control"required name="email"  value="{{ $carrier->carrierRepinfo[0]->email }}"  />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Notes</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="notes"  value="{{ $carrier->carrierRepinfo[0]->notes }}" />
                  </div>
                </div>
              </div>
            </div>
<!-- row -->   
<div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label"> </label>
                  <div class="col-sm-9">
                  <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                </div>
              </div>
              
            </div>
</div></div></div>

</form>

</div>

@endsection