<!DOCTYPE html>
<html lang="en">

     <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Index</title>
          <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
     </head>

     <body>

          <div class="container">
               <div class="row">
                    <div class="col-md-6 offset-md-3 mt-5">
                         <h2>Laravel CRUD | Display , Edit & Delete Record</h2>
                         <hr>
                    </div>

               </div>
               <br>


               <div class="offset-md-3">
                    <a href="{{url('insert-Record')}}" class="btn btn-primary">Add New Record</a>
               </div>


               <br>
               <div class="row">
                    <div class="col-md-6 offset-md-3">
                         <table class="table" border="1">
                              <thead class="table-dark">
                                   <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Father Name</th>
                                        <th>Email</th>
                                        <th>Occupation</th>
                                        <th>Actions</th>
                                   </tr>
                              </thead>

                              <tbody>
                                   @foreach($list as $item)
                                   <tr>
                                        <td>{{ $item-> id}}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->father_name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->occupation }}</td>
                                        <td>
                                             <div class="btn-group">
                                                  <a href="Delete/{{$item->id}}" class="btn btn-danger">Delete</a>
                                                  <a href="Update/{{$item->id}}" class="btn btn-success">Update</a>

                                             </div>
                                        </td>
                                   </tr>
                                   @endforeach
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>

     </body>

</html>