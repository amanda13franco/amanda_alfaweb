<?php 

    //Crear captchat
    $imagen = imagecreate(80,40);
    $fondo = imagecolorallocate($imagen, 0,210,0);
    $aleatorio = rand(100000,999999);

    $texto = imagecolorallocate($imagen, 255,255,255);
    ImageFill($imagen, 50, 0 ,$fondo);
    imagestring($imagen, 100,10,10, $aleatorio, $texto);
    header('Content-type: image/png');
    imagepng($imagen);

?>