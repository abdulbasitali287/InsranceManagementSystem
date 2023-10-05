@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
  <!-- 1st card -->
  {{ Form::open([ 'url' => $url, 'method' => $method ]) }}
  @method($method)
<div class="col-12 grid-margin" id="appendClone">
<div class="card" id="cloneContainer">
  <div class="card-body">
    <h4 class="card-title">Insured Items</h4>
    <!-- info -->
    <!-- product -->
    <p class="card-description"> Insured Items Fields</p>
    <div class="">
    <!-- row -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              {{ Form::label("vin number","VIN Number" , ["class" => "col-sm-3 col-form-label"]) }}
              <div class="col-sm-9">
                {{ Form::text("vin_num[]", isset($product->vin_num) ? $product->vin_num : "",["class" => "form-control"]) }}
                @error("vin_num[]")
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              {{ Form::label("year","Year" , ["class" => "col-sm-3 col-form-label"]) }}
              <div class="col-sm-9">
                {{ Form::text("year[]", isset($product->year) ? $product->year : "" ,["class" => "form-control"]) }}
                @error("year[]")
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>
          </div>
        </div>
        <!-- end -->

        <!-- row -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              {{ Form::label("make","Make" , ["class" => "col-sm-3 col-form-label"]) }}
              <div class="col-sm-9">
                {{ Form::text("make[]", isset($product->make) ? $product->make : "" ,["class" => "form-control"]) }}
                @error("make[]")
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              {{ Form::label("model","Model" , ["class" => "col-sm-3 col-form-label"]) }}
              <div class="col-sm-9">
                {{ Form::text("model[]", isset($product->model) ? $product->model : "" ,["class" => "form-control"]) }}
                @error("model[]")
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>
          </div>
        </div>
        <!-- end -->

        <!-- row -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              {{ Form::label("effective date","Effective Date" , ["class" => "col-sm-3 col-form-label"]) }}
              <div class="col-sm-9">
                {{ Form::date('effective_date[]', isset($product->effective_date) ? $product->effective_date : "" , ["class" => "form-control"]) }}
                @error("effective_date[]")
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              {{ Form::label("expiry date","Expiry Date" , ["class" => "col-sm-3 col-form-label"]) }}
              <div class="col-sm-9">
                {{ Form::date('exp_date[]', isset($product->exp_date) ? $product->exp_date : ""  , ["class" => "form-control"]) }}
                @error("exp_date[]")
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
              </div>
            </div>
          </div>
        </div>
        <!-- row end -->

        <!-- row -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              {{ Form::label("next amount due","Next Amount Due",["class" => "col-sm-3 col-form-label"]) }}
              <div class="col-sm-9">
                {{ Form::number('next_amount_due[]', isset($product->next_amount_due) ? $product->next_amount_due : ""  ,["class" => "form-control"]) }}
                @error("next_amount_due[]")
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              {{ Form::label("due date","Due Date" , ["class" => "col-sm-3 col-form-label"]) }}
              <div class="col-sm-9">
                {{ Form::date('due_date[]', isset($product->due_date) ? $product->due_date : ""  , ["class" => "form-control"]) }}
                @error("due_date[]")
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>
          </div>
        </div>
        {{-- row end --}}

        

        <!-- row -->
      <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            {{ Form::label("policy number","Policy Number",["class" => "col-sm-3 col-form-label"]) }}
            <div class="col-sm-9">
              {{ Form::text("policy_num[]", isset($product->policy_num) ? $product->policy_num : ""  ,["class" => "form-control"]) }}
              @error("policy_num[]")
                  <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group row">
            {{ Form::label("insurance company","Insurance Company" , ["class" => "col-sm-3 col-form-label"]) }}
            <div class="col-sm-9">
              {{ Form::text("ins_com[]", isset($product->ins_company) ? $product->ins_company : ""  ,["class" => "form-control"]) }}
              @error("ins_com[]")
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
      </div>
      @if ($moreFieldFalse)
      <!-- row -->
      <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <div class="col-sm-9" id="values-container">
              <button type="button" class="btn btn-sm btn-success p-2 my-2" id="moreBtn" onclick="cloneFields()">Add More Vehicles</button>
            </div>
          </div>
        </div>
      </div>
      @endif
        {{-- </form> --}}
      <!-- row -->
      {{-- <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            {{ Form::label("add vehicle","Add Vehicle",["class" => "col-sm-3 col-form-label"]) }}
            <div class="col-sm-9" id="values-container">
              {{ Form::text("add_vehicle[]","",["class" => "form-control"]) }}
              <button type="button" id="add-value" class="btn btn-sm btn-success p-2 my-2">Add More Values</button>
              @error("add_vehicle[]")
                  <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
          </div>
        </div>
      </div> --}}
          </div>    
        </div> {{--  --}}

      </div> {{-- card close --}}

    </div> {{-- grid margin close --}}

    <div class="col-12 grid-margin">
      {{ Form::submit($btnText,['class' => 'btn btn-primary mr-2']) }}
    </div>
      {{ Form::close() }}

          {{-- script tag start --}}

          <script>
                          function cloneFields() { 
                  let clone = document.getElementById("cloneContainer");
                  let appendClone = document.getElementById("appendClone");
                  const cloned = clone.cloneNode(true);
                  appendClone.insertAdjacentElement("beforeend",cloned);
              }
              // let btn = document.querySelectorAll("#moreBtn");
              // btn.forEach((e) => {
              //     e.addEventListener("click",cloneFields);
              // });
          </script>

          <script>
            $(document).ready(function() {
                // Counter to keep track of the number of cloned fields
                var fieldCounter = 1;

                // Handle the click event of the "Add More Fields" button
                $('#add-field').click(function() {
                    fieldCounter++;

                    // Clone the entire form
                    var clonedForm = $('#original-card').clone();

                    // Update input names and IDs to make them unique
                    clonedForm.find(':input').each(function() {
                        var oldName = $(this).attr('name');
                        var oldId = $(this).attr('id');

                        // Append the field counter to the name and ID
                        var newName = oldName + '_' + fieldCounter;
                        var newId = oldId + '_' + fieldCounter;

                        $(this).attr('name', newName);
                        $(this).attr('id', newId);

                        // Clear input values (optional)
                        $(this).val('');
                    });

                    // Append the cloned form to the container
                    $('#form-container').append(clonedForm);
                });
            });

            // document.getElementById('add-value').addEventListener('click', function() {
            //     var container = document.getElementById('values-container');
            //     var input = document.createElement('input');
            //     input.type = 'text';
            //     input.name = "add_vehicle[]";
            //     input.placeholder = 'Enter a value';
            //     input.classList.add('form-control');
            //     input.classList.add('my-2');
            //     container.appendChild(input);
            //     document.getElementById('message').style.display = 'block';
            // });
          </script>
          {{-- script tag close --}}
</div>
@endsection