<?php
session_start(); 
$id = $_SESSION['id_username'];
?>
<?php
include "header.php";
?>

    <section class="profile" id="home" style="padding-bottom: 5cm">
      <div class="row pb-5">
        <div class="col-8">
          <h2 class="mt-3">Hey! Welcome Back To,</h2>
          <h1 style="color: #0c9463"><i class="bi bi-check2-square"></i>To Do</h1>
          <p class="mt-5 fs-" style="text-align: justify; padding-right: 1.5cm">
            What We Gonna Do This Week? Or You Can Check Some Reference In Our Resource!
          </p>
        <div class="btn-group-vertical button-group-lg " style="justify-content: start;">
        <a href="todo2.php" class="btn btn-outline-success btn-lg"><i class="bi bi-list-task"></i> My To Do List</a>
        <a href="calendar.php" class="btn btn-outline-success btn-lg"><i class="bi bi-calendar-event"></i> My Events Calendar</a>
        <a href="music.php" class="btn btn-outline-success btn-lg"><i class="bi bi-file-music-fill"></i> My Ambient Music</a>
        </div>
                
        </div>
        <div class="col-4 mt-3 text-center">
          <object data="assets/organizing.svg"></object>
        </div>
      </div>

    </section>

<?php
include "footer.php";
?>