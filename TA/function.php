<?php
// koneksi database

$koneksi = mysqli_connect("localhost", "root", "", "uks");
if ($koneksi == false) {
    die("Gagal melakukan koneksi ke database." . mysqli_connect_error());
}

function simpan_petugas($nama, $gender, $kelas, $foto, $telp, $email, $alamat)
{
    global $koneksi;
    $koneksi = "INSERT INTO data_petugas(nama, gender, kelas, foto, telp, email,alamat) 
    VALUES (" . $nama . ",'" . $gender . "','" . $kelas . "','" . $foto . "','" . $telp . "','" . $email . "','" . $alamat . "')"; {
        return false;
    }
}
    //Close statement

    //End function



// if (isset($_POST['btn_simpan'])) {
//     $nama = $_POST['nama'];
//     $gender = $_POST['gender'];
//     $kelas = $_POST['kelas'];
//     $foto = $_POST['foto'];
//     $telp = $_POST['telp'];
//     $email = $_POST['email'];
//     $alamat = $_POST['alamat'];


//     $sql = "INSERT INTO data_petugas (nama,gender, kelas, foto, telp,email,alamat) VALUES(" . $nama . ",'" . $gender . "','" . $kelas . "','" . $foto . "','" . $telp . "','" . $email . "','" . $alamat . "')";
//     $simpan = mysqli_query($koneksi, $sql);
//     if ($simpan && isset($_GET['aksi'])) {
//     } {
//         $pesan = "Tidak dapat menyimpan, data belum lengkap!";
//     }
// }






// function simpan_petugas($nama, $gender, $kelas, $foto, $telp, $email, $alamat)
// {
//     global $koneksi;
//     $sql = "INSERT INTO data_petugas(nama, gender, kelas, foto, telp, email,alamat) VALUES (" . $nama . ",'" . $gender . "','" . $kelas . "','" . $foto . "','" . $telp . "','" . $email . "','" . $alamat . "')";
//     if ($stmt = mysqli_prepare($koneksi, $sql)) {
//         mysqli_stmt_bind_param($stmt, "ss", $param_nama, $param_gender, $param_kelas, $param_foto, $param_telp, $param_email, $param_alamat);
//         $param_nama = $nama;
//         $param_gender = $gender;
//         $param_kelas = $kelas;
//         $param_foto = $foto;
//         $param_telp = $telp;
//         $param_email = $email;
//         $param_alamat = $alamat;

//         if (mysqli_stmt_execute($stmt)) {
//             return true;
//         } else {
//             return false;
//         }
//     }
//     //Close statement

//     //End function
// }
