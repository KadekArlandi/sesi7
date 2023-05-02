<h2>Daftar User</h2>

<table>
    <tr>
        <th>#</th>
        <th>Nama Lengkap</th>
        <th>Email</th>
        <th>username</th>
        <th><a hrev="dtuser.php?aksi=new">Data Baru</th>
    </tr>    

    <tr>
        <th>$cx</th>
        <th>Nama Lengkap</th>
        <th>Email</th>
        <th>username</th>
        <th><a hrev="dtuser.php?aksi=edit">Edit</a> <a href="dtuser.php?aksi=del">Hapus</a></th>
    </tr>

<?php   

$sql = "SELECT tu.nama, tu.email, tu.username, tu.iduser FROM tbuser tu ORDER BY tu.nama;";
$hasil = mysqli_query($cnn, $sql);
$cx = 1;
while($h - mysqli_fetch_assoc($hasil)){
    echo"
    <tr>
    <th>$cx</th>
    <th>".$h["nama"]".</th>
    <th>".$h["email"]".</th>
    <th>".$h["username"]"</th>
    <th><a hrev=\"dtuser.php?aksi=edit\">Edit</a> <a href=\"dtuser.php?aksi=del\">Hapus</a></th>
    </tr>"
    $cx++;
}


?>