<?php
$db = mysqli_connect("localhost", "root", "", "2006144_salman");
if (!$db) {
    echo "<script>
                alert('database tidak terhubung')    
    </script>";
};

$nama_peserta = $_POST['nama'];
$tangal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$asal_sekolah = $_POST['asal_sekolah'];


$query = "INSERT INTO pendaftaran VALUES (NUll,'$nama_peserta','$tanggal_lahir','$jenis_kelamain','$alamat','$email', '$asal_sekolah')";
mysqli_query($db, $query);
echo "<script>alert('Peserta berhasil ditambahkan')</script>";
echo "<script> window.location='./index.php'</script>";
?>
