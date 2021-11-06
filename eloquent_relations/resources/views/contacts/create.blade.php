@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><h1>{{ __('Contact') }}</h1></div>

                <div class="card-body">
                    @if (Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form action="add-contact" method="post">
                        @csrf
                        <div class="mb-3">
                            <label  class="form-label">Contact No</label>
                            <input type="text" name="contact_no" class="form-control"  placeholder="Contact No">

                            <span style="color: red">
                                @error('contact_no')
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
