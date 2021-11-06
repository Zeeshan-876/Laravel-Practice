<h1>Insert Member</h1>
<form action="insert" method="POST">
     @csrf
     <input type="text" name="name" placeholder="Username">
     <br>
     <span style="color: red;">@error('name') {{$message}} @enderror</span>
     <br><br>
     <input type="text" name="email" placeholder="Email">
     <br>
     <span style="color: red;">@error('email') {{$message}} @enderror</span>
     <br><br>
     <input type="text" name="address" placeholder="Address">
     <br>
     <span style="color: red;">@error('address') {{$message}} @enderror</span>
     <br><br>
     <button type="submit">Insert Record</button>
</form>

<a href="member_list"><button>Show Record</button></a>