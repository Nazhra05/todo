<?php
session_start();
if (isset($_SESSION['user_username'])) {
    header("location:Home.php");
}
include("inc_koneksi.php");
$username = "";
$password = "";
$err = "";
if (isset($_POST['login'])) {
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    if ($username == '' or $password == '') {
        $err .= "<li>Username / Password Salah!</li>";
    }
    if (empty($err)) {
        $sql1 = "select * from user where username = '$username'";
        $q1 = mysqli_query($koneksi, $sql1);
        $r1 = mysqli_fetch_array($q1);
        if ($r1['password'] != md5($password)) {
            $err .= "<li>Akun tidak ditemukan</li>";
        }
        else {
        $_SESSION['user_username'] = $username;
        $_SESSION['id_username'] = $r1['login_id'];
        header("location:Home.php");
        exit();
    }
    }


}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />

    <!-- Link CSS -->
    <link rel="stylesheet" href="login.css" />
    <title>To Do</title>
  </head>
  <body>
    <section class="h-100 gradient-form" style="background-color: #eee">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-xl-10">
            <div class="card rounded-3 text-black">
              <div class="row g-0">
                <div class="col-lg-6">
                  <div class="card-body p-md-5 mx-md-4">
                    <div class="text-center">
                      <h1 style="color: #0c9463"><i class="bi bi-check2-square"></i>To Do</h1>
                      <h4 class="mt-1 mb-5 pb-1">Make Life More Productive!</h4>
                    </div>

                    <form action="" method="post">
                      <p>Please login to your account</p>

                      <div class="form-outline mb-4">
                        <input type="text" name="username" id="form2Example22" class="input" placeholder="Enter Your Username" />
                        <label class="form-label" for="form2Example11">Username</label>
                      </div>

                      <div class="form-outline mb-4">
                        <input type="password" id="form2Example22" name="password" class="input" placeholder="Enter Your Password"/>
                        <label class="form-label" for="form2Example22">Password</label>
                      </div>

                      <div class="text-center pt-1 mb-5 pb-1">
                        <input class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" name="login" value="Log In"></input>
                        <a class="text-muted" href="#!"></a>
                      </div>

                      <div class="d-flex align-items-center justify-content-center pb-4">
                        <p class="mb-0 me-2">Don't have an account?</p>
                        <a type="button" class="btn btn-outline-success" href="signup.php">Create new</a>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                  <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                    <h2>Welcome!</h2>
                    <h4 class="mb-4">Happy To See You Here</h4>
                    <p class="small mb-0">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                      commodo consequat.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>