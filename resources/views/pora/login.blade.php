<!DOCTYPE html>
<html>
<head>
  <title>Halaman Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 mt-5">
        <h2 class="text-center mb-4">Login pora</h2>
        <div class="card">
          <div class="card-body">
            <form method="POST" action="proses_login.php">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Login</button>
              <p class="mt-5 mb-3 text-muted">Belum Punya Akun? Silahkan Daftar!</p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>