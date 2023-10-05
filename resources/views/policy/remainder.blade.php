@extends('admin_frontend.master')
@section('content')
<div class="content-wrapper">

  <!-- Body start  -->

<!-- form start -->
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">All Reminder</h4>
                    <p class="card-description">  <code></code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>
                          <h6 class="card-title">Email</h6>

                            </th>
                            <th> 
                          <h6 class="card-title">Type</h6>
                                 </th>

                                 <th> 
                                  <h6 class="card-title">Assign To</h6>
                                         </th>

                            <th> 
                          <h6 class="card-title">Reminder</h6>
                            </th>
                            <th> 
                          <h6 class="card-title">ToDo</h6>
                                 </th>



                                 <th> 
                                  <h6 class="card-title">Created At</h6>
                                       </th>
      
                                <th> 
                                    <h6 class="card-title">Status</h6>
                                     </th>



                            <th> 
                          <h6 class="card-title">Due Date</h6>
                                 </th>
                            <th> 
                          <h6 class="card-title">Title</h6>

                            </th>
                          
                            <th>  
                          <h6 class="card-title">Actions</h6>
                            </th>
                          </tr>
                        </thead>

                      <tbody>
        @foreach ($policy as $p)
            <tr>
                <td> 
                  <a href="{{ url('policy/'.$p->id.'/edit') }}">
                    {{ $p->customer_email }}
                  </a>
                  </td>



                <td>{{ $p->record_of }}</td>
                <td>{{ $p->employee->name }}</td>

                <td>
                    @if ($p->remainder)
                        <i class="mdi mdi-clipboard-check text-success"></i>
                    @else
                        <i class="mdi mdi-close-box text-danger"></i>
                    @endif
                </td>
                <td>
                    @if ($p->todo_list)
                        <i class="  mdi mdi-clipboard-check  text-success "></i>
                    @else
                        <i class=" mdi mdi-close-box  text-danger"></i>
                    @endif
                </td>



                {{-- <td>{{ $p->created_at->diffForHumans() }} </td> --}}
                <td>{{ $p->created_at }} </td>


                <td>
                      
                        @if ($p->status === 'Process')
                        <div class="badge badge-outline-primary">{{$p->status}}</div>
                    @elseif ($p->status === 'Pending')
                        <div class="badge badge-outline-warning">{{$p->status}}</div>
                    @elseif ($p->status === 'Complete')
                        <div class="badge badge-outline-success">{{$p->status}}</div>
                    @else
                        <div class="badge badge-outline-secondary">Unknown</div>
                    @endif


                  </td>


                <td>{{ $p->date }}</td>
                <td>{{ $p->heading }}</td>
                <td>
                    <a href="{{ url('policy/'.$p->id.'/edit') }}">
                        <i class="mdi mdi-table-edit" style="color: yellow" title="Edit"></i>
                    </a>
                    <!-- Button trigger modal -->
                    @php
                        $url = 'policy/'.$p->id;
                    @endphp
                    <i class="mdi mdi-delete" style="color:red" onclick="showForm('<?php echo $url; ?>')"></i>
                    <a href="{{ url('policy/'.$p->id) }}">
                        <i class="mdi mdi-eye" style="color:green" title="View"></i>
                    </a>
                    <!-- ended -->
                </td>
            </tr>
        @endforeach
    </tbody>

                      </table>
                    </div>
                  </div>
                </div>
              </div>

 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 " id="exampleModalLabel">Delete Policy Details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" >
        @method('delete')
        @csrf
      <div class="modal-body">
        Are you sure you want to delete?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Delete</button>
      </div>
    </form>
    </div>
  </div>
</div>
<script>
  function showForm(url){
  
  $("#exampleModal form").attr('action', url);
  $("#exampleModal").modal("show");
  }
  
  </script>
@endsection
