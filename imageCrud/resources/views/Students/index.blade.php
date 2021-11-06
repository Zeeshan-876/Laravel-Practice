<div>
     <table border="1">

          <thead>
               <tr>
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>Student Image</th>
                    <th>Actions</th>
               </tr>
          </thead>

          <tbody>
               @foreach($std_Data as $Data)
               <tr>
                    <td>{{ $Data['std_id'] }}</td>
                    <td>{{ $Data['std_name'] }}</td>
                    <td>
                         <img src="{{ asset('Images/studentImages/'.$Data['std_img']) }}" height="80px" width="100px"
                              alt="check path">
                    </td>
                    <td>
                         <a href="delete_stdRecord/{{ $Data['std_id'] }}">
                              <button style="color: red;">Delete</button>
                         </a>
                         <a href="edit_stdRecord/{{ $Data['std_id'] }}">
                              <button style="color: green;">Update</button>
                         </a>
                         <a href="student-form">
                              <button style="color: blue;">Add Record</button>
                         </a>
                    </td>
               </tr>
               @endforeach
          </tbody>

     </table>
</div>