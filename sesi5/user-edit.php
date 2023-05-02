<h3>Menambahkan user baru</h3>

<?php
    $iduser = $_GET["p1"]
    $sql ="SELECT tu.nama, tu.email, tu.username, tu.iduser  FROM tbuser tu WHERE tu.iduser='".$iduser."';";
    $hasil = mysqli_query($cnn, $sql);
    if(mysqli_num_rows($hasil)>0){
        $h = mysqli_fetch_assoc
    }

<form method="post" action="dtuser.php">
    <input type="hidden" name="act" value="update">
    <div>
        Nama Lengkap
        <input type="text" nama="txNAMA">
    </div>

    <div>
        Email
        <input type="email" name="txEMAIL">
    </div>

    <div>
        Username
        <input type="text" name="txUSER">
    </div>

    <div>
        Password
        <input type="password" name="txPASS1">
    </div>

    <div>
        Verifikasi Password
        <input type="password" name="txPASS2">
    </div>

    <div>
        <button type="submit" >Ubah Data</button>
        <a href="dtuser.php">Batal</a>
    </div>

</form>