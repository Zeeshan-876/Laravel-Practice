<h1>User Login Form</h1>

<form action="login" method="post">
     @csrf
     User Name : <input type="text" name="username" placeholder="Username">
     <br><br>
     <span style="color: red;">@error('username') {{$message}} @enderror()</span>
     <br><br>
     Password : <input type="password" name="password" placeholder="Password">
     <br><br>
     <span style="color: red;">@error('password') {{$message}} @enderror()</span>
     <br><br>
     <button type="submit">Login</button>
</form>