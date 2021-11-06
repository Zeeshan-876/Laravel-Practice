@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center"><h1>{{ __('User Profile ') }}</h1></div>

                <div class="card-body">
                    <table class="table table-striped  table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Admin ID</th>
                            <th scope="col">Admin Name</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Father Name</th>
                            <th scope="col">CNIC</th>
                            <th scope="col">DOB</th>
                            <th scope="col">Contact No</th>
                            <th scope="col">Category</th>
                          </tr>
                        </thead>
                        <tbody>

                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
