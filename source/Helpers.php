<?php

    function site(string $param = null)
    {
        if($param && !empty(SITE[$param])){
            return SITE[$param];
        }

        return SITE['root'];
    }

    function asset(string $path): string
    {
        return SITE['root']. "/views/assets/{$path}";
    }

    function flash(string $type = null, string $message = null): ?string
    {
        if($type && $message){
            $_SESSION['flash'] = [
                "type" => $type,
                "message" => $message,
            ];
            
            return null;
        }
    }

?>