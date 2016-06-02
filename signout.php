<?php
/**
 * Created by PhpStorm.
 * User: tmainali
 * Date: 6/2/16
 * Time: 3:12 PM
 */
session_start();
session_unset();
session_destroy();
ob_start();
header("location: index.html");
ob_end_flush();
exit();
?>