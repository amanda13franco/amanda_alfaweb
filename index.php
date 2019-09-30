<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Práctica 1</title>
    <link rel="stylesheet" type="text/css" href="assets/b4/css/bootstrap.min.css">
    <link href="css/header.css" rel="stylesheet" type="text/css" />
    <link href="css/estilos.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/responsive_main.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
</head>

<body>

    <?php 
        //Declaración de artículos.
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
            ],[
                "id" => 3,
                "nombre" => "Silla roja",
                "descripcion" => "Aquí va la descripción del producto.",
                "precio" => 80.25,
                "imagen" => "imagenes/silla3.jpg"
            ],[
                "id" => 4,
                "nombre" => "Silla café",
                "descripcion" => "Aquí va la descripción del producto.",
                "precio" => 15.99,
                "imagen" => "imagenes/silla4.jpg"
            ]
        );

        $articulos_oferta = array(
            [
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
    ?>

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
            <div class="baner_init"> 
                <img src="imagenes/banner.jpg" />
            </div><br>
            <div class="row container_categorys_articles">
                <div class="botonesgrises">
                    <input type="button" class="botongris" value="Bedroom" /><br />
                    <input type="button" class="botongris" value="Bathroom" /><br />
                    <input type="button" class="botongris" value="Living Room" /><br />
                    <input type="button" class="botongris" value="Dining Room" /><br />
                    <input type="button" class="botongris" value="Visual Media" /><br />
                    <input type="button" class="botongris" value="Kitchen" /><br />
                    <input type="button" class="botongris" value="Nursery" /><br />
                    <input type="button" class="botongris" value="Home Office" /><br />
                    <input type="button" class="botongris" value="Garden" /><br />
                    <input type="button" class="botongris" value="Garage" /><br />
                    <input type="button" class="botongris" value="Lighting" /><br />
                    <input type="button" class="botongris" value="Fixtures and Fittings" />
                </div>
                <form action="producto.php" method="post">
                    <label class="title_product proMeses">Nuevos Productos En septiembre</label>
                    <div class="sillas form_products">
                       
                        <?php 
                            foreach($articulos as $articulo) { ?> 
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
                    <br>
                    <label class="title_product proMeses2">Productos Destacados</label>
                    <div class="sillas">

                        <?php 
                            foreach($articulos_oferta as $articulo) { ?> 
                                <div class="producto_principal" >
                                    <img src="<?php echo($articulo['imagen']); ?>" />
                                    <h5 class="producto_titulo"><strong><?php echo($articulo['nombre']); ?></strong> </h5> 
                                    <p  class="text-justify"><?php echo($articulo['descripcion']); ?></p>
                                    <strong>$ <?php echo($articulo['precio']); ?></strong>
                                    <button class="btn btn_producto_agregar btn-block" name="valor" value="<?php echo($articulo['id']); ?>">
                                        <i class="fa fa-shopping-cart" arial-hidden="true"></i>    
                                    Añadir a cesta</button>
                                </div>
                        <?php }//End for each ofert?>
                        
                       
                    </div>
                </form>
            </div>
        </div>
    </div><br>
 
    

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