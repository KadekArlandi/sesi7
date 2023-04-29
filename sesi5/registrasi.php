<?php
include_once("konfigurasi.php");
    $psn = "";
    if(isset($_POST["txNAMA"])){
        $pass1 = $_POST["txPASS1"];
        $pass2 = $_POST["txPASS2"];
        if($pass1==$pass2){
            $nama = $_POST["txNAMA"];
            $email = $_POST["txEMAIL"];
            $user = $_POST["txUSER"];


            $sql = "INSERT INTO tbuser(nama, email, username, passkey, iduser) VALUE('$nama','$email','$user','".md5($pass1)."','".md5($nama)."');";   
            echo $sql;

            $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT) or die("Gagal terkoneksi ke dbmahasiswa");
            $hasil = mysqli_query($cnn, $sql);
            if($hasil){
                $psn = "Registrasi user sukses, Silahkan login dengan user tersebut";
            }else{
                $psn = "GAGAL, SILAHKAN DIULANG!!!";
            }

        }else{
            $psn = "Password Tidak Sama";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi User</title>
</head>
<body>

<?php
    if(!$psn==""){
        echo "<div>".$psn. "</div>";
    }                                
?>
    
    <form action="registrasi.php" method="POST">

        <div>
            Nama Lengkap user <br>
            <input type="text" name="txNAMA">
        </div>
        <div>    
            Email User <br>
            <input type="email" name="txEMAIL">
        </div>
        <div>
            Username <br>
            <input type="text" name="txUSER">
        </div>
        <div>
            Password <br>
            <input type="password" name="txPASS1">
        </div>
        <div>
            Password <sup>Konfirmasi</sup> <br>
            <input type="password" name="txPASS2"> 
        </div>
        <div>
            <br>
            <button type="submit">Registrasi</button> 
        </div>

</body>
</html>