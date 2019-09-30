<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Producto</title>
    <link rel="stylesheet" type="text/css" href="assets/b4/css/bootstrap.min.css">
    <link href="css/header.css" rel="stylesheet" type="text/css" />
    <link href="css/producto.css" rel="stylesheet" type="text/css" />
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
        <div class="contenedor">
           <?php
           $aleatorio = $_POST['valor'];
           if($aleatorio=="0"){
            $aleatorio = rand(1,6);
           }else{
            
           }
           
           ?>
            <div class="product">
                <img src="imagenes/silla<?php echo $aleatorio;?>.jpg" class="ima">
           </div>
           <div class="descripcion">
               <?php
               switch($aleatorio){
                case 1:
                ?>
                <h5  class="producto_titulo">Silla azul claro</h5>
                <p  class="text-justify">Silla de materiales fuertes, algodón hipoalergénico.</p>
                        <strong>$ 40.25</strong>
                        <button class="btn btn_producto_agregar btn-block">
                            <i class="fa fa-shopping-cart" arial-hidden="true"></i>    
                        Comprar</button>
                <?php
                break;
                case 2:
                ?>
                <h5  class="producto_titulo">Silla azul fuerte</h5>
                <p  class="text-justify">Silla de materiales fuertes, algodón hipoalergénico.</p>
                        <strong>$ 40.25</strong>
                        <button class="btn btn_producto_agregar btn-block">
                            <i class="fa fa-shopping-cart" arial-hidden="true"></i>    
                        Comprar</button>
                <?php
                break;
                case 3:
                ?>
                <h5  class="producto_titulo">Silla roja</h5>
                <p  class="text-justify">Silla de materiales fuertes, algodón hipoalergénico.</p>
                        <strong>$ 40.25</strong>
                        <button class="btn btn_producto_agregar btn-block">
                            <i class="fa fa-shopping-cart" arial-hidden="true"></i>    
                        Comprar</button>
                <?php
                break;
                case 4:
                ?>
                <h5  class="producto_titulo">Silla café fuerte</h5>
                <p  class="text-justify">Silla de materiales fuertes, madera.</p>
                        <strong>$ 40.25</strong>
                        <button class="btn btn_producto_agregar btn-block">
                            <i class="fa fa-shopping-cart" arial-hidden="true"></i>    
                        Comprar</button>
                <?php
                break;
                case 5:
                ?>
                <h5  class="producto_titulo">Silla café claro</h5>
                <p  class="text-justify">Silla de materiales fuertes, madera.</p>
                        <strong>$ 40.25</strong>
                        <button class="btn btn_producto_agregar btn-block">
                            <i class="fa fa-shopping-cart" arial-hidden="true"></i>    
                        Comprar</button>
                <?php
                break;
                case 6:
                ?>
                <h5  class="producto_titulo">Sillón blanco</h5>
                <p  class="text-justify">Sillón cómodo y de texturas suaves.</p>
                        <strong>$ 40.25</strong>
                        <button class="btn btn_producto_agregar btn-block">
                            <i class="fa fa-shopping-cart" arial-hidden="true"></i>    
                        Comprar</button>
                <?php
               }
               ?>
            </div>
            <div class="subimagenes">
                <img src="subimagenes/silla<?php echo $aleatorio;?>.1.jpg" class="subimagen">  
                <img src="subimagenes/silla<?php echo $aleatorio;?>.2.jpg" class="subimagen"> 
                <img src="subimagenes/silla<?php echo $aleatorio;?>.3.jpg" class="subimagen"> 
            </div>

                <div class="sillas">
                    <div class="producto_principal" >
                        <img src="imagenes/silla1.jpg"/>
                        <h5 class="producto_titulo2"><strong>Silla azul claro</strong> </h5> 
                        <p  class="text-justify">Aquí va la descripción del producto.</p>
                        <strong>$ 40.25</strong>
                        <button class="btn btn_producto_agregar btn-block">
                            <i class="fa fa-shopping-cart" arial-hidden="true"></i>    
                        Añadir a cesta</button>
                    </div>
                    <div class="producto_principal" >
                    <img src="imagenes/silla2.jpg" />
                        <h5 class="producto_titulo2"><strong>Silla azul fuerte</strong> </h5> 
                        <p  class="text-justify">Aquí va la descripción del producto.</p>
                        <strong>$ 40.25</strong>
                        <button class="btn btn_producto_agregar btn-block">
                            <i class="fa fa-shopping-cart" arial-hidden="true"></i>    
                        Añadir a cesta</button>
                    </div>
                    <div class="producto_principal" >
                    <img src="imagenes/silla3.jpg" />
                        <h5 class="producto_titulo2"><strong>Silla roja</strong> </h5> 
                        <p  class="text-justify">Aquí va la descripción del producto.</p>
                        <strong>$ 40.25</strong>
                        <button class="btn btn_producto_agregar btn-block">
                            <i class="fa fa-shopping-cart" arial-hidden="true"></i>    
                        Añadir a cesta</button>
                    </div>
                    <div class="producto_principal" >
                    <img src="imagenes/silla4.jpg" />
                        <h5 class="producto_titulo2"><strong>Silla café</strong> </h5> 
                        <p  class="text-justify">Aquí va la descripción del producto.</p>
                        <strong>$ 40.25</strong>
                        <button class="btn btn_producto_agregar btn-block">
                            <i class="fa fa-shopping-cart" arial-hidden="true"></i>    
                        Añadir a cesta</button>
                    </div>
                    <div class="producto_principal" >
                    <img src="imagenes/silla5.jpg" />
                        <h5 class="producto_titulo2"><strong>Silla café claro</strong> </h5> 
                        <p  class="text-justify">Aquí va la descripción del producto.</p>
                        <strong>$ 40.25</strong>
                        <button class="btn btn_producto_agregar btn-block">
                            <i class="fa fa-shopping-cart" arial-hidden="true"></i>    
                        Añadir a cesta</button>
                    </div>
                    <div class="producto_principal" >
                    <img src="imagenes/silla6.jpg" />
                        <h5 class="producto_titulo2"><strong>Sillón blanco</strong> </h5> 
                        <p  class="text-justify">Aquí va la descripción del producto.</p>
                        <strong>$ 40.25</strong>
                        <button class="btn btn_producto_agregar btn-block">
                            <i class="fa fa-shopping-cart" arial-hidden="true"></i>    
                        Añadir a cesta</button>
                    </div>
                    
                </div>
        </div>
        
    </div>
   
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="assets/jquery/jquery.slim.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/b4/js/bootstrap.min.js"></script>
</body>

</html>