<!DOCTYPE html>
<html lang="en">

     <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Welcome</title>
          <link rel="stylesheet" href="header.css">
     </head>

     <body>

          <div class="main-div">
               <h2 class="h2-heading"> LARAVEL 8 CRUD</h2>
               <div>
                    <ul class="main-list">
                         <li class="list-items"><a href="{{url('insert-Record')}}">Insert Record</a></li>
                         <li class="list-items"><a href="{{url('get-data')}}">View Record</a></li>
                    </ul>
               </div>
          </div>

     </body>

</html>