<!DOCTYPE html>
<html lang="en">

<head>
    <title>PENDAFTARAN LOMBA PRAMUKA</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Pendaftaran Lomba Pramuka</h1>
    <form action="process_input.php" method="post">
        <label for="nama">Nama Peserta:</label>
        <input type="text" name="nama" required><br>

        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" name="tanggal" required>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <select name="gender" required>
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>
        </select><br>

        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="asal_sekolah">Asal Sekolah:</label>
        <input type="text" name="asal_sekolah" required><br>

        <button type="submit">Simpan</button>
        <button type="button" class="cancel" onclick="resetForm()">Cancel</button>
    </form>
</body>

</html>
