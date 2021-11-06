<div>
     <h1>User Login</h1>

     <form action="insert" method="POST">
          @csrf
          <input type="text" name="user" placeholder="Enter username">
          <br><br>
          <input type="password" name="password" placeholder="Enter user password">
          <br><br>
          <button type="Submit">Login</button>
     </form>
</div>