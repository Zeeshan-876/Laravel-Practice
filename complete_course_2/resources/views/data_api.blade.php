<div>
     <h1>List of Users Data</h1>

     <table border="1">
          <thead>
               <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Profile Pic</th>
               </tr>
          </thead>

          <tbody>
               @foreach($data as $mydata)
               <tr>
                    <td>{{$mydata['id']}}</td>
                    <td>{{$mydata['first_name']}}</td>
                    <td>{{$mydata['email']}}</td>
                    <td><img src="{{$mydata['avatar']}}" alt=""></td>
               </tr>
               @endforeach()
          </tbody>
     </table>

</div>