<div>
     <h1>Login User</h1>
     <form action="login_user" method="POST">
          @csrf
          <input type="text" name="username" placeholder="User Name">
          <br><br>
          <input type="password" name="password" placeholder="Password">
          <br><br>
          <button type="submit">Login</button>
     </form>
</div>