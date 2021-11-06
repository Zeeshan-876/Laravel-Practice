<div>
     <table border="1">
          <thead>
               <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Content</th>
                    <th>Date</th>
                    <th>Actions</th>
               </tr>
          </thead>

          <tbody>
               @foreach($records as $record)
               <tr>
                    <td>{{ $record->id }}</td>
                    <td>{{ $record->name }}</td>
                    <td>{{ $record->email }}</td>
                    <td>{{ $record->content }}</td>
                    <td>{{ $record->date }}</td>
                    <td>
                         <a href="delete/{{$record->id}}"><button>Delete</button></a>
                         <a href="edit/{{$record->id}}"><button>Update</button></a>
                    </td>
               </tr>
               @endforeach
          </tbody>
     </table>
</div>