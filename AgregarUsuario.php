<?php

function agregarUsuario(array $usuario, $nombre, $edad, $email){

    $usuario = [
        "nombre" => $nombre,
        "edad" => $edad,
        "email" => $email
    ];
    return $usuario;
}


?>