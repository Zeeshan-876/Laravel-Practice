@extends('layouts.app')

  
  <!-- Insert Modal -->
  <div class="modal fade" id="AddNewStudentModel" tabindex="-1" role="dialog" 
  aria-labelledby="StudentModelLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="StudentModelLabel">Add New Student</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
           <form id="addstudent" autocomplete="on">
               {{ csrf_field() }}
            <label for="">Student Name</label>
            <input type="text" name="student_name" placeholder="Student Name" class="form-control">

            <label for="">Father Name</label>
            <input type="text" name="father_name" placeholder="Father Name" class="form-control">

            <label for="">Age</label>
            <input type="text" name="age" placeholder="Age" class="form-control">

            <label for="">Gender</label>
            <select name="gender"  class="form-control">
                <option value="" selected disabled>--Select Gender--</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>

            <label for="">CNIC</label>
            <input type="text" name="cnic" placeholder="CNIC" class="form-control">

            <label for="">Address</label>
            <input type="text" name="address" placeholder="Address" class="form-control">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
          <button type="submit" id="saveform" class="btn btn-success  ">Save</button>
        </div>
    </form>
      </div>
    </div>
  </div>

  {{-- Delete Modal Start --}}

  <!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
  </button> --}}
  
  <!-- Modal -->
  <div class="modal fade" id="DeleteStudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h3>Are you sure want to Delete ? </h3>
          <input type="text" name="id" id="std_id" disabled class="form-control">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger yes_btn">Delete</button>
        </div>
      </div>
    </div>
  </div>

  {{-- Delete Modal End --}}

  {{-- Edit Modal Start --}}
  <div class="modal fade" id="UpdateStudentModel" tabindex="-1" role="dialog" 
  aria-labelledby="StudentModelLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="StudentModelLabel">Update Student Record</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
           <form id="upadatestudent" autocomplete="on">
               {{ csrf_field() }}
 
            <input type="hidden" name="id" id="edit_std_id" class="form-control" disabled>
            <label for="">Student Name</label>
            <input type="text" name="student_name" id="std_name" placeholder="Student Name" class="form-control">

            <label for="">Father Name</label>
            <input type="text" name="father_name" id="f_name" placeholder="Father Name" class="form-control">

            <label for="">Age</label>
            <input type="text" name="age" id="std_age" placeholder="Age" class="form-control">

            <label for="">Gender</label>
            <select name="gender" id="std_gender" class="form-control">
                <option value="" selected disabled>--Select Gender--</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>

            <label for="">CNIC</label>
            <input type="text" name="cnic" id="std_cnic" placeholder="CNIC" class="form-control">

            <label for="">Address</label>
            <input type="text" name="address" id="std_address" placeholder="Address" class="form-control">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" id="updateform" class="btn btn-success">Update</button>
        </div>
    </form>
      </div>
    </div>
  </div>
  {{-- End Edit Modal --}}

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center"><h1>{{ __('Student Profile') }}</h1></div>                

                <div class="card-body">
                    <div id="success_message_div"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="button" style="width:80px" id="add_modal_btn" class="badge-pill btn btn-success float-right">+Add</button>
                        </div>
                    </div>
                    <br>

                    <div class="row col-md-12">
                        <table  class="table table-center table-bordered">
                         <thead>
                             <tr>
                                 <th>Student ID</th>
                                 <th>Student Name</th>
                                 <th>Father Name</th>
                                 <th>Age</th>
                                 <th>Gender</th>
                                 <th>CNIC</th>
                                 <th>Address</th>
                                 <th>Edit</th>
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
</div>
@endsection

<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

  <script>

   

    //   Start Insertion

    $(document).on('click','#add_modal_btn',function(e){
      e.preventDefault();
      $('#AddNewStudentModel').modal('show');
      $('#addstudent').trigger('reset');
    });

      $(document).ready(function () {
        $('#saveform').click(function(e){
          e.preventDefault();
          
          $.ajax({
              type: "post",
              url: "AddNewStudent",
              data: $('#addstudent').serialize(),
              success: function (response) {
                  $('#success_message_div').addClass('alert alert-success');
                  $('#success_message_div').html(response.message);
                  $('#AddNewStudentModel').modal('hide');
                  
              },
              error:function(er){
                  console.log(er);
                  alert('Error Occured');
              }
          });
        });
      });
      //End Insertion

      
      //Get Record
      showStudents();
        function showStudents(){
            $.ajax({
                method: "get",
                url: "/Students",
                dataType:"json",
                success: function (data) {
                    // console.log(data);
                    $('#tbody').html(''); //TBODY Empty
                    $.each(data.student_data, function (key, item) { 
                        $('#tbody').append('<tr><td class="h-25">'+item.id+'</td><td>'+item.student_name+'</td><td>'+item.father_name+'</td><td>'+item.age+'</td><td>'+item.gender+'</td><td>'+item.cnic+'</td><td style="width:15%">'+item.address+'</td><td><button class="btn btn-success btn-sm" value="'+item.id+'" id="update-btn">Edit</button></td><td><button class="btn btn-danger btn-sm"  value="'+item.id+'" id="dlte-btn" >Delete</button></td></tr>');
                        showStudents();//SHow Data without reload
                        
                    });
                },
                error:function(er){
                    console.log(er);
                }
            });
        }
      //End Record

      //Start Delete Record
        $(document).on('click','#dlte-btn',function(e){
            e.preventDefault();
            let getID = $(this).val();
            // alert(getID);
            $('#std_id').val(getID);
            $('#DeleteStudentModal').modal('show'); 
           
        });

        $(document).on('click','.yes_btn',function(e){
                e.preventDefault();
              //  alert('yes');
                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                let getID = $('#dlte-btn').val();
                
                 $('#std_id').html(getID);
                 let id = $('#std_id').val();
                // alert(id);
                $.ajax({
                data: $('#addstudent').serialize(),
                method: "delete",
                url: "Delete-Student/"+id,  
                    success: function (response) {
                        $('#success_message_div').addClass('alert alert-danger');
                        $('#success_message_div').html(response.dlte_message);
                        $('#DeleteStudentModal').modal('hide');
                    },
                    error:function(er){
                        console.log(er);
                    }
                });
            });

      //End Delete Record

      // Edit Record
      $(document).on('click','#update-btn',function(e){
        e.preventDefault();
        let std_id = $(this).val();
        // alert(std_id);

          $('#UpdateStudentModel').modal('show');
          $.ajax({
            type: "get",
            url: "edit-student/"+std_id,
            // dataType: "json",
            
            success: function (response) {
              // console.log(response);
              $('#edit_std_id').val(std_id);
              $('#std_name').val(response.student.student_name);
              $('#f_name').val(response.student.father_name);
              $('#std_age').val(response.student.age);
              $('#std_gender').val(response.student.gender);
              $('#std_cnic').val(response.student.cnic);
              $('#std_address').val(response.student.address);
            }
          });
      });
        
      $(document).ready(function () {
        $('#updateform').click(function(){
          let id = $('#update-btn').val();
          $('#edit_std_id').html(id);
          let std_id = $('#edit_std_id').val();
          // alert(std_id);
          $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
          });

          $.ajax({
            method: "PUT",
            url: "update-student/"+std_id,
            // dataType="JSON",
            data:$('#upadatestudent').serialize(),
            success: function (response) {
              $('#success_message_div').addClass('alert alert-success');
              $('#success_message_div').html(response.message);
              $('#UpdateStudentModel').modal('hide');
            },
            error:function(er){
              console.log(er);
            }
          });
        });
      });

  </script>
