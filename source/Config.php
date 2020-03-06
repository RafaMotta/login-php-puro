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
    "host" => "",
    "port" => "",
    "user" => "",
    "passwd" => "",
    "from_name" => "Rafael Motta",
    "from_email" => ""
]);

//SOCIAL LOGIN: FACEBOOK
define("FACEBOOK_LOGIN",[
    "clientId" => "",
    "clientSecret" => "",
    "redirectUri" => SITE["root"] . "/facebook",
    "graphApiVersion" => "v4.0",
]);

//SOCIAL LOGIN: GOOGLE
define("GOOGLE_LOGIN",[
    "clientId" => "",
    "clientSecret" => "",
    "redirectUri" =>  SITE["root"] . "/google"
]);

?>