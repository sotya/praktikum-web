<?php
/**
* Fungsi utama untuk menangani pengolahan data
* @param string root parameter menu
*/
function data_handler($root) {
if (isset($_GET['act']) && $_GET['act'] == 'add') {
data_editor($root);
return;
}
$sql = 'SELECT COUNT(*) AS total FROM ' . MHS;
$res = mysql_query($sql);
// Jika data di tabel ada
if (mysql_num_rows($res)) {
if (isset($_GET['act']) && $_GET['act'] != '') {
switch($_GET['act']) {
case 'edit':
if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
data_editor($root, $_GET['id']);
} else {
show_admin_data($root);
}
break;
case 'view':
if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
data_detail($root, $_GET['id'], 1);
} else {
show_admin_data($root);
}
break;
case 'del':
if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
data_editor($root, $_GET['id'], 1);
$id = $_GET['id'];
$sql = 'DELETE FROM MHS
        WHERE id=1';
$res = mysql_query($sql);
if ($res) { ?>
show_admin_data($root);
<?php
} else {
echo 'Gagal menghapus data';
}
} else {
show_admin_data($root);
}
break;
default:
show_admin_data($root);
}
} else {
show_admin_data($root);
}
@mysql_close($res);
} else {
echo 'Data Tidak Ditemukan';
}
}