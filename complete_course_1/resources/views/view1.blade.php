<div>
     <h1>View1 page</h1>
     @include('inner')
     @include('inner2')

     <h2>Data comes from Controller</h2>
     @foreach($data as $user_data)
     <h4>{{$user_data}}</h4>
     @endforeach



</div>