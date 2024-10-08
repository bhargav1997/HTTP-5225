@extends('layouts/admin')
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">
            Add a student
        </h1>
    </div>
</div>

<div class="row">
    <form method="POST" action="{{ route('students.store') }}">
        @if ($errors -> any())
          <div class="alert alert-danger">
            <ul>
                @foreach ($errors -> all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
          </div>
        @endif

        {{ csrf_field() }}
        <div class="mb-3">
          <label for="fname" class="form-label">First Name</label>
          <input type="text" class="form-control" name="fname" id="fname" aria-describedby="fname">
        </div>
        <div class="mb-3">
            <label for="lname" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="lname" id="lname" aria-describedby="lname">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email"  aria-describedby="email">
            @error('email')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="mb-3">
            <label for="courses" class="form-label">Courses</label>
            <select class="form-select" name="courses" id="courses" aria-label="multiple course select">
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                @endforeach
            </select>
          </div>
        <button type="submit" class="btn btn-primary">Add Student</button>
      </form>
</div>
@endsection
