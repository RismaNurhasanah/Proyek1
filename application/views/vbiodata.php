<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body><h1>BIODATA</h1>
    <hr>
    <a href="<?= base_url('Profile/tambah_data')?>"> ~ Tambah Data ~ </a>
    <table >
        <tr>
            <td>Nama Depan</td>
            <td>:</td>
            <td><?= $nmd?></td>
        </tr>
        <tr>
            <td>Nama Belakang</td>
            <td>:</td>
            <td><?= $nmb?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><?= $tmpl?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><?= $tgll?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?= $jk?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?= $almt?></td>
        </tr>
        <tr>
            <td>Jenjang Pendidikan</td>
            <td>:</td>
            <td><?= $jjg?></td>
        </tr>
    </table>
</body>
</html>