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
                              Add City
                              <a href="city-list">
                                   <button class="btn btn-info float-end">Show Cities</button>
                              </a>
                         </h2>
                    </div>
               </div>

               @if(Session::get('success'))
               <div class="alert alert-success">
                    {{ session::get('success') }}
               </div>
               @endif

               @if(Session::get('fail'))
               <div class="alert alert-danger">
                    {{ session::get('fail') }}
               </div>
               @endif

               <div class="card-body">
                    <form action="cities" method="post">
                         @csrf
                         <div class="col-md-12 offset-md-3">
                              <div class="form-group">

                                   <label for="citytitle">City Name</label>

                                   <div class="col-md-6">
                                        <input type="text" id="citytitle" placeholder="City Name" class="form-control"
                                             name="city_name">

                                        <span style="color: red;">@error('city_name') {{ $message }}
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