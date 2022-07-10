<?php

    function starting($title,$link_css,$custom_css,$link_icon){
        return "
        <!DOCTYPE html>
        <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <meta name='viewport content='width=device-width, initial-scale=1.0'>
                <title>$title</title>
                <link rel='stylesheet' href='$link_css'>
                <link rel='stylesheet' href='$custom_css'>
                <link rel='shortcut icon' href='$link_icon' type='image/x-icon'>
            </head>
            <body>'
        ";
    }

    function ending($link_javascript){
        return "
            </body>
        </html>
        ";
    }

?>