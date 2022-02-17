<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>From Tambah Data Profile</h1>
    <form action="<?= base_url('profile/action_tambah_data') ?>" method="post"> 
        <table> 
            <tr> 
                <td>Nama Depan</td> 
                <td>:</td> 
                <td><input type="text" name="namad" class="form-control"></td> 
            </tr> 
            <tr> 
                <td>Nama Belakang</td> 
                <td>:</td> 
                <td><input type="text" name="namab" class="form-control"></td> 
            </tr> 
            <tr> 
                <td>Tempat Lahir</td> 
                <td>:</td> 
                <td><input type="text" name="tempatlahir" class="form-control"></td> 
            </tr> 
            <tr> 
                <td>Tanggal Lahir</td> 
                <td>:</td> 
                <td><input type="date" name="tanggall" class="form-control"></td> 
            </tr> 
            <tr> 
                <td>Jenis Kelamin</td> 
                <td>:</td> 
                <td> 
                    <input type="radio" name="jeniskelamin" value="L" >L
                    <input type="radio" name="jeniskelamin" value="P" >P 
                </td> 
            </tr> 
            <tr> 
                <td>Alamat</td> 
                <td>:</td> 
                <td><textarea type="text" name="alamat" class="form-control"></textarea></td> 
            </tr> 
            <tr> 
                <td>Jenjang Pendidikan</td> 
                <td>:</td> 
                <td> 
                    <select name="jenjang" id="" class="form-control"> 
                        <option value="SMK">SMK Sederajat</option> 
                        <option value="D3">D3</option> 
                        <option value="S1">S1</option> 
                        <option value="S2">S2</option> 
                    </select> 
                </td> 
            </tr> 
            <tr> 
                <td colspan="3"><hr></td> 
            </tr> 
            <tr> 
                <td colspan="3" class="text-center"> 
                    <button type="submit" class="btn btn-primary"> Simpan </button> 
                    <a href="" class="btn btn-warning">Kembali</a> 
                </td> 
            </tr> 
        </table>
    </form>
</body>
</html>