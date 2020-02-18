<?php
ob_start();
session_start();

require __DIR__ . "/vendor/autoload.php";


echo "Hello Word";


ob_end_flush();