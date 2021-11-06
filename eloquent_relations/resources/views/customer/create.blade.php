@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><h1>{{ __('Customer Profile') }}</h1></div>

                <div class="card-body">
                    @if (Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form action="add-customer" method="post">
                        @csrf
                        <div class="mb-3">
                            <label  class="form-label">Customer Name</label>
                            <input type="text" name="customer_name" class="form-control"  placeholder="Customer Name">

                            <span style="color: red">
                                @error('customer_name')
                                    {{ $message }}
                                @enderror
                            </span>

                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Father Name</label>
                            <input type="text" name="father_name" class="form-control"  placeholder="Father Name">

                            <span style="color: red">
                                @error('father_name')
                                    {{ $message }}
                                @enderror
                            </span>

                        </div>
                        <div class="mb-3">
                            <label  class="form-label">CNIC</label>
                            <input type="text" name="cnic" class="form-control" placeholder="CNIC">

                            <span style="color: red">
                                @error('cnic')
                                    {{ $message }}
                                @enderror
                            </span>

                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Date Of Birth</label>
                            <input type="date" name="dateofbirth" class="form-control">
                            

                            <span style="color: red">
                                @error('dateofbirth')
                                    {{ $message }}
                                @enderror
                            </span>

                        </div>
                        <button type="submit" class="btn btn-primary w-100">Save</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
