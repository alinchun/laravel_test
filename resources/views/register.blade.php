<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<div class="container mt-3">
  <h2>Register</h2>
  @if (Session::has('success'))
  <div class="alert alert-success" role="alert">
    {{Session::get('success')}}
  </div>   
 
      
  @endif
  
  <form action="{{route ('register')}}" method="post">
    @csrf
      <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingPassword"  name="phone">
          <label for="floatingPassword">Phone</label>
        </div>
        @error('phone')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword"  name="password">
            <label for="floatingPassword">Password</label>
          </div>
         
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingPassword" name="name">
            <label for="floatingPassword">Name</label>
          </div>

        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="floatingInput"  name="email">
          <label for="floatingInput">Email address</label>
        </div>


  <button type="submit" class="btn btn-primary">Register</button>
</form>

</div>

</body>
</html>
