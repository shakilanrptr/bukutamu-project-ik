<?php
session_start();

if (!isset($_SESSION['session_username'])) {
    header("Location: index.php");
}

echo "Halo, " . $_SESSION['session_username']

?>