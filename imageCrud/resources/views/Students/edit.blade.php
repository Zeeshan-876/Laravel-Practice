<div>
     <h1>Update Student</h1>
     <form action="update_stdRecord/{{ $std_data['std_id'] }}" method="post" enctype="multipart/form-data">
          @csrf
          {{ method_field('put') }}
          Student Name : <input type="text" name="std_name" value="{{ $std_data['std_name'] }}">
          <br><br>
          Student Image : <input type="file" name="std_img" value="{{ $std_data['std_img'] }}">
          <br><br>
          <img src="{{ asset('Images/studentImages/'.$std_data['std_img']) }}" width="100px" height="80px" alt="">
          <br><br>
          <button type="submit">Update</button>
     </form>
</div>