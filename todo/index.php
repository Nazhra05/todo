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

    <!-- Link CSS Hamdan -->
    <link rel="stylesheet" href="style.css" />

    <!-- Link Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet" />

    <title>To Do</title>
  </head>
  <body>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background-color: #181818">
      <a class="navbar-brand fw-bold" href="#home"><i class="bi bi-check2-square"></i>To Do</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end m-2" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" aria-current="page" href="index.php"><i class="bi bi-house-fill"></i> Home</a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-activity"></i> Features </a>
            <ul class="dropdown-menu fst-italic" aria-labelledby="navbarDropdown" style="background-color: #0c9463">
              <li>
                <a class="dropdown-item" href="login.php"><i class="bi bi-list-task"></i> Planner</a>
              </li>
              <li><hr class="dropdown-divider" /></li>
              <li>
                <a class="dropdown-item" href="login.php"><i class="bi bi-calendar-event"></i> Productivity Calendar</a>
              </li>
              <li><hr class="dropdown-divider" /></li>
              <li>
                <a class="dropdown-item" href="login.php"><i class="bi bi-file-music-fill"></i> Ambient Music</a>
              </li>
            </ul>
          </li>
          <a>|</a>
          <a class="nav-link" href="login.php"><i class="bi bi-newspaper"></i> Resource</a>
          <a>|</a>
          <a class="nav-link" href="login.php"><i class="bi bi-box-arrow-in-right"></i> Sign In</a>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Profile Section -->
    <section class="profile" id="home" style="padding-bottom: 5cm">
      <div class="row pb-5">
        <div class="col-8">
          <h2 class="mt-3">Make Life More Organize & Productive With</h2>
          <h1 style="color: #0c9463"><i class="bi bi-check2-square"></i>To Do</h1>
          <p class="mt-5 fs-" style="text-align: justify; padding-right: 1.5cm">
            To Do is a website built to make it easier for you to do the tasks you do in your daily life. With To Do you can more easily manage your schedule or make a list of daily, weekly, monthly or yearly tasks that you want to do! To
            Do has a number of features that can make you more productive. These features include Planner, Calendar, Productive Timer, to soothing sounds that will make you more focused on your work. Not only that, To Do also has a lot of
            productivity resources that can help you do your job more efficiently than before. Before starting, let's register first so you can access all the features!
          </p>
          <div>
            <a href="signup.php" type="button" class="fw-bold fs-5" style="color: #0c9463; text-decoration: none">Sign In</a>
          </div>
        </div>
        <div class="col-4 mt-3 text-center">
          <object data="assets/organizing.svg"></object>
        </div>
      </div>
    </section>
    <!-- Activity Section -->
    <section class="activity" id="activity">
      <div class="row p-5" style="background-color: #0c9463" id="intra">
        <div class="col-5">
          <object class="kelas" data="assets/Planner.svg" style="width: 15cm; height: 15cm; padding-bottom: 1cm"></object>
        </div>
        <!-- <div class="col-2"></div> -->
        <div class="col-7" style="color: #ffffff; padding-top: 2.5cm; padding-left: 2cm; padding-right: 1.5cm">
          <h3>Planner</h3>
          <p class="mt-3">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae quam, necessitatibus doloribus numquam fuga natus sequi dolore, impedit error vitae unde enim quidem placeat accusamus repellendus ipsam, repellat repudiandae
            voluptates a magnam quod. Consequuntur, dolorem numquam quisquam aperiam facere maiores. Sed voluptate doloremque reprehenderit quisquam veritatis eveniet voluptatibus, suscipit cum, ipsam modi aspernatur! Consequuntur, rem a
            reiciendis perspiciatis quis saepe!
          </p>
        </div>
      </div>
      <div class="koku row p-5" style="background-color: #181818" id="koku">
        <div class="col-7" style="color: #ffffff; padding-top: 4cm; padding-left: 2cm; padding-right: 1.5cm">
          <h3>Calendar Productivity</h3>
          <p class="mt-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum repellat cupiditate velit. Quaerat, quia. Soluta obcaecati libero corrupti accusantium nobis iste ducimus dignissimos beatae distinctio non quod consequatur
            ipsam, nostrum earum, sapiente consectetur numquam quibusdam. Ipsa, fugit pariatur mollitia perferendis delectus vero culpa quis vitae accusamus! Iure autem recusandae repudiandae nobis, saepe in similique expedita blanditiis
            voluptates mollitia natus nulla?
          </p>
        </div>

        <div class="col-5">
          <object data="assets/Calendar.svg" style="width: 13cm; height: 13cm; padding-bottom: 1cm; padding-right: 2cm"></object>
        </div>
      </div>
      <div class="row p-5" style="background-color: #0c9463" id="intra">
        <div class="col-5">
          <object class="kelas" data="assets/Ambient.svg" style="width: 15cm; height: 15cm; padding-bottom: 1cm"></object>
        </div>
        <!-- <div class="col-2"></div> -->
        <div class="col-7" style="color: #ffffff; padding-top: 4cm; padding-left: 2cm; padding-right: 1.5cm">
          <h3>Ambient Music</h3>
          <p class="mt-3">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae quam, necessitatibus doloribus numquam fuga natus sequi dolore, impedit error vitae unde enim quidem placeat accusamus repellendus ipsam, repellat repudiandae
            voluptates a magnam quod. Consequuntur, dolorem numquam quisquam aperiam facere maiores. Sed voluptate doloremque reprehenderit quisquam veritatis eveniet voluptatibus, suscipit cum, ipsam modi aspernatur! Consequuntur, rem a
            reiciendis perspiciatis quis saepe!
          </p>
        </div>
      </div>
    </section>
    <!-- Activity Section End -->
    <!-- News Section -->
    <section class="news p-5" id="news" style="background-color: #181818; color: #ffffff">
      <div class="row justify-content-center pt-5">
        <div class="col-4 text-center justify-content-center">
          <img src="assets/resource1.svg" />
        </div>
        <div class="col-4 p-4 justify-content-center text-center">
          <h3>Resources</h3>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit veritatis cum nobis et debitis accusamus rerum dicta voluptate. Voluptatum ipsam, natus ducimus minus ab atque maiores impedit non explicabo ipsum, laudantium
            enim delectus perferendis quis veniam architecto officia animi iure earum. Accusamus vel, dolorem tenetur natus aut quisquam facilis nostrum animi optio, cum qui nulla ratione laboriosam? Cupiditate, quos rem.
          </p>
          <div class="list-group">
            <a href="signup.php" type="button" class="list-group-item fw-bold">Sign In</a>
          </div>
        </div>
        <div class="col-4">
          <img src="assets/resource2.svg" />
        </div>
      </div>
    </section>
    <!-- News Section end-->
    <div class="d-flex flex-column h-100" style="color: #ffffff">
      <!-- FOOTER -->
      <footer class="w-100 py-4 flex-shrink-0" style="background-color: #434242; color: #ffffff; text-decoration: none">
        <div class="container py-4">
          <div class="row gy-4 gx-5">
            <div class="col-lg-4 col-md-6">
              <h5 class="h1 text-white"><i class="bi bi-check2-square"></i>To Do</h5>
              <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              <p class="small mb-0">&copy; Copyrights. All rights reserved.</p>
            </div>

            <div class="col-lg-2 col-md-6">
              <h5 class="text-white mb-3">Quick links</h5>
              <ul class="list-unstyled">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Get started</a></li>
                <li><a href="#">FAQ</a></li>
              </ul>
            </div>
            <div class="col-lg-2 col-md-6">
              <h5 class="mb-3 text-decoration-none">Media Socials</h5>
              <ul class="list-unstyled">
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Email</a></li>
                <li><a href="#">Snapchat</a></li>
              </ul>
            </div>
            <div class="col-lg-4 col-md-6">
              <h5 class="text-white mb-3">Newsletter</h5>
              <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              <form action="#">
                <div class="input-group mb-3">
                </div>
              </form>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"
      integrity="sha512-z4OUqw38qNLpn1libAN9BsoDx6nbNFio5lA6CuTp9NlK83b89hgyCVq+N5FdBJptINztxn1Z3SaKSKUS5UP60Q=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <!-- Footer Section End-->
  </body>
</html>
