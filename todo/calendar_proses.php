<?php

    //mengambil data dari form input
    $id_login        = intval($_POST['id_login']);
    $kegiatan   = $_POST['kegiatan'];
    $mulai      = $_POST['mulai'];
    $selesai    = $_POST['selesai'];

    //membuat koneksi ke database
    $koneksi = mysqli_connect('localhost', 'root', '', 'todo');

    //insert data ke dalam database
    mysqli_query($koneksi, "insert into jadwal values(NULL,$id_login, '$kegiatan', '$mulai', '$selesai')");
    

    //kembali ke halaman index.php
    header("location: calendar.php");

?>