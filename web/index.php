<?php

declare(strict_types=1);

session_start();

if (empty($_SESSION['name'])) {
    include("index.html");
} else {
    $content = '<a href="exit.php">Вернуться</a>';
    echo 'Прветствую, ' . $_SESSION['name'] . '</br>';
    echo $content;
}