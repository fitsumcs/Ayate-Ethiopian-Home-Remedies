<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 6/21/2016
 * Time: 1:07 PM
 */
session_start();
session_unset();
session_destroy();
header("Location: ../view/index.php");
?>