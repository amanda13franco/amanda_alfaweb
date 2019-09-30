<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Producto</title>
    <link rel="stylesheet" type="text/css" href="assets/b4/css/bootstrap.min.css">
    <link href="css/header.css" rel="stylesheet" type="text/css" />
    <link href="css/producto.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/responsive_main.css">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
</head>


<?php

//Definición de los artículos
$articulos = array(
    [
        "id" => 1,
        "nombre" => "Silla azul",
        "descripcion" => "Aquí va la descripción del producto.",
        "precio" => 40.25,
        "imagen" => "imagenes/silla1.jpg"
    ],
    [
        "id" => 2,
        "nombre" => "Silla morada",
        "descripcion" => "Aquí va la descripción del producto.",
        "precio" => 49.25,
        "imagen" => "imagenes/silla2.jpg"
    ], [
        "id" => 3,
        "nombre" => "Silla roja",
        "descripcion" => "Aquí va la descripción del producto.",
        "precio" => 80.25,
        "imagen" => "imagenes/silla3.jpg"
    ], [
        "id" => 4,
        "nombre" => "Silla café",
        "descripcion" => "Aquí va la descripción del producto.",
        "precio" => 15.99,
        "imagen" => "imagenes/silla4.jpg"
    ], [
        "id" => 5,
        "nombre" => "Silla café claro",
        "descripcion" => "Aquí va la descripción del producto.",
        "precio" => 90.25,
        "imagen" => "imagenes/silla5.jpg"
    ],
    [
        "id" => 6,
        "nombre" => "Sillón blanco",
        "descripcion" => "Aquí va la descripción del producto.",
        "precio" => 200.40,
        "imagen" => "imagenes/silla6.jpg"
    ]
);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

// $data = file_get_contents("assets/data/articles.json");
// $products = json_decode($data, true);

// $valid_captcha = true;

// if(isset($_GET['id'])){
//     $id = $_GET ['id'];
// }

// foreach ($products['articulos'] as $product) { 
//     if($product['id'] == $id){
//         $articulo_seleccionado = $product;
//     }
// }

// $productos_relacionados = array();

// foreach ($products['articulos'] as $product) { 
//     if($product['id'] != $id){
//     array_push($productos_relacionados, $product);
//     }
// }



