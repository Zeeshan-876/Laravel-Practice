<div>
     <h1>Display Record by Joins</h1>
     <br>
     <table border="1">
          <thead>
               <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Company</th>
               </tr>
          </thead>

          <tbody>
               @foreach($join_record as $records)
               <tr>
                    <td>{{$records['id']}}</td>
                    <td>{{$records['emp_name']}}</td>
                    <td>{{$records['email']}}</td>
                    <td>{{$records['comp_name']}}</td>
               </tr>
               @endforeach
          </tbody>
     </table>
</div>