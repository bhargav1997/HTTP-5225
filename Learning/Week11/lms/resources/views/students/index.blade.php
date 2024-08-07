@extends('layouts/admin')
@section('content')
    <h1> View All Students</h1>

   
    <div class="row">
        @foreach ($students as $student)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $student -> fname}} {{ $student -> lname }}
                        </h5>
                        <a href="{{ route('students.edit', $student->id)}}" class=" btn btn-primary">Edit</a>
                        <a href="{{ route('students.trash', $student->id)}}" class="btn btn-danger">Delete</a>
                    </div>

                </div>
            </div>
        @endforeach
    </div>


    <!-- <table class="table table-striped">
        <tr class="table-primary">
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </tr>
        @foreach ( $students as $student )
            <tr class="table-secondary">
                <td>{{ $student->fname }}</td>
                <td>{{ $student->lname }}</td>
                <td>{{ $student->email }}</td>
        @endforeach
    </table> -->


@endsection


