<?php
include_once("konfigurasi.php");

    $psn = "";
    if(isset($_POST["txUSER"])){
        $user = $_POST["txUSER"];
        $pwd = $_POST["txPASS"];

        //echo "DEBUG : Username : ".$user;
        //echo "Password : ".$pwd;

        $sql = "SELECT tu.nama, tu.email, tu.username, tu.passkey, tu.iduser FROM tbuser tu WHERE tu.username = '".($user)."';";
        $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT) or die("Gagal terkoneksi ke dbmahasiswa");
        $hasil = mysqli_query($cnn, $sql);
        $jdata = mysqli_num_rows($hasil);
        if($jdata > 0){

            //echo "DEBUG : jdata=>".$jdata;

            $h = mysqli_fetch_assoc($hasil);
            $_SESSION["login"] = $h['iduser'];
            $_SESSION["user"] = $h["username"];
            header("location: dassboard.php");   
            //echo "DEBUG: <br> Nama : ".$h["nama"];

            if(md5($pwd) == $h["passkey"]){
                //echo "DEBUG: password sama";   
            }else{
                echo "DEBUG: password berbeda";
            }  
        }else{
            $psn = "LOGIN GAGAL!!";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasboard</title>
</head>
<body>

    <div><?=$psn;?></div>

    <form method="POST" action="loginpage.php">
        <h3>Login</h3>

        <input type="text" name="txUSER" placeholder="" />
        <input type="password" name="txPASS" />
        <button type="submit" >Login</button>
    </form>

</body>
</html>