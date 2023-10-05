@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">

<form action="">

<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">
<h4 class="card-title">Carrier Fields</h4>
  <p class="card-description"> Carrier Details </p>
<!-- row  -->
<div class="row">
      <div class="col-md-6">
          <div class="form-group row">
          <label class="col-sm-3 col-form-label">Status</label>
          <div class="col-sm-9">
          <p class="col-form-label text-muted" >{{ $carrier->status }}</p>

          </div>
          </div>
      </div>

    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Carrier Name</label>
        <div class="col-sm-9">
        <p class="col-form-label text-muted" >{{ $carrier->carrier_name }}</p>
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
          <p class="col-form-label text-muted" >{{ $carrier->line_of_business }}</p>
          </div>
          </div>
      </div>

    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">DISPLAY NAME</label>
        <div class="col-sm-9">
        <p class="col-form-label text-muted" >{{ $carrier->display_name }}</p>
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
          <p class="col-form-label text-muted" >{{ $carrier->state_appointed }}</p>
          </div>
          </div>
      </div>

      <div class="col-md-6">
          <div class="form-group row">
          <label class="col-sm-3 col-form-label">Type of Company </label>
          <div class="col-sm-9">
          <p class="col-form-label text-muted" >{{ $carrier->state_appointed }}</p>
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
        <p class="col-form-label text-muted" >{{ $carrier->tax_id }}</p>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">NAIC</label>
        <div class="col-sm-9">
        <p class="col-form-label text-muted" >{{ $carrier->NAIC }}</p>
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
        <p class="col-form-label text-muted" >{{ $carrier->phone }}</p>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Phone Type</label>
        <div class="col-sm-9">
        <p class="col-form-label text-muted" >{{ $carrier->phone_type }}</p>
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
        <p class="col-form-label text-muted" >{{ $carrier->fax }}</p>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Fax Type </label>
        <div class="col-sm-9">
        <p class="col-form-label text-muted" >{{ $carrier->fax_type }}</p>
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
        <p class="col-form-label text-muted" >{{ $carrier->email }}</p>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Email Type </label>
        <div class="col-sm-9">
        <p class="col-form-label text-muted" >{{ $carrier->email_type }}</p>
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
        <p class="col-form-label text-muted" >{{ $carrier->address }}</p>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Website  </label>
        <div class="col-sm-9">
        <p class="col-form-label text-muted" >{{ $carrier->website }}</p>
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
        <p class="col-form-label text-muted" >{{ $carrier->notes }}</p>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">UPLOAD FILE(S)  </label>
        <div class="col-sm-9">
        <div class="">
          <img  src="{{ asset('storage/'.$carrier->file) }}" height="100px" width="100px" alt="job image" title="job image">
        </div>
        </div>
      </div>
    </div>
  </div>
<!-- row -->
{{-- <div class="row">
    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Contracted  </label>
        <div class="col-sm-9">
        <p class="col-form-label text-muted" >example</p>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group row">
      </div>
    </div>
  </div> --}}
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
                  <p class="col-form-label text-muted" >{{ $carrier->agencyinformation->agent_id }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Portal   </label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted" >{{ $carrier->agencyinformation->portal }}</p>
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
                  <p class="col-form-label text-muted" >{{ $carrier->agencyinformation->portal_type }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">User ID  </label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted" >{{ $carrier->agencyinformation->user_id }}</p>
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
                  <p class="col-form-label text-muted" >{{ $carrier->agencyinformation->password }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Notes  </label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted" >{{ $carrier->agencyinformation->notes }}</p>
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
                    <p class="col-form-label text-muted" >{{ $carrier->appointedagents[0]->agent }}</p>
                    </div>
                    </div>
                </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Agent ID   </label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted" >{{ $carrier->appointedagents[0]->agent_id }}</p>
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
                  <p class="col-form-label text-muted" >{{ $carrier->appointedagents[0]->portal }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Portal Type  </label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted" >{{ $carrier->appointedagents[0]->portal_type }}</p>
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
                  <p class="col-form-label text-muted" >{{ $carrier->appointedagents[0]->user_id }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Password </label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted" >{{ $carrier->appointedagents[0]->password }}</p>
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
                    <p class="col-form-label text-muted" >{{ $carrier->appointedagents[0]->commission_paid }}</p>
                    </div>
                    </div>
                </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Notes   </label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted" >{{ $carrier->appointedagents[0]->notes }}</p>
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
          <p class="col-form-label text-muted" >{{ $carrier->certification->certification_req }}</p>
                    </div>
                    </div>
                </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Certification Notes   </label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted" >{{ $carrier->certification->certification_notes }}</p>
                  </div>
                </div>
              </div>
            </div>

</div></div></div>

<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">
<p class="card-description"> Commission Info </p>
<!-- row -->
<div class="row">
<div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Upload 1099</label>
                  <div class="col-sm-9">
                  <div class="">
                    <img  src="{{ asset('storage/'.$carrier->commissioninfo->upload) }}" height="100px" width="100px" alt="job image" title="job image">
                  </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Contract</label>
                  <div class="col-sm-9">
                  <div class="">
                    <img  src="{{ asset('storage/'.$carrier->commissioninfo->contract) }}" height="100px" width="100px" alt="job image" title="job image">
                      </div>
                                      </div>
                </div>
              </div>
        </div>
<!-- row -->
<div class="row">
<div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Schedules</label>
                  <div class="col-sm-9">
                    <img  src="{{ asset('storage/'.$carrier->commissioninfo->commission_schedules) }}" height="100px" width="100px" alt="job image" title="job image">

                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                </div>
              </div>
        </div>
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
                  <p class="col-form-label text-muted" >{{ $carrier->carrierRepinfo[0]->name }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Title </label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted" >{{ $carrier->carrierRepinfo[0]->title }}</p>
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
                  <p class="col-form-label text-muted" >{{ $carrier->carrierRepinfo[0]->phone }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Fax</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted" >{{ $carrier->carrierRepinfo[0]->fax }}</p>
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
                  <p class="col-form-label text-muted" >{{ $carrier->carrierRepinfo[0]->email }}</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Notes</label>
                  <div class="col-sm-9">
                  <p class="col-form-label text-muted" >{{ $carrier->carrierRepinfo[0]->notes }}</p>
                  </div>
                </div>
              </div>
            </div>
<!-- row -->   
</div></div></div>

</form>

</div>

@endsection