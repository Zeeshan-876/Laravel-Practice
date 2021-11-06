<h1>Insert Member</h1>
<form action="update/{{$find_member['id']}}" method="POST">
     @csrf
     <input type="text" name="name" placeholder="Username" value="{{$find_member['name']}}">
     <br>
     <span style="color: red;">@error('name') {{$message}} @enderror</span>
     <br><br>
     <input type="text" name="email" placeholder="email" value="{{$find_member['email']}}">
     <br>
     <span style="color: red;">@error('email') {{$message}} @enderror</span>
     <br><br>
     <input type="text" name="address" placeholder="Address" value="{{$find_member['address']}}">
     <br>
     <span style="color: red;">@error('address') {{$message}} @enderror</span>
     <br><br>
     <button type="submit">Update Record</button>
</form>

<a href="member_list"><button>Show Record</button></a>