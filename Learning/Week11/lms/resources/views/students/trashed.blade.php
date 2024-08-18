@extends('layouts/admin')
@section('content')
    <h1> Deleted Students</h1>

    <div class="row">
        @foreach ($students as $student)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $student -> fname}} {{ $student -> lname }}
                        </h5>
                        <div class="btn-group">
                        <form action="{{ route('students.destroy', $student->id)}}" method="POST" class="">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="{{ route('students.restore', $student->id)}}" class="btn btn-info">Restore</a>
                        </div>  
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


