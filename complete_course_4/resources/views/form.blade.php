<div>
     <h1>Insert Record</h1>
     <form action="insert_post" method="POST">
          @csrf
          <input type="text" name="name" placeholder="Username">
          <br>
          <span style="color: red;">@error('name') {{$message}} @enderror()</span>
          <br><br>
          <input type="email" name="email" placeholder="Email">
          <br>
          <span style="color: red;">@error('email') {{$message}} @enderror()</span>
          <br><br>
          <input type="text" name="content" placeholder="Message">
          <br>
          <span style="color: red;">@error('content') {{$message}} @enderror()</span>
          <br><br>
          <input type="date" name="date">
          <br>
          <span style="color: red;">@error('date') {{$message}} @enderror()</span>
          <br><br>
          <button type="submit">Insert Record</button>

     </form>
     <br>
     <a href="view_record"><button>View Records</button></a>
</div>