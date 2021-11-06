@extends('layouts.app')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Modal -->
  <div class="modal fade" id="StudentAddModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><h2>Add New Student</h2></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="stdModel" autocomplete="off">
              {{  csrf_field() }}
              <label for="">Student Name</label>
              <input type="text"  name="student_name" id="" placeholder="Student Name " class="form-control">
            {{-- <span style="color: red">
                @error('student_name')
                    {{ $message }}
                @enderror
            </span> --}}

              <label for="">Father Name</label>
              <input type="text"  name="father_name" id="" placeholder="Father Name " class="form-control">

              <label for="">CNIC</label>
              <input type="text"  name="cnic" id="" placeholder="CNIC " class="form-control">

              <label for="">Gender</label>
              <select name="gender" id="" class="form-control">
                  <option value="" selected disabled>--Select Gender--</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
              </select>

              <label for="">Address</label>
              <input type="text"  name="address" id="" placeholder="Address " class="form-control">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" id="saveform" class="btn btn-success">Insert</button>
        </div>
    </form>
      </div>
    </div>
  </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h1 class="text-center">{{__('Students List')}}</h1></div>
                <br><br>
                <div class="row ">
                    <div class="col-md-10" style=" margin-left:30px">
                        <button class="btn btn-success " data-bs-toggle="modal" data-bs-target="#StudentAddModel">+Add</button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="student_details">
                        <thead>
                            <tr>
                                <th>Admin</th>
                                <th>Student ID</th>
                                <th>Student Name</th>
                                <th>Father Name</th>
                                <th>CNIC</th>
                                <th>Gender</th>
                                <th>Address</th>
                                <th>Actions</th>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {
       $('#saveform').click(function(event){
         event.preventDefault();
        //    alert('Clicked');
          $.ajax({
            method: "POST",
            url: "AddNewStudent",
            data: $('#stdModel').serialize(),
            success: function (response) {
                $('#StudentAddModel').modal('hide');
                // alert('Data Saved');
            },
            error:function(error){
                console.log(error);
                alert('Data not Saved . . .');
            }
          });
       });
    });

fetchStudents();
   function  fetchStudents(){
        $.ajax({
            type: "get",
            url: "Students",
            dataType: "json",
            success: function (response) {
                // console.log(response);
                $.each(response, function (key, item) {
                    console.log(response);
                     $('#tbody').append('<tr><td>'+item.name+'</td><td>'+item.get_student.id+'</td><td>'+item.get_student.student_name+'</td><td>'+item.get_student.father_name+'</td><td>'+item.get_student.cnic+'</td><td>'+item.get_student.gender+'</td><td>'+item.get_student.address+'</td><td><a href="{{ url('SpecificStudent') }}/'+item.get_student.id+'"><button class="btn btn-success">Edit</button></a></td></tr>');
                });
            }
        });
    }
</script>
