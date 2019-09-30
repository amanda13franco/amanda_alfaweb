<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Contacto</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="assets/b4/css/bootstrap.min.css">
    <link href="css/header.css" rel="stylesheet" type="text/css" />
    <link href="css/contacto.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">  
</head>

<body>
    <div class="cuerpo">
    <header>
            <h1>furniture</h1><label class="titulo">store</label>

            <button>Envios</button>
            <button>Búsqueda avanzada</button>
            <button>Crear una cuenta</button>
            <button>Iniciar la sesión</button>
            <label class="carrito"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Carrito 0 Productos</label>
            <label class="subtitulo">The biggest choice on this web</label><br />
            <div class="verdes">
                <button class="botonesverdes1" onclick="location.href='index.php'">Inicio</button>
                <button onclick="location.href='quienessomos.html'" class="botonesverdes">Empresa-Somos</button>
                <form action="producto.php" method="post">
                <button class="botonesverdes" onclick="location.href='producto.php'" name="valor" value="0">Productos</button>
                </form>
                <button onclick="location.href='contacto.php'" class="botonesverdes">Contacto</button>
                <button class="botonesverdes2">&emsp;</button>
            </div>
            
           
                <input type="text" placeholder="Búsqueda del sitio">
            <button class="btn btn-success"><i class="fa fa-search" aria-hidden="true"></i> </button>
            <!-- <span class="input-group-text" id="inputGroup-sizing-sm">Small</span> -->
           
        </header>

        <?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
$valid_captcha = true;
    if (isset($_POST['submit'])) {
        $to = "amanda.vianey.franco.uribe.306@gmail.com"; // this is your Email address
        $name = $_POST['name_user'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $commentary  = $_POST['commentary'];
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
        if ($valid_captcha) {
            $subject = "El usuario $email ha enviado un comentario";
            //data
            $msg = "$email ha comentado: <br>\n $commentary<br><h4>Datos de contacto</h4>Nombre: $name<br>Teléfono: $phone<br>Correo: $email";
            $msg_user = "<center><h1>Gracias por ponerte en contacto<h1></center><br> FornitureStore está para servirte";
            
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
                    $mail->setFrom('forniturestore@gmail.com', 'FornitureStore');
                    $mail->addAddress($email);     // Add a recipient
                    // Attachments
                    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                    // Content
            
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = 'Gracias por tu comentario';
                    $mail->Body    = $msg_user;
                    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                    $mail->send();
                    $mail->addAddress('amanda.vianey.franco.uribe.306@gmail.com');     // Add a recipient
                    // Attachments
                    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                    // Content
            
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = 'FornitureStore comentarios de usuario';
                    $mail->Body    = $msg;
                    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                    
                    $mail->send();
                    // echo 'Message has been sent';
                } catch (Exception $e) {
                    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
        }
    }
    $codigo_captcha = rand(100000, 999999);
?>
 
    <!-- Inicio de contenido -->
    <?php if (!$valid_captcha) { ?>
        <h1>Capcha invalido...</h1>
        <form class="mt-5 main_login text-center" action="" method="post">
            <div class="form-group row">
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
                <label for="comentario" class="col-sm-2 col-form-label">Comentario</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" id="comentario" required minlength="15" name="commentary"><?php echo ($commentary); ?></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="capcha" class="col-sm-2 col-form-label">Ingrese el código</label>
                <div class="col-sm-4">
                    <img src="captcha generado.php?codigo_capcha=<?php echo ($codigo_captcha); ?>">
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="capcha" minlength="4" name="capchat" required>
                </div>
            </div>
            <input type="hidden" value="<?php echo ($codigo_captcha); ?>" name="codigo_capchat">
            <button type="submit" name="submit" class="btn btn-car-primary-register btn-block">Enviar</button>
        </form>

    <?php } else {  ?>
        <form class="mt-5 main_login text-center" action="" method="post">
            <div class="form-group row">
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
                <label for="comentario" class="col-sm-2 col-form-label">Comentario</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" id="comentario" required minlength="15" name="commentary"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="capcha" class="col-sm-2 col-form-label">Ingrese el código</label>
                <div class="col-sm-4">
                    <img src="captcha generado.php?codigo_capcha=<?php echo ($codigo_captcha); ?>">
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="capcha" minlength="4" name="capchat" required>
                    <input type="hidden" value="<?php echo ($codigo_captcha); ?>" name="codigo_capchat">
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-car-primary-register btn-block">Enviar</button>
        </form>
    <?php } ?>
</div>
    
    <!-- Fin de conenido -->
   
    <!--Fin div principal-->
    </div><br>
<div class="footer_p">
        <footer>
            <div class="fo1 iniciar_footer">
                <label class="letrasfo1">Casa</label><br />
                <label class="letrasfo1">Destacados</label><br />
                <label class="letrasfo1">Que hay de nuevo?</label><br />
                <label class="letrasfo1">Comentarios</label>
            </div>
            <div class="fo1">
                <label class="letrasfo2">Top ventas</label><br />
                <label class="letrasfo2">Especiales</label><br />
                <label class="letrasfo2">Fabricantes</label><br />
                <label class="letrasfo2">Proveedores</label>
            </div>
            <div class="fo1">
                <label class="letrasfo2">Iniciar la sesión</label><br />
                <label class="letrasfo2">Crear una cuenta</label><br />
                <label class="letrasfo2">Envíos y devoluciones</label>
            </div>
            <div class="fo1">
                <label class="letrasfo2">Furniture store &copy;2013 Confidencialidad Condiciones de uso</label>
            </div>
        </footer>
    </div>
    
    <script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="assets/jquery/jquery.slim.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/b4/js/bootstrap.min.js"></script>
</body>

</html>