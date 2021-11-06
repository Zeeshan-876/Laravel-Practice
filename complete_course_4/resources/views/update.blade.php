<div>
     <h1>Update Record</h1>
     <form action="update/{{$data['id']}}" method="POST">
          @csrf
          <input type="text" name="name" placeholder="Username" value="{{$data['name']}}">
          <br><br>
          <input type="email" name="email" placeholder="Email" value="{{$data['email']}}">
          <br><br>
          <input type="text" name="content" placeholder="Message" value="{{$data['content']}}">
          <br><br>
          <input type="date" name="date" value="{{$data['date']}}">
          <br><br>
          <button type="submit">Update Record</button>

     </form>
</div>