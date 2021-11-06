<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> -->

<link rel="stylesheet" href="css/bootstrap.css">

<!-- <link rel="stylesheet" href="css/app.css"> -->

<div class="container">
     <div class="row">
          <div class="col-md-12">
               <div class="card">
                    <div class="card-header">
                         <h2>
                              Add Student
                              <a href="{{ url('/') }}">
                                   <button class="btn btn-info float-end">Show Students</button>
                              </a>
                         </h2>
                    </div>
               </div>

               @if(Session::get('success'))
               <div class="div alert alert-success">
                    {{ Session::get('success') }}
               </div>
               @endif

               @if(Session::get('fail'))
               <div class="div alert alert-danger">
                    {{ Session::get('fail') }}
               </div>
               @endif

               <div class="card-body">
                    <form action="add-student" method="post" enctype="multipart/form-data">
                         @csrf
                         <div class="col-md-12 offset-md-3">
                              <div class="form-group">

                                   <label for="std_name">Student Name</label>

                                   <div class="col-md-6">
                                        <input type="text" id="std_name" placeholder="Student Name" class="form-control"
                                             name="student_name">
                                        <span style="color: red;">@error('student_name') {{ $message }}
                                             @enderror()</span>
                                   </div>
                              </div>

                              <div class="form-group">

                                   <label for="std_name">Father Name</label>

                                   <div class="col-md-6">
                                        <input type="text" id="std_name" placeholder="Father Name" class="form-control"
                                             name="father_name">
                                        <span style="color: red;">@error('father_name') {{ $message }}
                                             @enderror()</span>
                                   </div>
                              </div>

                              <div class="form-group">

                                   <label for="std_email"> Email</label>

                                   <div class="col-md-6">
                                        <input type="email" id="std_email" placeholder="Email" class="form-control"
                                             name="student_email">
                                        <span style="color: red;">@error('student_email') {{ $message }}
                                             @enderror()</span>
                                   </div>
                              </div>

                              <div class="form-group">

                                   <label>Course</label>

                                   <div class="col-md-6">

                                        <select name="course_id" class="form-control">
                                             <option value="">&nbsp;</option>
                                             @foreach($courseData as $course)

                                             <option value="{{ $course['course_id'] }}">
                                                  {{ $course['course_title'] }}
                                             </option>
                                             @endforeach
                                        </select>

                                        <span style="color: red;">@error('course_id') {{ $message }}
                                             @enderror()</span>
                                   </div>
                              </div>

                              <div class="form-group">

                                   <label>Gender</label>

                                   <div class="col-md-6">
                                        <select name="gender_id" class="form-control">
                                             <option value="">&nbsp;</option>
                                             @foreach($genderData as $gender)
                                             <option value="{{ $gender['gender_id'] }}">
                                                  {{ $gender['gender_title'] }}
                                             </option>
                                             @endforeach
                                        </select>
                                        <span style="color: red;">@error('gender_id') {{ $message }}
                                             @enderror()</span>
                                   </div>
                              </div>

                              <div class="form-group">

                                   <div class="col-md-6">
                                        <label for="dob">Date Of Birth</label>

                                        <input type="date" id="dob" class="form-control" name="DOB">
                                        <span style="color: red;">@error('DOB') {{ $message }}
                                             @enderror()</span>

                                   </div>
                              </div>

                              <div class="form-group">

                                   <label>City</label>

                                   <div class="col-md-6">
                                        <select name="city_id" class="form-control">
                                             <option value="">&nbsp;</option>
                                             @foreach($cityData as $city)
                                             <option value="{{ $city['city_id'] }}">
                                                  {{ $city['city_name'] }}
                                             </option>
                                             @endforeach
                                        </select>
                                        <span style="color: red;">@error('city_id') {{ $message }}
                                             @enderror()</span>
                                   </div>
                              </div>


                              <div class="form-group">

                                   <div class="col-md-6">
                                        <label for="address">Address</label>

                                        <input type="text" id="address" placeholder="Address" class="form-control"
                                             name="address">
                                        <span style="color: red;">@error('address') {{ $message }}
                                             @enderror()</span>

                                   </div>
                              </div>

                              <div class="form-group">

                                   <div class="col-md-6">
                                        <label for="profile_img">Profile Image</label>

                                        <input type="file" id="profile_img" placeholder="student Image"
                                             class="form-control" name="student_profile_image">
                                        <span style="color: red;">@error('student_profile_image') {{ $message }}
                                             @enderror()</span>

                                   </div>
                              </div>

                              <br>
                              <button type="submit" class="btn btn-primary w-50 ">Save Data</button>
                         </div>

                    </form>
               </div>
          </div>
     </div>
</div>