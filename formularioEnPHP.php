<?php

$cadenatexto = $_POST["cadenatexto"];
echo "Escribió en el campo de texto: " .$cadenatexto . "<br><br>";

// DATOS DEL ARCHIVO

$nombre_archivo = $_FILES['userfile']['name'];
$tipo_archivo = $_FILES['userfile']['type'];
$tamano_archivo = $_FILES['userfile']['size'];

//compruebo si las características del archivo son las que deseo

if (!((strpos($tipo_archivo, "gif") || strpos($tipo_archivo, "jpeg")) && ($tamano_archivo < 100000))) {
    echo "la extensión o el tamaño de los archivos no es correcta <br><br><table><tr><td><li> 
    se permiten archivos .gif o .jpg <br><li> se permiten archivos de 100kb máximo. </td></tr></table>";

} else {
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $nombre_archivo)) {
        echo "el archivo ha sido cargado correctamente";
    } else {
        echo "ocurrió algún error al subir el fichero, no pudo guardarse";
    }
}

?>