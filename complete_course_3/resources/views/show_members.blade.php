<h1>Show Members</h1>
<table border="1">
     <thead>
          <tr>
               <th>ID</th>
               <th>Name</th>
               <th>Email</th>
               <th>Address</th>
               <td>Action</td>
          </tr>
     </thead>

     <tbody>
          @foreach($data as $mymembers)
          <tr>
               <td>{{ $mymembers['id'] }}</td>
               <td>{{ $mymembers['name'] }}</td>
               <td>{{ $mymembers['email'] }}</td>
               <td>{{ $mymembers['address'] }}</td>
               <td>
                    <a href="delete/{{$mymembers['id']}}"><button>Delete</button></a>
                    <a href="edit/{{$mymembers['id']}}"><button>Update</button></a>
               </td>

          </tr>
          @endforeach
     </tbody>

</table>

<div>
     {{$data->links()}}
</div>

<style>
.w-5 {
     display: none;
}
</style>