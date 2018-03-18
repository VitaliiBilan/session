<?php
session_start();


if (!empty($_SESSION['username'])) {
    echo "Пивет, " . $_SESSION['username'] . "!";
}