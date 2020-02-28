<?php 
//SITE CONFIG
    define("SITE", [
        "name" => "Login PHP puro",
        "desc" => "",
        "domain" => "localauth.com",
        "locale" => "pt_BR",
        "root" => "https://localhost/login-php-puro"
    ]);

//SITE MINIFY 
if($_SERVER["SERVER_NAME"] == "localhost"){
    require __DIR__ . "/Minify.php";
}

//CONEXÃO BANCO DE DADOS
define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "auth",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);


//SOCIAL CONFIG
define("SOCIAL",[
    "facebook_page" => "",
    "facebook_author" => "",
    "facebook_appId" => "",
    "twitter_creator" => "",
    "twitter_site" => "",
]);

//MAIL CONNECT
define("MAIL",[
    "host" => "smtp.sendgrid.net",
    "port" => "587",
    "user" => "apikey",
    "passwd" => "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",
    "from_name" => "Rafael Motta",
    "from_email" => "rafaelmotta.ev@hotmail.com"
]);

//SOCIAL LOGIN: FACEBOOK
define("FACEBOOK_LOGIN",[]);

//SOCIAL LOGIN: GOOGLE
define("GOOGLE_LOGIN",[]);

?>