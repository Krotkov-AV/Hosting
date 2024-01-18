<?php
session_start();

if(isset($_GET['exit']))
{
    session_destroy();
    header('Location: index.php');

}

if (isset($_SESSION['name'])) {
    sprintf('Hello %s', $_SESSION['name']);
    echo 'Привет ' . htmlspecialchars($_SESSION["name"]) . '!</br></br>';
    echo '<a href="?exit">Exit</a>';

}   else {
    include 'form.html';
}


