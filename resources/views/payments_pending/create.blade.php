@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
  {{ Form::open([
    'url' => url("payment"),
    'files' => true
  ]) }}
{{-- <form action="{{ url('payment')}}" method="POST" enctype="multipart/form-data"> --}}
  {{-- @csrf --}}
<!-- 1st card -->
<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">
<h4 class="card-title">Customer Information</h4>
<!-- info -->
<!-- product -->
<p class="card-description"> Customer Information Fields</p>
            <!-- row  -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  {{ Form::label("customer name","Name",["class" => "col-sm-3 col-form-label"]) }}
                  <div class="col-sm-9">
                    {{ Form::text("name","",["class" => "form-control"]) }}
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  {{ Form::label("bussiness name","Bussiness Name",["class" => "col-sm-3 col-form-label"]) }}
                  <div class="col-sm-9">
                    {{ Form::text("bussiness_name","",["class" => "form-control"]) }}
                  </div>
                </div>
              </div>
            </div>
          <!-- row end -->

          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                {{ Form::label("address","Address",["class" => "col-sm-3 col-form-label"]) }}
                <div class="col-sm-9">
                  {{ Form::text("address","",["class" => "form-control"]) }}
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                {{ Form::label("phone number","Phone No",["class" => "col-sm-3 col-form-label"]) }}
                <div class="col-sm-9">
                  {{ Form::text("phone_no","",["class" => "form-control"]) }}
                </div>
              </div>
            </div>
          </div>

          <!-- row -->
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                {{ Form::label("email","Email",["class" => "col-sm-3 col-form-label"]) }}
                <div class="col-sm-9">
                  {{Form::email("email","",[ "class" => "form-control" ])}}
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group row">
                {{ Form::label("insurance company","Insurance Company",["class" => "col-sm-3 col-form-label"]) }}
                <div class="col-sm-9">
                  {{ Form::text("insurance_com","",["class" => "form-control"]) }}
                </div>
              </div>
            </div>
          </div>

          <!-- row -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              {{ Form::label("policy number","Policy Number",["class" => "col-sm-3 col-form-label"]) }}
              <div class="col-sm-9">
                {{ Form::text("policy_num","",["class" => "form-control"]) }}
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              {{ Form::label("payment_due","Payment Due",["class" => "col-sm-3 col-form-label"]) }}
              <div class="col-sm-9">
                {{ Form::number('payment_due', "" ,["class" => "form-control"]) }}
              </div>
            </div>
          </div>
        </div>

        <!-- row -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              {{ Form::label("payment_due_date","Payment Due Date" , ["class" => "col-sm-3 col-form-label"]) }}
              <div class="col-sm-9">
                {{ Form::date('name', "" , ["class" => "form-control"]) }}
              </div>
            </div>
          </div>
          {{-- <div class="col-md-6">
            <div class="form-group row">
              {{ Form::label("payment_due_date","Payment Due Date" , ["class" => "col-sm-3 col-form-label"]) }}
              <div class="col-sm-9">
                <input type="text" class="form-control" name="ssn_sp"  />
              </div>
            </div>
          </div> --}}
        </div>
        <!-- end -->

        {{-- add vehicles start --}}
            <div class="card-title mt-4">
              <h4>Vehicles</h4>
            </div>
            <p class="card-description">Add Vehicles</p>
            <!-- row -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  {{ Form::label("vehicle year","Vehicle Year" , ["class" => "col-sm-3 col-form-label"]) }}
                  <div class="col-sm-9">
                    {{ Form::text("vehicle_year","",["class" => "form-control"]) }}
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  {{ Form::label("make model","Make Model" , ["class" => "col-sm-3 col-form-label"]) }}
                  <div class="col-sm-9">
                    {{ Form::text("make_model","",["class" => "form-control"]) }}
                  </div>
                </div>
              </div>
            </div>
            <!-- end -->

              <!-- row -->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    {{ Form::label("vin number","VIN Number" , ["class" => "col-sm-3 col-form-label"]) }}
                    <div class="col-sm-9">
                      {{ Form::text("vin_num","",["class" => "form-control"]) }}
                    </div>
                  </div>
                </div>
              </div>
              <!-- end -->
        {{-- add vehicles end --}}

        {{-- add loss payee / additional interest start --}}
            <div class="card-title mt-4">
              <h4>Loss Payee / Additional Interest</h4>
            </div>
              <p class="card-description">Loss Payee / Additional Interest Fields</p>
              <!-- row -->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    {{ Form::label("lien holder","Lien Holder" , ["class" => "col-sm-3 col-form-label"]) }}
                    <div class="col-sm-9">
                      {{ Form::text("lien_holder","",["class" => "form-control"]) }}
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    {{ Form::label("loan number","Loan Number" , ["class" => "col-sm-3 col-form-label"]) }}
                    <div class="col-sm-9">
                      {{ Form::text("loan_num","",["class" => "form-control"]) }}
                    </div>
                  </div>
                </div>
              </div>
              <!-- end -->
        {{-- add loss payee / additional interest end --}}

        {{-- add drivers start --}}
            <div class="card-title mt-4">
              <h4>Add Drivers</h4>
            </div>
            <p class="card-description">Add Driver Fields</p>
              <!-- row -->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    {{ Form::label("driver name","Name" , ["class" => "col-sm-3 col-form-label"]) }}
                    <div class="col-sm-9">
                      {{ Form::text("driver_name","",["class" => "form-control"]) }}
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    {{ Form::label("date of birth","dob" , ["class" => "col-sm-3 col-form-label"]) }}
                    <div class="col-sm-9">
                      {{ Form::date('driver_dob', "" , ["class" => "form-control"]) }}
                    </div>
                  </div>
                </div>
              </div>
              <!-- row end -->
              <!-- row -->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    {{ Form::label("driver gender","Gender" , ["class" => "col-sm-3 col-form-label"]) }}
                    <div class="col-sm-9">
                      {{ Form::select('driver_gender', ['male' => 'Male', 'female' => 'Female'], null, ['placeholder' => 'select gender...' , 'class' => 'form-control']) }}
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                      {{ Form::label("driver_lic_no","dob" , ["class" => "col-sm-3 col-form-label"]) }}
                    <div class="col-sm-9">
                      {{ Form::text('driver_lic_no', "" , ["class" => "form-control"]) }}
                    </div>
                  </div>
                </div>
              </div>
              <!-- row end -->
        {{-- add drivers end --}}














             
              {{-- row new --}}

                            <!-- row -->

                {{-- <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Service CO </label>
                    <div class="col-sm-9">
                    <select class="form-control" name="service_co" >
                    <option value="Partner 1">Partner 1</option>
                    <option value="Partner 2">Partner 2</option>
                    </select>
                    </div>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Hire Date </label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" name="hire_date"  />
                    </div>
                  </div>
                </div>
                             
            </div>    --}}
            {{-- row end  --}}

                <!-- row -->
                {{-- <div class="row">

                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Last Activity </label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" name="last_activity"  />
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Busines name </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="business_name"/>
                      </div>
                    </div>
                  </div>
                  
                  </div> --}}
                  <!-- end -->

                  {{-- row end  --}}

                <!-- row -->
                {{-- <div class="row">

                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">EIN </label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control" name="ein" />
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Busines Address </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="address_bu"  />
                      </div>
                    </div>
                  </div>
                  
                  </div> --}}
                  <!-- end -->

                  {{-- <div class="row">

                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Total Fees</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" name="fees" required />
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Amount paid</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" name="amount_paid" required />
                        </div>
                      </div>
                    </div>

                    </div> --}}
                    <!-- end -->

                    {{-- <div class="row">

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Amount balance</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" name="balance" required />
                          </div>
                        </div>
                      </div>
  
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Paid Date</label>
                          <div class="col-sm-9">
                            <input type="date" class="form-control" name="pay_date"  />
                          </div>
                        </div>
                      </div>
                        
                      </div> --}}
                      <!-- end -->

                      <div class="row">

                        {{-- <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Next payment</label>
                            <div class="col-sm-9">
                              <input type="date" class="form-control" name="next_pay"  />
                            </div>
                          </div>
                        </div> --}}

                        {{-- file hide start --}}

                        {{-- <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">File upload</label>
                            <div class="col-sm-9">
                              <input type="file" class="form-control" name="file"   />
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <button type="button" class="btn btn-primary" id="addFileInput">Add More Files</button>
                      </div> --}}
    
                       
                          
                        {{-- </div> --}}
                         {{-- <br> --}}
                        <!-- end -->

                        {{-- <div class="row">

                       
                          <div id="additionalFileInputs">
                            <!-- Additional file inputs go here -->
                            <div class="row">
                                <!-- File input 2 -->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">File upload 2</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" name="file2" />
                                        </div>
                                    </div>
                                </div>
                        
                                <!-- File input 3 -->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">File upload 3</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" name="file3" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                  <button type="button" class="btn btn-primary" id="addFileInput2">Add More Files</button>
                              </div>
            
                                <!-- ... Repeat for file inputs 4 and 5 ... -->
                            </div>
                        </div>
                        
      
                         
                            
                          </div> <br> --}}
                          <!-- end -->


                          {{-- <div class="row">

                            <div id="additionalFileInputs2">
                              <!-- Additional file inputs go here -->
                              <div class="row">
                                  <!-- File input 2 -->
                                  <div class="col-md-6">
                                      <div class="form-group row">
                                          <label class="col-sm-3 col-form-label">File upload 4</label>
                                          <div class="col-sm-9">
                                              <input type="file" class="form-control" name="file4" />
                                          </div>
                                      </div>
                                  </div>
                          
                                  <!-- File input 3 -->
                                  <div class="col-md-6">
                                      <div class="form-group row">
                                          <label class="col-sm-3 col-form-label">File upload 5</label>
                                          <div class="col-sm-9">
                                              <input type="file" class="form-control" name="file5" />
                                          </div>
                                      </div>
                                  </div>
                                  <!-- ... Repeat for file inputs 4 and 5 ... -->
                              </div>
                          </div> --}}
                          

                          {{-- file hide --}}
        
                           
                              
                            </div>
                            <!-- end -->


  <!-- end -->
</div></div></div>



<div class="col-12 grid-margin">
   {{-- <button type="submit" class="btn btn-primary mr-2" >Add  </button>  --}}
  {{ Form::submit("Add",['class' => 'btn btn-primary mr-2']) }}
</div>

{{ Form::close() }}
{{-- </form> --}}
</div>
<script src="{{asset('assets/js/employee.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
      // $.ajax({
      //   type: "POST",
      //   url: "{{{ url('payments/store') }}}",
      //   data: "data",
      //   dataType: "dataType",
      //   success: function (response) {
      //     console.log(response);
      //   },
      //   error : function (error){
      //     console.log(error);
      //   }
      // });

        // Initially hide additional file inputs
        $('#additionalFileInputs').hide();

        // Handle the "Add More Files" button click
        $('#addFileInput').click(function () {
            // Toggle the visibility of additional file inputs
            $('#additionalFileInputs').slideToggle();
        });

        $('#additionalFileInputs2').hide();

        // Handle the "Add More Files" button click
        $('#addFileInput2').click(function () {
            // Toggle the visibility of additional file inputs
            $('#additionalFileInputs2').slideToggle();
        });
    });
</script>


@endsection
