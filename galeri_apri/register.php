<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Gallery Photo</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="index.php">Website Gallery Photo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-2" id="navbarNav">
      <div class="navbar-nav me-auto">
    </div>
    <a href="register.php" class="btn btn-outline-primary m-1">Sign Up</a>
    <a href="login.php" class="btn btn-outline-success m-1">Log in</a>
  </div>
</div>
</nav>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body bg-light">
                    <div class="text-center">
                        <h5>Create new account</h5>
                    </div>
                    <form action="config/aksi_registrasi.php " method="POST">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" placeholder="Username" class="form-control" required>
                        <label class="form-label">Password</label>
                        <input type="password" name="password" placeholder="Create a password" class="form-control" required>
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email address" required>
                        <label class="form-label">Name</label>
                        <input type="text" name="namalengkap" class="form-control" placeholder="Your name" required>
                        <label class="form-label">Address</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Addres" required>
                        <div class="d-grid mt-2">
                            <button class="btn btn-info" type="submit" name="sigup">Sign Up</button>
                        </div>
                    </form>
                    <hr>
                    <div class="text-center">
                    <p>Have an account? <a href="login.php">Log In</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
<p>&copy; UKK RPL 2024 | Handled by Ralma Anjani</p>
</footer>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>