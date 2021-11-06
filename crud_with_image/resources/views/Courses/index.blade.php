<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> -->
<link rel="stylesheet" href="css/bootstrap.css">

<div class="container">
     <div class="row">
          <div class="col-md-12">
               <div class="card">
                    <div class="card-header">
                         <h2>
                              Courses List
                              <a href="{{ url('add-course') }}">
                                   <button class="btn btn-primary float-end">Add</button>
                              </a>
                         </h2>
                    </div>

               </div>

               <br><br>
               <div class="col-md-12 ">
                    <table class="table table-striped table-bordered">
                         <thead>
                              <tr>
                                   <th>Course ID</th>
                                   <th>Course Title</th>
                                   <th>Registration Date</th>
                                   <th>Actions</th>
                              </tr>
                         </thead>

                         <tbody>
                              @foreach($coursesData as $courses)
                              <tr>
                                   <td>{{ $courses['course_id'] }}</td>
                                   <td>{{ $courses['course_title'] }}</td>
                                   <td>{{ $courses['course_reg'] }}</td>
                                   <td>
                                        <a href="delete_course/{{ $courses['course_id'] }}">
                                             <button class="btn btn-danger">Delete</button>
                                        </a>
                                        <a href="edit_course/{{ $courses['course_id'] }}">
                                             <button class="btn btn-success">Update</button>
                                        </a>
                                   </td>
                              </tr>
                              @endforeach
                         </tbody>
                    </table>
               </div>

          </div>
     </div>
</div>