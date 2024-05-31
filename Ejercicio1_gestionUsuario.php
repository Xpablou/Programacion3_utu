<?php

function agregarUsuario(array $usuario, $nombre, $edad, $email){

    $usuario = [
        "nombre" => $nombre,
        "edad" => $edad,
        "email" => $email
    ];
    return $usuario;
}


foreach ($usuario as $usuario){
    if ($usuario["email"] == "email"){
        return "El nombre es " . $usuario;
    }
} return "No se encontro el usuario" . $usuario


$usuario=[];
$usuario=agregarUsuario($usuario, "Pablo", "41", "Xpablou8@gmail.com");

var_dump($usuario);


?>