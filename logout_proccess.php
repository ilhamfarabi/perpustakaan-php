<?php
//2210631170074 - Ilham Arif Farabi
    session_start();
    session_destroy();
    session_unset();
    header("Location: login.php");