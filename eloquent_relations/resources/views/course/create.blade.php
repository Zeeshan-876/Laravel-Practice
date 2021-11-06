@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><h1>{{ __('Courses') }}</h1></div>

                <div class="card-body">
                    @if (Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form action="add-courses" method="post">
                        @csrf
                        <div class="mb-3">
                            <label  class="form-label">Course Name</label>
                            <select class="js-example-basic-multiple w-75" name="enroll_courses[]" multiple="multiple">
                                <option value="">&nbsp;</option>
                                @foreach ($setup_course_data as $courses)
                                    <option value="{{ $courses['id'] }}">{{ $courses['course_title'] }}</option>
                                @endforeach
                              </select>

                            <span style="color: red">
                                @error('enroll_courses')
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

@section('script')

<script>
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>

@endsection
