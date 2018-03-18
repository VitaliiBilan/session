<?php
session_start();


if (!empty($_SESSION['username'])) {
    echo "Привет, " . $_SESSION['username'] . "!";
}