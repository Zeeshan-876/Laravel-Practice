<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> -->

<!-- <link rel="stylesheet" href="css/app.css"> -->
<link rel="stylesheet" href="css/bootstrap.css">

<div class="container">
     <div class="row">
          <div class="col-md-12">
               <div class="card">
                    <div class="card-header">
                         <h2>
                              Add Course
                              <a href="{{ url('course-list') }}">
                                   <button class="btn btn-info float-end">Show Courses</button>
                              </a>
                         </h2>
                    </div>
               </div>
               @if(Session::get('success'))
               <div class="alert alert-success">
                    {{ Session::get('success') }}
               </div>
               @endif

               @if(Session::get('final'))
               <div class="alert alert-danger">
                    {{ Session::get('fail') }}
               </div>
               @endif
               <div class="card-body">
                    <form action="courses" method="post">
                         @csrf
                         <div class="col-md-12 offset-md-3">
                              <div class="form-group">

                                   <label for="coursetitle">Course Title</label>

                                   <div class="col-md-6">
                                        <input type="text" id="coursetitle" placeholder="Course title"
                                             class="form-control" name="course_title">
                                        <span style="color: red;">@error('course_title') {{ $message }}
                                             @enderror()</span>
                                   </div>
                              </div>

                              <div class="form-group">

                                   <label for="course_reg">Course Registration</label>

                                   <div class="col-md-6">
                                        <input type="date" id="course_reg" placeholder="Course Registration"
                                             class="form-control" name="course_reg">
                                        <span style="color: red;">@error('course_reg') {{ $message }}
                                             @enderror()</span>
                                   </div>
                              </div>
                              <br>
                              <button type="submit" class="btn btn-primary w-50 ">Save</button>
                         </div>

                    </form>
               </div>
          </div>
     </div>
</div>