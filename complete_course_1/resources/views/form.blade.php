<div>
     <h1>Users Login</h1>

     <form action="users" method="POST">
          @csrf
          <input type="text" value="{{old('username')}}" placeholder="User name" name="username" autocomplete="off">
          <br>
          <span style="color: red;">@error('username') {{$message}} @enderror</span>
          <br><br>
          <input type="password" placeholder="Password" name="password" value="{{old('password')}}">
          <br>
          <span style="color: red;">@error('password') {{$message}} @enderror</span>
          <br><br>
          <button type="submit">Login</button>
     </form>
</div>