<div>
     <h1>User Login</h1>
     <br>

     <form action="users" method="POST">
          @csrf
          <!-- {{method_field('PUT')}} -->
          {{method_field('delete')}}
          <input type="text" name="name" placeholder="Enter user name">
          <br><br>
          <input type="password" name="password" placeholder="Enter user password">
          <br><br>
          <button>Save</button>
     </form>
</div>