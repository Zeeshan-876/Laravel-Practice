<h1>Add New Member</h1>
<form action="storeController" method="POST">
     @csrf
     <input type="text" name="username" placeholder="Enter user name">
     <br><br>
     <input type="password" name="password" placeholder="Enter user password">
     <br><br>
     <input type="text" name="email" placeholder="Enter user email">
     <br><br>
     <button type="submit">Add User</button>
</form>