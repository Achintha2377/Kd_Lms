<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My LMS Basic Website</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }
    header {
      background-color: #333;
      color: white;
      padding: 15px;
      text-align: center;
    }
    main {
      padding: 20px;
    }
    footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 10px;
      position: fixed;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>
<body class="container">

  <header>
    <h1>Welcome to My LMS Website</h1>
  </header>
  <br>
  <a href="{{ route('student.create') }}" class="btn btn-primary" role="button">Register Student</a>
  <br><br>

  <table class="table table-striped mt-5">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Contact Number</th>
        <th scope="col">Address</th>
        <th scope="col">BOD</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($students as $student)
      <tr>
        <th scope="row">{{ $student->id }}</th>
        <td>{{ $student->firstName }}</td>
        <td>{{ $student->lastName }}</td>
        <td>{{ $student->contact }}</td>
        <td>{{ $student->address }}</td>
        <td>{{ $student->bod }}</td>
        <td><a type="button" class="btn btn-success" href="{{ route('student.edit',$student->id) }}">Edit</a>
            <a href="{{ route('student.delete', $student->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this student?')">Delete</a></td>
    </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>
