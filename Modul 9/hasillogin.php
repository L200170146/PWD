<?php
    session_start();
    echo "Anda Berhasil Login Sebagai ".$_SESSION['username']." Dan Anda Terdaftar Sebagai ".$_SESSION['status'];
?>
<br>
Silahkan Logout dengan klik lik <a href="logout.php">Disini</a>