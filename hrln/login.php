<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
</head>
<body class="bg-success">
    <div class="container">
    <div class="row">
    <div class="col-md-4 offset-md-4">
        <div class="card top-50 border-0">
     <div class="card-body">
    <h5 class="text-success">
        Login Page
    </h5>
    <form action="login_cek.php" method="post">
        <div class="form-group mb-2">
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control" placeholder="masukkan email">
        </div>

        <div class="form-group mb-2">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" placeholder="masukkan password">
        </div>
        <button type="submit" class="btn btn-success" class="btn-success">Login</button>
    </form>
  </div>
  </div>
</div>
</div>
  </div>   
    </div>

   <script src="asset/js/bootstrap.min.css"></script>
</body>
</html>