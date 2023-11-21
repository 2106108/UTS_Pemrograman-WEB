<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>penerimaan siswa baru</title>
    <link rel="stylesheet" href="design.css">
</head>
<body>
    <div class="wadah" >
        <h1>FORMULIR PENERIMAAN SISWA BARU</h1>

        <form action="proses_input.php" method="post">
            <label for="nama">Nama Lengkap</label>
            <input type="text" name="nama" id="nama">

            <label for="nomor">Nomor Telepon</label>
            <input type="number" name="nomor" id="nomor">

            <label for="asal_sekolah">Asal Sekolah</label>
            <input type="text" name="asal_sekolah" id="asal_sekolah">

            <label for="tahun">Tahun Lulus</label>
            <select name="tahun" id="tahun">
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
            </select>
            <label for="alamat">Alamat Lengkap</label>
            <textarea name="alamat" id="alamat" ></textarea>
            <button class="submit" > Kirim</button>
        </form>
    </div>
</body>
</html>