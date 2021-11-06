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
                              Add Gender
                              <a href="{{ url('gender_list') }}">
                                   <button class="btn btn-info float-end">Show Genders</button>
                              </a>
                         </h2>
                    </div>
               </div>
               @if(Session::get('success'))
               <div class="alert alert-success">
                    {{ Session::get('success') }}
               </div>
               @endif

               @if(Session::get('fail'))
               <div class="alert alert-danger">
                    {{ Session::get('fail') }}
               </div>
               @endif
               <div class="card-body">
                    <form action="genders" method="post">
                         @csrf
                         <div class="col-md-12 offset-md-3">
                              <div class="form-group">

                                   <label for="gendertitle">Gender Title</label>

                                   <div class="col-md-6">
                                        <input type="text" id="gendertitle" placeholder="Gender title"
                                             class="form-control" name="gender_title">

                                        <span style="color: red;">@error('gender_title') {{ $message }}
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