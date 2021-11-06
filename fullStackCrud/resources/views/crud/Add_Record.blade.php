<!DOCTYPE html>
<html lang="en">

     <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Add Record</title>
          <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
     </head>

     <body>

          <div class="container">
               <div class="row">
                    <div class="col-md-6 offset-md-3 mt-5">
                         <h2>Laravel CRUD | Insert Record</h2>
                         <hr>
                         @if(Session::get('success'))
                         <div class="alert alert-success">
                              {{Session::get('success')}}
                         </div>
                         @endif

                         @if(Session::get('fail'))
                         <div class="alert alert-danger">
                              {{Session::get('fail')}}
                         </div>
                         @endif

                         <div class="col-md-6">
                              <a href="{{url('get-data')}}" class="btn btn-primary">View Records</a>
                         </div>

                         <form action="Add_Record" method="post">
                              @csrf

                              <div class="form-group">
                                   Name <input type="text" value="{{old('name')}}" placeholder="User Name"
                                        class="form-control" name="name">
                                   <span style="color: red;"> @error('name') {{$message}} @enderror </span>
                              </div>

                              <div class="form-group">
                                   Father Name <input type="text" placeholder="Father Name" class="form-control"
                                        name="father_name" value="{{old('father_name')}}" />
                                   <span style="color: red;"> @error('father_name') {{$message}} @enderror </span>
                              </div>

                              <div class="form-group">
                                   Email <input type="text" value="{{old('email')}}" name="email" placeholder="Email"
                                        class="form-control" />
                                   <span style="color:red">@error('email') {{$message}} @enderror</span>
                              </div>

                              <div class="form-group">
                                   Occupation <input type="text" value="{{old('occupation')}}" name="occupation"
                                        placeholder="Occupation" class="form-control" />
                                   <span style="color: red;">@error('occupation') {{$message}} @enderror</span>
                              </div>
                              <br>
                              <button type="submit" class="btn btn-primary w-100">Save</button>

                         </form>
                    </div>
               </div>
          </div>

     </body>

</html>