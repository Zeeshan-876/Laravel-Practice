<div>
     <h1>Add New Student</h1>
     <form action="store-StdRecord" method="post" enctype="multipart/form-data">
          @csrf
          Student Name : <input type="text" name="std_name">
          <br><br>
          Student Image : <input type="file" name="std_img">
          <br><br>
          <button type="submit">submit</button>
     </form>
</div>