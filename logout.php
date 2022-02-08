<?php
session_start();
session_unset();
session_destroy();

include 'db.php';

header("location:$base_url");
?>