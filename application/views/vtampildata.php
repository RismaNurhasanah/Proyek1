
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body><center><h1>BIODATA</h1></center>
    <hr>
    <center><a href="<?= base_url('Profile/tambah_data')?>" p class="text-center"> ~ Tambah Data ~ </a></center>
        <center><table border="1" ></center>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Depan</th>
                <th>Nama Belakang</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Jenjang Pendidikan</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($profile as $p) { ?>
            <tr>
                <td><?=$no?></td>
                <td><?=$p->namad?></td>
                <td><?=$p->namab?></td>
                <td><?=$p->tempatlahir?></td>
                <td><?=$p->tanggall?></td>
                <td><?=$p->jeniskelamin?></td>
                <td><?=$p->alamat?></td>
                <td><?=$p->jenjang?></td>
                <td><a href="<?= base_url('profile/update_data/'.$p->id)?>">Edit</a></td>
                <td><a href="<?= base_url('profile/hapus_data/'.$p->id)?>">Hapus</a></td>
            </tr>
            <?php $no++; }?>
        </tbody>

    </table>