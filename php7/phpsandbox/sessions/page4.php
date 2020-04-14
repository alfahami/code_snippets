<?php 
    session_start();
    unset($_SESSION['name']);


    // Completely destroy the session
    session_destroy();