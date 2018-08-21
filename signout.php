<?php
session_start();
session_unset(); 
session_destroy() ;
header("Location: admin.php", true, 301);
exit();
?>