<?php

session_start();
$_SESSION['id'] = 'admin';
$_SESSION['admin_id']=$user_id; 
header("Location:../../user.php?id=".$user_id);

?>