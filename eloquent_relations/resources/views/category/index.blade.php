@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><h1>{{ __('Category') }}</h1></div>

                <div class="card-body">
                    @if (Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form action="add-category" method="post">
                        @csrf
                        <div class="mb-3">
                            <label  class="form-label">Category Name</label>
                            <input type="text" name="category_title" class="form-control"  placeholder="Category Name">

                            <span style="color: red">
                                @error('category_title')
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
