@extends('layouts.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
{{-- ADD STUDENT MODEL --}}
  
  <!-- Modal -->
  {{-- class="reveal-modal" --}}
  <div class="modal fade " id="NewStudentModal" tabindex="-1" aria-labelledby="studentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="studentModalLabel"><b>New Student</b></h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <form id="add_student_id">
            {{ csrf_field() }}
              <div class="row">
                  <div class="col-md-6">
                    <label for="std_name">Student Name</label>
                    <input type="text" name="student_name" id="std_name" placeholder="Student Name" class="form-control">
                  </div>

                  <div class="col-md-6">
                    <label for="father_name">Father Name</label>
                    <input type="text" name="father_name" id="father_name" placeholder="Father Name" class="form-control">
                  </div>
              </div>
              
              <div class="row">
                  <div class="col-md-6">
                    <label for="gender">Gender</label><br>

                    <input type="radio" name="gender" id="male" value="male">
                    <label for="male">Male</label>

                    <input type="radio" name="gender" id="female" value="female">
                    <label for="female">Female</label>
                  </div>

                  <div class="col-md-6">
                    <label for="cnic">CNIC</label>
                    <input type="text" name="cnic" id="cnic" placeholder="CNIC" class="form-control">
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-6">
                    <label for="phone">Phone No</label>
                    <input type="text" name="phone_no" id="phone" placeholder="Phone No" class="form-control">
                  </div>

                  <div class="col-md-6">     
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" placeholder="Address" class="form-control">
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-6">
                    <label for="address">Program</label>
                    <input type="text" name="program_title" id="Program" placeholder="Program" class="form-control">
                  </div>

                  <div class="col-md-6">
                    <label for="address">Coordinator</label>
                    <input type="text" name="coordinator_name" id="Coordinator" placeholder="Coordinator" class="form-control">
                  </div>
              </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" id="close_student_model" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="insert_record">Insert</button>
        </div>
    </form>
      </div>
    </div>
  </div>

  {{-- Delete Modal --}}

<!-- Modal -->
<div class="modal fade" id="DeleteStudentModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Confirmation Title</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4 style="color: red">Do You want to Delete ?</h4>
        <label>Student ID</label>
        <input type="text" name="id" id="delete_id_field" placeholder="Student ID" disabled class="form-control">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="close_student_delete_model" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="confirm_delete_btn">Delete</button>
      </div>
    </div>
  </div>
</div>


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="card">
                <div id="message_div"></div>
                <div class="card-header"><h1 class="text-center">{{ __('Student List') }}</h1></div>

                <div class="card-body">
                    <div class="row col-md-2 float-right">
                        <button class="btn btn-primary" id="add-new"> <span><b>+</b></span> Add</button>
                    </div>
                    <br><br>
                    <table class="table table-striped ">
                        <thead class="thead-dark">
                            <tr>
                                <th>Student ID</th>
                                <th>Student Name</th>
                                <th>Father Name</th>
                                <th>Gender</th>
                                <th>CNIC</th>
                                <th>Phone No</th>
                                <th>Address</th>
                                <th>Program</th>
                                <th>Coordinator</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                            </thead>

                            <tbody id="tbody">
                               
                            </tbody>
                            
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

<script>

  $(document).on('click','#close_student_model',function(e){
    e.preventDefault();
    $('#NewStudentModal').modal('hide');
  });

  $(document).on('click','#close_student_delete_model',function(e){
    e.preventDefault();
    $('#DeleteStudentModel').modal('hide');
  });

    $(document).on('click','#add-new',function(e){
        e.preventDefault();
        $('#NewStudentModal').modal('show');
        $('#add_student_id').trigger('reset');
    });

   $(document).on('click','#insert_record',function(e){
       e.preventDefault();
    $.ajax({
        type: "post",
        url: "AddStudent",
        data: $('#add_student_id').serialize(),
        success: function (response) {
            $('#message_div').addClass('alert alert-success');
            $('#message_div').html(response.message);
            $('#NewStudentModal').modal('hide');

            
        },
        error:function(er){
            alert('Not Saved !');
            console.log(er);
        }
    });
   });

   FetchStudents();
   function FetchStudents(){
       $.ajax({
           type: "get",
           url: "ShowStudent",
           dataType: "JSON",
           success: function (response) {
             $('#tbody').html(''); //tbody ko empty karta hai
                $.each(response.student_data, function (key, item) { 
                    $('#tbody').append('<tr><td>'+item.id+'</td><td>'+item.student_name+'</td><td>'+item.father_name+'</td><td>'+item.gender+'</td><td>'+item.cnic+'</td><td>'+item.phone_no+'</td><td>'+item.address+'</td><td>'+item.get_program.program_title+'</td><td>'+item.get_program.get_coordinator.coordinator_name+'</td><td><button class="btn btn-success">Update</button></td><td><button class="btn btn-danger" value="'+item.id+'" title="Delte Student" id="dlte_btn">Delete</button></td></tr>');
                    FetchStudents(); //Show the record again and again like loop to avoid this chek step2
               });
           }
       });
   }

   $(document).on('click','#dlte_btn',function(e){
      e.preventDefault();
      $('#DeleteStudentModel').modal('show');
      let getID = $(this).val();
      let ID = $('#delete_id_field').val(getID);
   });

   $(document).on('click','#confirm_delete_btn',function(e){
     e.preventDefault();
    //  alert('Yes Button Clicked . . ');
    

    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
   });

    let id = $('#delete_id_field').val(); 

    $.ajax({
      method: "delete",
      url: "DeleteStudent/"+id,
      data: $('#add_student_id').serialize(),
      success: function (response) {
        $('#message_div').addClass('alert alert-danger');
        $('#message_div').html(response.delete_message);
        $('#DeleteStudentModel').modal('hide');
       
      },
      error:function(er){
        alert('Error');
        console.log(er);
      }
    });
     
   });
</script>