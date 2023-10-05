@extends('admin_frontend.master')
@section('content')

<div class="content-wrapper">
<form class="form-sample" action={{ url('policy') }} method="post">
@csrf
<!-- form start  -->

<div class="col-12 grid-margin">
  <div class="card">
      <div class="card-body">
          <h4 class="card-title">Add Record</h4>

          <div class="row">
              <div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Customer Email</label>
                      <div class="col-sm-9">
                        <select class="form-control" required name="customer_email" id="customer_email">
                          @foreach ($customers as $customer)
                              <option value="{{ $customer->email }}" data-customer-id="{{ $customer->id }}">{{ $customer->email }}</option>
                          @endforeach
                      </select>
                      </div>
                  </div>
              </div>

            <!-- Add this hidden field to store the selected customer_id -->
<input type="hidden" id="custom_payment_id" name="custom_payment_id" value="">

              <div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Record Type</label>
                      <div class="col-sm-9">
                          <select class="form-control" required name="record_of">
                              <option value="Call">Call</option>
                              <option value="Text">Text</option>
                              <option value="Fax">Fax</option>
                              <option value="Mail">Mail</option>
                              <option value="Email">Email</option>
                              <option value="Meeting">Meeting</option>
                          </select>
                      </div>
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Due Date</label>
                      <div class="col-sm-9">
                          <input type="date" class="form-control" name="date" />
                      </div>
                  </div>
              </div>

              <div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Due Time</label>
                      <div class="col-sm-9">
                          <input type="time" class="form-control"  name="time" />
                      </div>
                  </div>
              </div>

          </div>

          <div class="row">
              <div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Details</label>
                      <div class="col-sm-9">
                          <textarea class="form-control" name="details" rows="4"></textarea>
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Todo List</label>
                      <div class="col-sm-9">
                          <select class="form-control" required name="todo_list">
                              <option value="0">No</option>
                              <option value="1">Yes</option>
                          </select>
                          <span id="todo-validation" class="text-danger"></span>
                      </div>
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Reminder</label>
                      <div class="col-sm-9">
                          <select class="form-control" required name="remainder">
                              <option value="0">No</option>
                              <option value="1">Yes</option>
                          </select>
                          <span id="remainder-validation" class="text-danger"></span>
                      </div>
                  </div>
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Heading</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" required name="heading" />
                    </div>
                </div>
            </div>
              <!-- Add a field for customer_id here if needed -->
          </div>
          {{-- row end --}}

          <div class="row">
            
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-9">
                        <select class="form-control" required name="status" id="status">
                            <option value="Pending">Pending</option>
                            <option value="Process">Process</option>
                            <option value="Complete">Complete</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Asign To</label>
                    <div class="col-sm-9">
                        <select class="form-control" required name="employee_id" >
                            @foreach ($employee as $employee)
                            <option value="{{ $employee->id }}" >{{ $employee->email }}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
            </div>
        

            
            <!-- Add a field for customer_id here if needed -->
        </div>
        {{-- row end --}}
         

           

      </div>
  </div>
</div>






        <div class="col-12 grid-margin">
   {{-- <button type="button" class="btn btn-primary mr-2" onclick="add_policy()">Add Additional Policy </button>  --}}
   <button type="submit" class="btn btn-primary mr-2" >Submit Form </button> 

</div>




    </form>

    <!-- form end -->
  </div>
  <script src="{{asset('assets/js/employee.js')}}"></script>


  {{-- <script>
    // Assuming you have a dropdown select element with the ID 'customer_email'
    const customerEmailSelect = document.getElementById('customer_email');
    const customerIdField = document.getElementById('custom_payment_id');

    customerEmailSelect.addEventListener('change', function() {
        // Set the selected customer_id as the value of the hidden field
        const selectedIndex = this.selectedIndex;
        if (selectedIndex !== -1) {
            const customerId = this.options[selectedIndex].getAttribute('data-customer-id');
            customerIdField.value = customerId; // Fix: use 'customerId' instead of 'custom_payment_id'
        }
    });
</script> --}}

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Include jQuery -->

<script>
    $(document).ready(function() {
        const customerEmailSelect = $('#customer_email');
        const customerIdField = $('#custom_payment_id');
        const recordTypeSelect = $('select[name="record_of"]');
        const dateInput = $('input[name="date"]');
        const timeInput = $('input[name="time"]');
        const detailsTextarea = $('textarea[name="details"]');
        const todoSelect = $('select[name="todo_list"]');
        const remainderSelect = $('select[name="remainder"]');
        const employeeSelect = $('select[name="employee_id"]');

      
        // Function to populate the fields
        function populateFields() {
            const selectedIndex = customerEmailSelect.prop('selectedIndex');
            if (selectedIndex !== -1) {
                const customerId = customerEmailSelect.find('option:selected').data('customer-id');
                customerIdField.val(customerId);
              
                // You need to fetch and set the data from the database here
                // Use AJAX to get the previous data based on the selected customer ID
                // and populate the fields
                $.ajax({
                    url: '/fetch-previous-data', // Change this URL to your route for fetching previous data
                    method: 'GET',
                    data: { customer_id: customerId },
                    success: function(data) {
                        recordTypeSelect.val(data.record_of);
                        dateInput.val(data.date);
                        timeInput.val(data.time);
                        detailsTextarea.val(data.details);
                        todoSelect.val(data.todo_list);
                        remainderSelect.val(data.remainder);
                        employeeSelect.val(data.employee_id);
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            } else {
                // Set a default value for custom_payment_id when no customer is selected
                customerIdField.val(''); // Set it to an appropriate default value or an empty string
            }
        }
      
        // Automatically select the first customer's email and populate fields
        customerEmailSelect.prop('selectedIndex', 0);
        populateFields();
      
        // Call the function when the dropdown changes
        customerEmailSelect.on('change', populateFields);
    });
</script>


<script>
    $(document).ready(function () {
        const todoSelect = $('select[name="todo_list"]');
        const remainderSelect = $('select[name="remainder"]');
        const statusSelect = $('#status');

        // Function to update todo_list and remainder based on status
        function updateFieldsBasedOnStatus() {
            const selectedStatus = statusSelect.val();

            if (selectedStatus === 'Complete') {
                todoSelect.val(0);
                remainderSelect.val(0);
            } else {
                // Set default values for todo_list and remainder if needed
                // For example:
                todoSelect.val(0); // No
                remainderSelect.val(1); // Yes
            }
        }

        // Call the function initially and when status changes
        updateFieldsBasedOnStatus();
        statusSelect.on('change', updateFieldsBasedOnStatus);
    });
</script>



@endsection
