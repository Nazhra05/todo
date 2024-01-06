<?php
session_start(); 
$id = $_SESSION['id_username'];
?>
<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>To Do Calendar</title>
        <!-- bootstrap cdn  -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
            integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

        <!-- fullcalendar css  -->
        <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.css' rel='stylesheet' />

         <!-- Link CSS Hamdan -->
         <link rel="stylesheet" href="calendar.css" />
         <link rel="stylesheet" href="style.css" />
        

        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />

        <!-- Link Font Google -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet" />

    </head>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #181818">
      <a class="navbar-brand fw-bold" href="Home.php"><i class="bi bi-check2-square"></i>To Do Calendar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end m-2" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" aria-current="page" href="Home.php"><i class="bi bi-house-fill"></i> Home</a>
          <a class="nav-link" href="resource.php"><i class="bi bi-newspaper"></i> Resource</a>
          <a>|</a>
          <a class="nav-link" href="logout.php"><i class="bi bi-gear-fill"></i> Log Out</a>
        </div>
      </div>
    </nav>
    <body style="background-color: #181818;">

        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-4">
                    <div class="alert alert-success" role="alert">
                        <h4>My Activity</h4>
                    </div>
                    <div class="card" style="background-color: #0c9463;">
                        <form action="calendar_proses.php" method="POST">
                            <input type="hidden" name="id_login" id="id_login" value="<?php echo $_SESSION['id_username']?>">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="form-label">What is Your Activity?</div>
                                    <textarea name="kegiatan" class="form-control" id="kegiatan" cols="30"
                                        rows="2"></textarea>
                                </div>
                                <div class="form-group mt-4">
                                    <div class="form-label">Start</div>
                                    <input type="datetime-local" class="form-control" name="mulai" id="mulai">
                                </div>
                                <div class="form-group mt-4">
                                    <div class="form-label">End</div>
                                    <input type="datetime-local" class="form-control" name="selesai" id="selesai">
                                </div>
                                <div class="form-group mt-4">
                                    <button type="submit" class="btn btn-dark">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div id="calendar" style="background-color: white;"></div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.js'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
            integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    events: [ <?php 

                        //melakukan koneksi ke database
                        $koneksi    = mysqli_connect('localhost', 'root', '', 'todo');
                        //mengambil data dari tabel jadwal
                        $data       = mysqli_query($koneksi, "SELECT * from jadwal WHERE login_id = $id");
                        //melakukan looping
                        while($d = mysqli_fetch_array($data)){ ?>
                        {
                        title: '<?php echo $d['kegiatan']; ?>', //menampilkan title dari tabel
                        start: '<?php echo $d['mulai']; ?>', //menampilkan tgl mulai dari tabel
                        end: '<?php echo $d['selesai']; ?>' //menampilkan tgl selesai dari tabel
                        },
                        <?php } ?>
                    ],
                    selectOverlap: function (event) {
                        return event.rendering === 'background';
                    }
                });
    
                calendar.render();
            });
        </script>


</body>
    
</html>