<?php
    include("../HTML/connection.php");
    session_destroy();
    header('location: admin-log.php');
?>