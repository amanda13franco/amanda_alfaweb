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

if(isset($_POST['submit'])){
    $to = "amanda.vianey.franco.uribe.306@gmail.com"; // this is your Email address
   
    $name = $_POST ['name_user'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $commentary  = $_POST['commentary'];
    $capchat = $_POST['capchat'];

    echo "name .$name. phone .$phone. email .$email. commentary .$commentary.capchat .$capchat.";

    $subject = "Form submission";
    //$subject2 = "Copy of your form submission";
    //$message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    // $message  = "El usuario: .$name. ";
    //$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];
    $headers = "From:" . $email;
    //$headers2 = "From:" . $to;
    
    //data
    $msg = "Your MSG <br>\n";       

    //Headers
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: <".$email. ">" ;

    // mail($to,$subject,$msg,$headers);
    echo "Mail Sent.";
    //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    //echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    //You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
 
    <!-- Inicio de contenido -->
    <div class="container text-center mt-4">
        <h3>Contacto</h3>
        <br>
        <form action="" method="post">
            <div class="form-group row">
                <label for="nameUser" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nameUser"  
                        placeholder="Nombre del cliente" minlength="3" name="name_user" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="phone" class="col-sm-2 col-form-label">Teléfono</label>
                <div class="col-sm-10">
                    <input type="tel" class="form-control" id="phone" 
                     placeholder="5576590621" minlength="9" name="phone" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Correo</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" 
                     placeholder="correo@dominio.com" minlength="9" name="email" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="comentario" class="col-sm-2 col-form-label">Comentario</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" id="comentario" 
                     required  minlength="15" name="commentary"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="capcha" class="col-sm-2 col-form-label">Ingrese el código</label>
                <div class="col-sm-4">
                    <img src="captcha.php">
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="capcha" 
                     minlength="4" name="capchat" required>
                </div>
            </div>
            <button type="submit"  name="submit" class="boton">Enviar</button>
        </form>
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