<?php

$GLOBALS["ws_funciones_def"] = array(
    "FUN_ID_DEF" => array(
        "HEARBEAT", //0
        "LOGIN", //1
        "UPDUSUARIOSCORREO",//2
    ),
    "FUN_NAME_DEF" => array(
        "Latido del Servidor",
        "Login",
        "Actualiza el correo del usuario",
    ),
    "FUN_EXAMPLE_DEF" => array(
        "{}",
        '{"correo":"rpineda@x-codec.net", "password": "123456"}',
        '{
            "id_usuarios" : 1,
            "correo" : "dlopez@x-codec.net"
        }'
    )
);
define('ERROR_PARAMETROS_INSUFICIENTES', 'Parámetros Insuficientes');
define('ERROR_ARGUMENTOS_INSUFICIENTES', 'Argumentos Insuficientes');
define('ERROR_EN_EL_PROCEDIMIENTO', '-1;Error en el Procedimiento');
define('ERROR_NO_EXISTE_FUNCION', 'No existe la funcion solicitada');
define('ERROR_NO_EXISTE_USUARIO', 'No existe usuario o el password es incorrecto');
?>