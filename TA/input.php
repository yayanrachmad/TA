<?php
include('Database.php');
include('function.php');
?>
<form action="function.php/simpan_petugas" method="POST">
    <fieldset>
        <legend>
            <h2>Tambah data</h2>
        </legend>
        <label>nama <input type="text" name="nama" /></label> <br>
        <label>gender <input type="text" name="gender" /> </label><br>
        <label>kelas <input type="text" name="kelas" /> </label> <br>
        <label>foto <input type="file" name="foto" /></label> <br>
        <label>telp <input type="number" name="telp"></label><br>
        <label>email <input type="text" name="email"></label><br>
        <label>alamat <input type="text" name="alamat"></label>
        <br>
        <label>
            <input type="submit" name="btn_simpan" value="Simpan" />
            <input type="reset" name="reset" value="Besihkan" />
        </label>
        <br>
        <p><?php echo isset($pesan) ? $pesan : "" ?></p>
    </fieldset>
</form>





<!-- <html>

<head>
    <title>Input petugas uks</title>
</head>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <label>nama :</label>
        <input type="text" name="nim" size="15" />
        <label>gender :</label>
        <input ty />
        <label>kelas :</label>
        <input type="text" name="kelas" size="15" />
        <label>foto :</label>
        <input type="file" />
        <label>telepon :</label>
        <input type="text" name="telp" size="15" />
        <label>email :</label>
        <input type="text" name="email" size="15" />
        <label>alamat :</label>
        <input type="text" name="alamat" size="15" />
        <input type="Submit" name="submit" value="Submit">
    </form>

</body>

</html> -->