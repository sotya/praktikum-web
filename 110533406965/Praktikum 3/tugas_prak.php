<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Metode POST</title>
</head>
<body>
<div id="header">
LOGIN
</div>
<div id="background">
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post"><br /><br /><br /><br />
Username 
<input type="text" id="tb1" name="nama" onKeyUp="return Huruf(event)"/> <br /><br />
<script>document.getElementById("tb1").focus()</script>
Password
<input type="password" id="tb2" name="password" onKeyUp="return Huruf(event)"/> <br />
<input type="submit" id="ok" value="OK" />
</form>
</div>

<?php
$username='sotya';
$pass='root';
if($_POST['nama']==$username && $_POST['password']==$pass) {
	echo 'Selamat Datang, '.$_POST['nama'];
}
elseif($_POST['nama']==NULL && $_POST['password']==NULL) {
}
elseif(($_POST['nama']!==$username && $_POST['password']!==$pass)||($_POST['nama']==$username && $_POST['password']!==$pass)){
	echo 'Maaf, Anda gagal login, Silakan coba kembali';
}
else{
	echo ' ';
} 
?>

<script type="text/javascript">

function Huruf(evt) {
    evt = (evt) ? evt : window.event
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if ((charCode > 31 && charCode < 65) || (charCode > 90 && charCode < 97) || charCode > 122) {
        alert('Username dan Password Harus Berupa Huruf');
        return false
    }
    return true
}

</script>

<style type="text/css">

#tb1 {
position:center;
width:100px;
height:25px;
}

#tb2 {
position:center;
width:100px;
height:25px;
}

#header{
position:fixed;
top:50px;
left:450px;
width:358px;
height:79px;
background-color:#FFCCCC;
}

#background{
position:fixed;
top:150px;
left:450px;
background-color:#CCFFCC;
width:358px;
height:250px;
}
</style>


</body>
</html>