<?php
    include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS);
    IF($cnn){
        echo "Koneksi Sukses";
        $sql1 = "CREATE DATABASE ". DBNAME;

        $hasil = mysqli_query($cnn, $sql1);

        if($hasil){
            echo "database : ". DBNAME. "berhasil dibuat";
        }else{;
            echo "database : ". DBNAME. "gagal dibuat";
        }

    }else{
        echo "Koneksi Gagal<br>" . mysqli_connect_error($cnn);
    }


