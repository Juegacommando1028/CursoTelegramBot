<?php

    /* TODO:Token de acceso a tu BOT */
    $botToken ="8123156864:AAHg8MrtJm8L-2mIm191-GGjqssi8a_gxRo";

    /* TODO:URL del Webhook */
    $webhookurl="https://juegacommando.online/index.php";

    /* TODO:configura el webhook mediante una solicitud http */
    $apiurl = "https://api.telegram.org/bot$botToken/setWebhook?url=$webhookurl";
    $response = file_get_contents($apiurl);

    /* TODO:Verifica si la configuracion del webhook a sido exitosa */
    if($response === false){
        /* TODO:Captura el error si la solicitud HTTP falla */
        $error = error_get_last();
        echo "Error al configurar el webhook: ".$error['message'];
    }else{
        /* TODO:Verifica la respuesta de telegram */
    $responsedata = json_decode($response, true);
    if($responsedata['ok']===true){
        echo "Webhook configurado con exito";
    }else{
        echo "Error al configurar Webhook";
    }
    }
    ?>