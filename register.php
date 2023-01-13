<?php
require 'function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Register-Hombre Poerte</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/register.css" />
</head>

<body>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 register-section-wrapper">
          <div class="brand-wrapper">
            <h2>Hombre Poerte</h2>
          </div>
          <div class="register-wrapper my-auto">
            <h1 class="register-title">Register</h1>
            <form method="post">
              <div class="form-group">
                <label for="email">Username</label>
                <input type="text" name="username" id="email" class="form-control" placeholder="email@example.com" />
              </div>
              <div class="form-group mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control"
                  placeholder="enter your passsword" />
              </div>
              <div class="form-group mb-5">
                <label for="nama">Nama Pengguna</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="enter your name" />
              </div>
              <button type="submit" name="register" class="btn btn-block register-btn">Register</button>
            </form>
            <p class="register-wrapper-footer-text"> already have an account? <a href="login.html"
                class="text-reset">Login here</a>
            </p>
          </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="images/about-img.jpg" alt="register image" class="register-img" />
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>