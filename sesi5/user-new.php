<h3>Menambahkan user baru</h3>

<form method="post" action="dtuser.php">
    <input type="hidden" name="act" value="store">
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
        <button type="submit" >Buat Data Baru</button>
        <a href="dtuser.php">Batal</a>
    </div>

</form>