if (isset($_POST['submit'])) {
    $to = "amanda.vianey.franco.uribe.306@gmail.com"; // this is your Email address

    $name = $_POST['name_user'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $cantidad  = $_POST['cantidad'];
    $capchat = $_POST['capchat'];

    $subject = "Form submission";
    $headers = "From:" . $email;

    //data
    $msg = "Your MSG <br>\n";
    //Headers
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: <" . $email . ">";
    // if(mail($to,$subject,$msg,$headers)) {
    //     echo "Mail Sent.";
    // }else {
    //     echo "No sent";
    // }

    $codigo_capchat = $_POST['codigo_capchat'];
    $valid_captcha = ($capchat == $codigo_capchat);
}

$codigo_captcha = rand(100000, 999999);

// echo '---';
// print_r($articulo_seleccionado);
// print_r($articulo_seleccionado['nombre']);
// echo '';

// foreach ($products as $product) {
//     echo '<pre>';
//     print_r($products['nombre']);
//     print_r($products['saludo']);
//     echo '</pre>';
//}


?>

<body>
    <div class="cuerpo">
        <header>
            <div class="title_container">
                <h1>furniture</h1><label class="titulo">store</label>
            </div>

            <button>Envios</button>
            <button>Búsqueda avanzada</button>
            <button>Crear una cuenta</button>
            <button>Iniciar la sesión</button>
            <label class="carrito"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Carrito 0 Productos</label>
            <label class="subtitulo">The biggest choice on this web</label>
            <br>
            <div style="width=100%;">
                <div class="verdes">
                    <button class="botonesverdes1 btn_header" onclick="location.href='index.php'">Inicio</button>
                    <button onclick="location.href='quienessomos.html'" class="botonesverdes btn_header">Empresa-Somos</button>
                    <form action="producto.php" method="post">
                        <button class="botonesverdes btn_header" onclick="location.href='producto.php'" name="valor" value="0">Productos</button>
                    </form>
                    <button onclick="location.href='contacto.php'" class="botonesverdes btn_header">Contacto</button>
                    <button class="botonesverdes2 btn_header">&emsp;</button>
                </div>

                <div class="container_seach">
                    <input type="text" placeholder="Búsqueda del sitio">
                    <button class="btn btn-success"><i class="fa fa-search" aria-hidden="true"></i> </button>
                    <!-- <span class="input-group-text" id="inputGroup-sizing-sm">Small</span> -->
                </div>
            </div>
        </header>

        <div class="contenedor">
            <?php
                //Obtener el valor enviado
                $aleatorio = $_POST['valor'];
                if ($aleatorio == "0") {
                    $aleatorio = rand(1, 6);
                }
   
                $productos_relacionados = array();

                foreach ($articulos as $producto) { 
                    if($producto['id'] == $aleatorio){          
                        $articulo_seleccionado = $producto;
                    }else {
                        array_push($productos_relacionados, $producto);
                    }
                }
            ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="image_product">
                        <img class="imagen_product_img" src="<?php echo ($articulo_seleccionado['imagen']); ?>" class="ima">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="descripcion product_description">
                        <h5 class="producto_titulo titulo_producto_selecionado"><?php echo ($articulo_seleccionado['nombre']); ?></h5>
                        <p class="text_des_product"><?php echo ($articulo_seleccionado['descripcion']); ?></p>
                        <br>
                        <strong class="price_article">$ <?php echo ($articulo_seleccionado['precio']); ?></strong>
                      
                        <!-- <button class="btn btn_producto_agregar btn-block">
                        <i class="fa fa-shopping-cart" arial-hidden="true"></i>Comprar</button> -->
                    </div>
                </div>
            </div> <!-- selected info article -->


            <div class="row">
                <div class="col-md-12">
                    <?php if (isset($_POST['email'])) {
                    if (!$valid_captcha) {  ?>
                        <form class="form_buy_article" action="" method="post">
                            <div class="text-center">
                                <h3>Catpcha incorrecto, porfavor intente de nuevo.</h3>
                                <h3>Ingrese los siguientes datos para la compra</h3>
                            </div>
                            <div class="form-group row mt-md-5">
                                <label for="nameUser" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nameUser" value="<?php echo ($name); ?>" placeholder="Nombre del cliente" minlength="3" name="name_user" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-sm-2 col-form-label">Teléfono</label>
                                <div class="col-sm-10">
                                    <input type="tel" class="form-control" id="phone" value="<?php echo ($phone); ?>" placeholder="55-145151515-15" minlength="9" name="phone" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Correo</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" value="<?php echo ($email); ?>" placeholder="correo@gmail.com" minlength="9" name="email" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="comentario" class="col-sm-2 col-form-label">Cantidad</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="cantidad" min="1" value="<?php echo ($cantidad); ?>" name="cantidad" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <input type="hidden" class="form-control" id="cantidad" min="1" value="<?php echo ($aleatorio); ?>" name="valor" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="capcha" class="col-sm-2 col-form-label">Ingrese el código</label>
                                <div class="col-sm-4">
                                    <img src="captcha_generado.php?codigo_capcha=<?php echo ($codigo_captcha); ?>">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="capcha" minlength="6" name="capchat" required>
                                </div>
                            </div>
                            <input type="hidden" value="<?php echo ($codigo_captcha); ?>" name="codigo_capchat">
                            <button type="submit" name="submit" class="btn btn_producto_agregar btn-block">Enviar</button>
                        </form>

                    <?php } else {

                            //data
                            $msg = "El usuario $email quiere comprar el siguiente producto:<br>\n <h2>Datos del producto</h2>Nombre: {$articulo_seleccionado['nombre']}<br>Cantidad: $cantidad<br>Precio: {$articulo_seleccionado['precio']}";
                            $msg_user = "<center><h2>Compra del producto {$articulo_seleccionado['nombre']} realizada<h2></center><br> <p> Gracias por tu preferencia.</p>";

                            $mail = new PHPMailer(true);

                            try {
                                //Server settings
                                $mail->SMTPDebug = 0;                      // Enable verbose debug output
                                $mail->isSMTP();                                            // Send using SMTP
                                $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
                                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                                $mail->Username   = 'forniturestoreamanda@gmail.com';                     // SMTP username
                                $mail->Password   = 'Escuela1234';                               // SMTP password
                                $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
                                $mail->Port       = 587;                                    // TCP port to connect to


                                //Recipients
                                $mail->setFrom('forniturestoreamanda@gmail.com', 'FornitureStore');
                                $mail->addAddress('amanda.vianey.franco.uribe.306@gmail.com');     // Add a recipient
                                // Attachments
                                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                                // Content

                                $mail->isHTML(true);                                  // Set email format to HTML
                                $mail->Subject = "Producto {$articulo_seleccionado['nombre']}";
                                $mail->Body    = $msg;
                                // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                                $mail->send();


                                $mail->addAddress($email);     // Add a recipient
                                // Attachments
                                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                                // Content

                                $mail->isHTML(true);                                  // Set email format to HTML
                                $mail->Subject = "Producto {$articulo_seleccionado['nombre']} FornitureStore";
                                $mail->Body    = $msg_user;
                                // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                                $mail->send();

                                // echo 'Message has been sent';
                            } catch (Exception $e) {
                                // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                            }



                            // if(mail($to,$subject,$msg,$headers)) {
                            //     echo "Mail Sent.";
                            // }else {
                            //     echo "No sent";
                            // }

                            // if(mail($email,$subject,$msg_user,$headers)) {
                            //     echo "Mail Sent.";
                            // }else {
                            //     echo "No sent";
                            // }

                            ?>
                        <div class="col text-center">
                            <br><br>
                            <h3>Gracias por tu compra</h3>
                            <br>
                            <p>Tu pedido está en proceso</p>
                            <br>
                            <a href="./index.php">

                                <button class="btn btn_producto_agregar btn-block">
                                    Seguir comprando
                                </button>

                            </a>
                            <br><br>
                        </div>
                    <?php  }  //Datos validos.
                    } //llegó un correo del formulario..
                    else { ?>
                    <div class="">
                        <form class="form_buy_article" action="" method="post">
                            <div class="text-center">
                                <h3>Ingrese los siguientes datos para la compra</h3>
                            </div>
                            <div class="form-group row mt-md-5">
                                <label for="nameUser" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nameUser" placeholder="Nombre del cliente" minlength="3" name="name_user" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-sm-2 col-form-label">Teléfono</label>
                                <div class="col-sm-10">
                                    <input type="tel" class="form-control" id="phone" placeholder="55-145151515-15" minlength="9" name="phone" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Correo</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" placeholder="correo@gmail.com" minlength="9" name="email" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="comentario" class="col-sm-2 col-form-label">Cantidad</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="cantidad" min="1" value="1" name="cantidad" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <input type="hidden" class="form-control" id="cantidad" min="1" value="<?php echo ($aleatorio); ?>" name="valor" required>
                                </div>
                            </div>

                            
                            <div class="form-group row">
                                <label for="capcha" class="col-sm-2 col-form-label">Ingrese el código</label>
                                <div class="col-sm-4">
                                    <img src="captcha_generado.php?codigo_capcha=<?php echo ($codigo_captcha); ?>">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="capcha" minlength="6" name="capchat" required>
                                </div>
                            </div>
                            <input type="hidden" value="<?php echo ($codigo_captcha); ?>" name="codigo_capchat">
                            <button type="submit" name="submit" class="btn btn_producto_agregar btn-block">Enviar</button>
                        </form>
                    </div>
                <?php } //No llego datos del formulario pintar uno nuevo ?>

                </div>
            </div>
            <!-- end form buy -->
            
            <div class="row mt-4">
                <h2>Más fotos</h2>
            </div>

            <div class="row mt-4">
                <div class="col-md-4">
                    <img src="subimagenes/silla<?php echo $aleatorio; ?>.1.jpg" class="subimagen">
                </div>
                <div class="col-md-4">
                    <img src="subimagenes/silla<?php echo $aleatorio; ?>.2.jpg" class="subimagen">
                </div>
                <div class="col-md-4">
                    <img src="subimagenes/silla<?php echo $aleatorio; ?>.3.jpg" class="subimagen">
                </div>
            </div>
            <!-- more pictures -->
            
            <div class="row">
                <div class="col-md-12">
                    <form action="producto.php" method="post">
                        <label class="title_product proMeses">Productos relacionados</label>
                        <div class="sillas form_products">
                            <?php foreach($productos_relacionados as $articulo) { ?> 
                                <div class="producto_principal" >
                                    <img src="<?php echo($articulo['imagen']); ?>"/>
                                    <h5 class="producto_titulo"><strong><?php echo($articulo['nombre']); ?></strong> </h5> 
                                    <p  class="text-justify"><?php echo($articulo['descripcion']); ?></p>
                                    <strong>$ <?php echo($articulo['precio']); ?></strong>
                                    <button class="btn btn_producto_agregar btn-block" name="valor" value="<?php echo($articulo['id']); ?>">
                                        <i class="fa fa-shopping-cart" arial-hidden="true"></i>    
                                        Añadir a cesta</button>
                                </div>
                            <?php }//End for each article ?>
                        </div>
                    </form>
                </div>
            </div> 
            <!-- more articles -->
            <div class="row mt-5"></div>
        </div>

    </div>

    <footer class="footer_content">
        <div class="row" style="width: 100%; margin: 0;">
            <div class="col-md-3 mx-auto mt-3 secction_footer">
                <label class="letrasfo1">Casa</label><br />
                <label class="letrasfo1">Destacados</label><br />
                <label class="letrasfo1">Que hay de nuevo?</label><br />
                <label class="letrasfo1">Comentarios</label>
            </div>
            <div class="col-md-3 mx-auto mt-3 secction_footer">
                <label class="letrasfo2">Top ventas</label><br />
                <label class="letrasfo2">Especiales</label><br />
                <label class="letrasfo2">Fabricantes</label><br />
                <label class="letrasfo2">Proveedores</label>
            </div>
            <div class="col-md-3 mx-auto mt-3 secction_footer">
                <label class="letrasfo2">Iniciar la sesión</label><br />
                <label class="letrasfo2">Crear una cuenta</label><br />
                <label class="letrasfo2">Envíos y devoluciones</label>
            </div>
            <div class="col-md-2 mx-auto mt-3 secction_footer">
                <label class="letrasfo2">Furniture store &copy;2013 Confidencialidad Condiciones de uso</label>
            </div>
        </div>    
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="assets/jquery/jquery.slim.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/b4/js/bootstrap.min.js"></script>
</body>

</html>