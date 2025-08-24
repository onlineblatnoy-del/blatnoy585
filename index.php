<?php
// Agar URL da /hook.php bo‘lsa, hook.php ni ishga tushiramiz
$request_uri = $_SERVER['REQUEST_URI'];

if (strpos($request_uri, "hook.php") !== false) {
    require __DIR__ . "/hook.php";
    exit;
}

// Odatiy chiqish
echo "✅ Openbudget vote bot is running!";
