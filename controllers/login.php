<?php
    // (A) START SESSION 
    session_start();
    
    // (B) PROCESS LOGIN
    if (isset($_POST["user"]) && !isset($_SESSION["user"])) {
        // (B1) USERS & PASSWORDS - SET YOUR OWN !
        $users = [
            "secor.ristik21" => "cake's@fact",
            "admin" => "admin123",
            "fath8002h" => "fath800223ra"
        ];
    
        // (B2) CHECK & VERIFY
        if (isset($users[$_POST["user"]]) && $users[$_POST["user"]] == $_POST["password"]) {
            $_SESSION["user"] = $_POST["user"];
        }
    
        // (B3) FAILED LOGIN FLAG
        if (!isset($_SESSION["user"])) { $failed = true; }
    }
    
    // (C) REDIRECT TO HOME PAGE IF SIGNED IN - SET YOUR OWN !
    if (isset($_SESSION["user"])) {
        header("Location: admin/index.php");
        exit();
    }