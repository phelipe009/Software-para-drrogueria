<!DOCTYPE html>
<html lang="es">
    <!-- encabezado para el titulo de la pestaña, descripción y palabras 
    claves para que el navegador lo entregue-->
    <head>
        <meta charset="utf-8" />
        <title>Droguería la 20</title>
         <link rel="stylesheet" href="css/bootstrapp.min.css">
        <meta name="description" content="Esta es mi primer página Web" />
        <meta name="keywords" content="droguería, quibdo, la 20" />
        <!-- reglas para estilos de la pagina-->
        <link rel="stylesheet" href="imagenes/estilos.css" />
        <link rel="stylesheet" href="imagenes/estilos.css" />
    </head>
    <div class="agrupar">

        <!-- cuerpo: titulo, barra de navegación y pie de página-->
        
            <div>
                <header>
                   <style type="text/css">
                       #header{
                        background-color: #ffff;
                       }
                   </style>
                </header>


  

  <section id="buscador" style="background: white"  style="font-size: red">
   <?php 
    include_once('functions/bd_conn.php');
    include_once('templates/head.php');
    include_once('templates/search.php');
    if(!empty($_GET['busqueda'])){
        $busqueda = $_GET['busqueda'];

        $sql = "SELECT * FROM   'productos' WHERE 'producto' LIKE '%".$busqueda."%'";
     
        $result = mysqli_query($conn,$sql) or die (mysqli_error($conn));
        while($item=mysqli_fetch_assoc($result)){
            
            echo '
            <div class="product">
             <div  class="img">
                     <img src="'.$item['img'].'"  >


                 </div>
                 </div>
                
                 <div class="title">
                     <h4>'.$item['producto'].'</h4>
                 </div>
                  <div class="precio">
                 <span>'.$item['precio (und)'].'$ und </span>
             </div>
                  <div class="seccion">
                 <span> producto para  '.$item['tipo'].' ubicado en la secion  '.$item['seccion'].'</span>
             </div>
            </div>';
        }
     
    }


    include_once('templates/footer.php');
    
?>
</section>

                       
                
                <nav class="menu" >
                <a href="indexC.php">Contactanos</a>
                <a target="blank" href="https://www.google.com/maps/@5.6861068,-76.6617339,3a,90y,178.14h,108.14t/data=!3m6!1e1!3m4!1sIKMQO6oZqbuvLJP3NOdXvA!2e0!7i13312!8i6656?hl=es">Ubicación</a>
                <a href="indexpp.php ">Pedido</a>

                <a href="indexq.php ">Quienes Somos</a>

                </nav>

            </div>
            
            <div>
                <body>
                    <br>
                    
            


                 



                    <section id="productos">
                        
                        <h1 id="tit1" style="font-size: 70px">
                        Secciones Farmacéuticas 
                        </h1>

                        
                        <figure id="primeraparte">
                         <img id="imggen" src="imagenes/24.gif">
                           
                            <figcaption id="primerapartef">
                                Analgesicos  -
                                <a href="analgesicos.php ">
                                Mostrar más
                                </a>
                            </figcaption>
                        </figure>
                        <figure id="primeraparte">                
                            <img id="imggen" src="imagenes/antiinflamatorios.gif">
                            <figcaption id="primerapartef">
                                Anti Inflamatorios -
                                <a href="antiinflamatorios.php">
                                Mostrar más
                                </a>
                            </figcaption>
                        </figure>

                        <figure id="primeraparte">
                            <img id="imggen" src="Imagenes/antiinfecciosos.gif">
                            <figcaption id="primerapartef">
                                Anti Infecciosos -
                                <a href="antiinfecciosos.php">
                                Mostrar más
                                </a>
                            </figcaption>
                        </figure>
                        <figure id="primeraparte">
                            <img id="imggen" src="Imagenes/vitaminas.gif">
                            <figcaption id="primerapartef">
                                Vitaminas -
                                <a href="vitaminas.php">
                                Mostrar más
                                </a>
                            </figcaption>
                        </figure>
                        
                        <figure id="primeraparte">
                            <img id="imggen" src="Imagenes/mucoliticos.gif">
                            <figcaption id="primerapartef">
                                Mucoliticos - 
                                <a href="mucoliticos.php">
                                Mostrar más
                                </a>
                            </figcaption>
                        </figure>
                        <figure id="primeraparte">
                            <img id="imggen" src="Imagenes/antialergicos.gif">
                            <figcaption id="primerapartef">
                                Anti Alergicos -
                                <a href="antialergicos.php">
                                Mostrar más
                                </a>
                            </figcaption>
                        </figure>

                       
                    </section>
                    <section>
                        <br>
                        <br>
                        <br>
                         <h1 id="tit1" style="font-size: 70px">
                        Seccion Informativa  
                        </h1>
                        
                    </section>
                    <section class="izqpp">
                        <h1> ¿Por qué no automedicarse ? </h1>
                       
                        <h4>La automedicación sin control médico </h4>
                        <h4> o farmacéutico comporta una serie de riesgos</h4>
                        <h4> para la salud que en la mayoría de los casos</h4>
                       <h4> son desconocidos por los ciudadanos: Toxicidad:</h4>
                       <h4> efectos secundarios, reacciones adversas y en</h4>
                       <h4> algún caso intoxicación. Falta de efectividad</h4>
                        <h4> porque se utilizan en situaciones no indicadas.</h4>

                        <br>
                        
                        
                    </section>
                    <section class="derpp">
                        
                       <iframe width="560" height="315" src="https://www.youtube.com/embed/XUxBXTMne94" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        
                    </section>
                   
    
                </body>
            </div>
            <footer style="background : black" >
                <section class="izqpp">
                    <h3>Contacto:</h3>
                    <h4>Tel: 672 08 93</h4>
                    <h4>Correo: drogueríala20@gmail.com</h4>
                    <h4>Facebook: Drogueríala20</h4>
                    <h4>Instagram: @Drogueríala20</h4>
                    
                </section>
                <section class="cenpp">
                    <h3>
                        Dirección:
                    </h3>
                    <h4> Quibdó - Chocó </h4>
                    <h4> Cl 20 #4-04 </h4>
                </section>
                <section class="derpp">
                    <h4>© 2021</h4>
                    <h4>By @Andrés Marín @Eligio @Phelipe</h4>
                    <h4>Producto creado con VSCode</h4>
                </section>
            </footer>
            
    </div>
</html>


