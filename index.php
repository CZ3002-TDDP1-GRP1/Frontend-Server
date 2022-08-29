<?php
    session_start();

    if (!isset($_SESSION['FirstName'])) {
        header('Location: landing');
    }
?>