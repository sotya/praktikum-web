<!DOCTYPE html>
<html>
<head> 
        <title>  Tambah Data </title> 
</head>

<body> 

<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<table>
        <tr> 
                <td> NIM </td>
                <td><input type="text" name="nim" /> </td>
        </tr>
        <tr> 
                <td> Nama </td>
                <td><input type="text" name="nama" size=40 /> </td>
        </tr>
        
        <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat" size=60 /></td>
        </tr>
        
        <tr> 
                <td></td>
                <td><input type="submit" value="Simpan" /> </td>
        </tr>
        </table>

</form>

<?php
require_once './koneksi.php';
error_reporting(0);
if (isset($_POST['nim']) && isset($_POST['nama'])) {
        $nim    = $_POST['nim'];
        $nama   = $_POST['nama'];
        $alamat = $_POST['alamat'];
        
        $sql = "INSERT INTO mahasiswa 
                VALUES ('" .$nim. "', '" .$nama. "', '" .$alamat. "')";

        $res = mysql_query($sql);
        if($res) {
                echo 'Data berhasil Ditambahkan';
                mysql_close($res);
        } else {
                echo 'Gagal Menambah Data <br />';
                echo mysql_error();
        }
}

echo '<hr />';

require_once './seleksi.php';

?>

</body>


</html>