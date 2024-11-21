<?php
    ob_start();
    session_start();
    session_destroy();
    header("Location:/CampusEventManagementSystem/index.php");
    exit; // Important to stop further execution
    ob_end_flush();
?>
