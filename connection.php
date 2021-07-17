<?php
$user = 'root';
$pass = '';
$db = 'appnotes';

    $link = mysqli_connect('localhost', $user, $pass, $db) or die("ERROR: unable to connect");
        echo "<script>Window.alert(Hi!)</script>";
?>