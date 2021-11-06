<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> -->

<link rel="stylesheet" href="css/bootstrap.css">
<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->


<div class="row">
     <div class="col-md-12">
          <div class="container">
               <div class="card">
                    <div class="card-header">
                         <h2>
                              Student List
                              <a href="student-form">
                                   <button class=" btn btn-primary float-end">Add</button>
                              </a>
                         </h2>
                    </div>

               </div>
          </div>

          <br><br>
          <div class="col-md-12">
               <table class="table table-striped table-bordered">
                    <thead>
                         <tr>
                              <th>Student ID</th>
                              <th>Student Name</th>
                              <th>Father Name</th>
                              <th>Email</th>
                              <th>Course</th>
                              <th>Gender</th>
                              <th>DOB</th>
                              <th>City</th>
                              <th>Address</th>
                              <th>Student Image</th>
                              <th>Action</th>
                         </tr>
                    </thead>

                    <tbody>
                         @foreach($stdData as $Data)
                         <tr>
                              <td>{{ $Data['student_id'] }}</td>
                              <td>{{ $Data['student_name'] }}</td>
                              <td>{{ $Data['father_name'] }}</td>
                              <td>{{ $Data['student_email'] }}</td>
                              <td>{{ $Data['course_title'] }}</td>
                              <td>{{ $Data['gender_title'] }}</td>
                              <td>{{ $Data['DOB'] }}</td>
                              <td>{{ $Data['city_name'] }}</td>
                              <td>{{ $Data['address'] }}</td>
                              <td>
                                   <img src="{{ asset('Student_Images/'.$Data['student_profile_image']) }}"
                                        width="120px" height="90px" alt="">
                              </td>
                              <td>
                                   <a href="delete_student/{{ $Data['student_id'] }}">
                                        <button class="btn btn-danger">Delete</button>
                                   </a>

                                   <a href="edit_student/{{ $Data['student_id'] }}"">
                                        <button class=" btn btn-success">Update</button>
                                   </a>
                              </td>
                         </tr>
                         @endforeach
                    </tbody>
               </table>
          </div>

     </div>
</div>