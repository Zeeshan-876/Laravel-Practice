<h1>User Login</h1>

<form action="login" method="post">
     @csrf
     User Name : <input type="text" name="username" placeholder="Username">
     <br><br>
     Password : <input type="password" name="password" placeholder="Password">
     <br><br>
     <button type="submit">Login</button>
</form>