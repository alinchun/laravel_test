<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
    
<body>
<div class="container mt-3">


    <h1>User Detail</h1>

    <table class="table table-hover">
       
        <tr>
            <td>NO</td>
            <td>{{ $user->id }}</td>
        </tr>
        <tr>
            <td>Phone</td>
            <td>{{ $user->phone }}</td>
        </tr>
        <tr>
            <td>Password</td>
            <td>*********</td>
        </tr>
        <tr>
            <td>Name</td>
            <td>{{ $user->name }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
            <td>Created Time</td>
            <td>{{ $user->created_at }}</td>
        </tr>
        <tr>
            <td>Updated Time</td>
            <td>{{ $user->updated_at }}</td>
        </tr>
    </table>

</div>



</body>
</html>
