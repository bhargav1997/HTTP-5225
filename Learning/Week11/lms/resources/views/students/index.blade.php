<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS</title>
</head>
<body>
    <h1> All Students</h1>

    @foreach ( $students as $student )

    <p>{{ $student->fname }}</p>
    <p>{{ $student->lname }}</p>
    <p>{{ $student->email }}</p>
    
    @endforeach
</body>
</html>