<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My LMS Basic Website</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

</head>
<body class="container">

  <header>
    <h1>Welcome to student Register </h1>
  </header>
<br>
<a href="{{ route('student.index') }}" class="btn btn-primary" role="button">Student View All</a>
<br>
<form class="mt-5" action="{{ route('student.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control" name="firstName" placeholder="Enter First Name" required>
        </div>
        <div class="col">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="lastName" placeholder="Enter Last Name" required>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <label for="contact" class="form-label">Contact Number</label>
            <input type="text" class="form-control" name="contact" placeholder="Enter Contact Number" required>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" name="address" placeholder="Enter Address" required>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <label for="bod" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" id="bod" name="bod" required>
        </div>
    </div>
    <br>
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>
</body>
</html>
