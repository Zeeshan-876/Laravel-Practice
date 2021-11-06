@extends('layouts.app');
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header text-center"><h1>{{ __('User Profile ') }}</h1></div>

                <div class="card-body">

                    <div class="row" style="margin-left: 2px">
                            <select name="mylist" id="mylist" onchange="search_record(this)" class="form-control w-25">
                                <option value="" disabled>--Select User--</option>
                                <option value="">&nbsp;</option>
                                    @foreach ($user_all_data as $users )
                                        <option value="{{ $users->id }}">{{ $users->name }}</option>
                                    @endforeach
                            </select>
                    </div>


                    <br><br>
                    <div class="row col-md-8">
                        <table  class="table table-center table-bordered" style="display: none"
                         id="profile_details">

                        </table>
                    </div>


                    <div class="row" style="margin-left: 2px">
                        <select name="list" id="list" onchange="search()" class="form-control w-25">
                            <option value="" disabled>--Select--</option>
                            <option value="">&nbsp;</option>
                                @foreach ($user_all_data as $users )
                                    <option value="{{ $users->id }}">{{ $users->name }}</option>
                                @endforeach
                        </select>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
{{-- <script src="{{ asset('js/jquery.js')}}"></script> --}}
<script>

function search(){
    let getID = $('#list').val();
    $('#profile_details').html('').empty();
    $.ajax({
        url:'{{ url('user/profile') }}/'+getID,
        method:'get',
        success:function(data){
            // console.log(data);

            $('#profile_details').append(' <tr> <td class="col-md-2">ID</td><td class="col-md-5" id="id">'+data.id+'</td></tr><tr><td class="col-md-3">User Name</td> <td class="col-md-7" id="name">'+data.name+'</td> </tr> <tr> <td class="col-md-3">Email</td> <td class="col-md-7" id="email">'+data.email+'</td> </tr> <tr> <td class="col-md-3">Customer Name</td> <td class="col-md-7" id="cust_name">'+data.get_customer.customer_name+'</td> </tr> <tr> <td class="col-md-3">Father Name</td> <td class="col-md-7" id="f_name">'+data.get_customer.father_name+'</td> </tr> <tr> <td class="col-md-3">CNIC</td> <td class="col-md-7" id="cnic">'+data.get_customer.cnic+'</td> </tr> <tr> <td class="col-md-3">Date Of Birth</td> <td class="col-md-7" id="dob">'+data.get_customer.dateofbirth+'</td> </tr> <tr> <td class="col-md-3">Contact No</td> <td class="col-md-7" id="contact_no">'+data.get_customer.get_contact.contact_no+'</td> </tr> <tr> <td class="col-md-3">Category Title</td> <td class="col-md-7" id="cate_titles">'+data.get_customer.get_contact.get_category.category_title+'</td> </tr>');
            $('#profile_details').show();

        }
    });

}


    function search_record(e){
        var id = $("#mylist").val();
        $('#profile_details').html('').empty();
        $.ajax({
            url:"{{url('user/profile')}}/"+id,
            method:"get",
            success:function(data){
                $('#profile_details').append(' <tr> <td class="col-md-2">ID</td><td class="col-md-5" id="id">'+data.id+'</td></tr><tr><td class="col-md-3">User Name</td> <td class="col-md-7" id="name">'+data.name+'</td> </tr> <tr> <td class="col-md-3">Email</td> <td class="col-md-7" id="email">'+data.email+'</td> </tr> <tr> <td class="col-md-3">Customer Name</td> <td class="col-md-7" id="cust_name">'+data.get_customer.customer_name+'</td> </tr> <tr> <td class="col-md-3">Father Name</td> <td class="col-md-7" id="f_name">'+data.get_customer.father_name+'</td> </tr> <tr> <td class="col-md-3">CNIC</td> <td class="col-md-7" id="cnic">'+data.get_customer.cnic+'</td> </tr> <tr> <td class="col-md-3">Date Of Birth</td> <td class="col-md-7" id="dob">'+data.get_customer.dateofbirth+'</td> </tr> <tr> <td class="col-md-3">Contact No</td> <td class="col-md-7" id="contact_no">'+data.get_customer.get_contact.contact_no+'</td> </tr> <tr> <td class="col-md-3">Category Title</td> <td class="col-md-7" id="cate_titles">'+data.get_customer.get_contact.get_category.category_title+'</td> </tr>');
                $('#profile_details').show();
            }
        });
}
</script>
