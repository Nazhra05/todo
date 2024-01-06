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
          <a class="nav-link" aria-current="page" href="Home.php"><i class="bi bi-house-fill"></i> Home</a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-activity"></i> Features </a>
            <ul class="dropdown-menu fst-italic" aria-labelledby="navbarDropdown" style="background-color: #0c9463">
              <li>
                <a class="dropdown-item" href="todo2.php"><i class="bi bi-list-task"></i> Planner</a>
              </li>
              <li><hr class="dropdown-divider" /></li>
              <li>
                <a class="dropdown-item" href="calendar.php"><i class="bi bi-calendar-event"></i> Productivity Calendar</a>
              </li>
              <li><hr class="dropdown-divider" /></li>
              <li>
                <a class="dropdown-item" href="music.php"><i class="bi bi-file-music-fill"></i> Ambient Music</a>
              </li>
            </ul>
          </li>
          <a>|</a>
          <a class="nav-link" href="resource.php"><i class="bi bi-newspaper"></i> Resource</a>
          <a>|</a>
          <a class="nav-link" href="logout.php"><i class="bi bi-gear-fill"></i> Log Out</a>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Profile Section -->
    <section class="profile" id="home" style="padding-bottom: 5cm; background-color:#0c9463">
      <div class="row">
        <div class="col-8">
          <h2 class="mt-1">Lets Play The Music That Can Make U More Focus</h2>
          <h1 style="color: #0c9463"><i class="bi bi-check2-square"></i></h1>
          <p class=" fs-5" style="text-align: justify; padding-right: 1.5cm">
            Hope You Enjoy!
          </p> 
        <iframe style="border-radius:8px" src="https://open.spotify.com/embed/show/0iIKcigzZSW9JRsQgGKuil?utm_source=generator&t=0" width="100%" height="325" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe> 
        <iframe style="border-radius:8px" src="https://open.spotify.com/embed/episode/4LTl1h5bqLtO1v3lNvkuqu?utm_source=generator" width="100%" height="325" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
        <iframe style="border-radius:8px" src="https://open.spotify.com/embed/episode/4PDSj9f0VOlo2mWu6DPvVu?utm_source=generator" width="100%" height="325" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            <link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>

        </div>
        <div class="col-4 mt-1 text-center">
          <object data="assets/Ambient.svg"></object>
        </div>
      </div>

    </section>
    
      
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
