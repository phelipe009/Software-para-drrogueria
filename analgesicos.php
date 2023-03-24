<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/popper.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/sweetalert2.min.css">

    <title>seccion analgesicos </title>
</head>

<body>

    <header>
        <div class="container">
            <div class="row align-items-stretch justify-content-between">
                <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                    <a class="navbar-brand" href="index.php">Droguería la 20</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <img src="img/cart.jpeg" class="nav-link dropdown-toggle img-fluid" height="70px"
                                    width="70px" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"></img>
                                <div id="carrito" class="dropdown-menu" aria-labelledby="navbarCollapse">
                                    <table id="lista-carrito" class="table">
                                        <thead>
                                            <tr>
                                                <th>Imagen</th>
                                                <th>Nombre</th>
                                                <th>Precio</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>

                                    <a href="#" id="vaciar-carrito" class="btn btn-primary btn-block">Vaciar Carrito</a>
                                    <a href="#" id="procesar-pedido" class="btn btn-danger btn-block">Procesar
                                        Compra</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 my-4 mx-auto text-center">
            <h1 class="display-4 mt-4"> analgesicos  </h1>
            <p class="lead">Selecciona uno de nuestros productos</p>
        </div>

        <div class="container" id="lista-productos">
            
       
            

           
           

            
            <div class="card-deck mb-3 text-center">
                
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">ibuprofeno</h4>
                    </div>
                    <div class="card-body">
                        <img src="imagenes/9.jpeg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">  $ <span class="">200</span></h1>
                        <h8 class="seccion "> disminuye el dolor  </h8>

                        <ul class="list-unstyled mt-3 mb-4">
                            
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="16">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">acetaminofen</h4>
                    </div>
                    <div class="card-body">
                        <img src="imagenes/10.jpeg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">  $ <span class=""> 100</span></h1>
                        <h8 class="seccion "> para fuertes dolores en todo el cuerpo  </h8>

                        <ul class="list-unstyled mt-3 mb-4">
                         
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="17">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">paracetamol</h4>
                    </div>
                    <div class="card-body">
                        <img src="imagenes/11.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio"> $ <span class="">300</span></h1>
                        <h8 class="seccion "> para fuertes dolores que otros analgesicos no tratan   </h8>

                        <ul class="list-unstyled mt-3 mb-4">
                            
                            
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="18">Comprar</a>
                    </div>
                </div>
                

            </div>

            <div class="card-deck mb-3 text-center">
                
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">indometacina</h4>
                    </div>
                    <div class="card-body">
                        <img src="imagenes/12.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">  $ <span class="">400</span></h1>
                         <h8 class="seccion "> para aliviar el dolor, hinchazón e inflamación   </h8>

                        <ul class="list-unstyled mt-3 mb-4">
                            
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="19">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">diclofenaco</h4>
                    </div>
                    <div class="card-body">
                        <img src="imagenes/13.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">  $ <span class="">200</span></h1>
                        <h8 class="seccion "> para aliviar el dolor y la hinchazón    </h8>

                        <ul class="list-unstyled mt-3 mb-4">
                         
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="20">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">inyecciones de codeina</h4>
                    </div>
                    <div class="card-body">
                        <img src="imagenes/14.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio"> $ <span class="">9500</span></h1>
                        <h8 class="seccion "> para aliviar el dolor , tos y resfriado    </h8>

                        <ul class="list-unstyled mt-3 mb-4">
                            
                            
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="21">Comprar</a>
                    </div>
                </div>
                

            </div>


        </div>
    </main>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <script src="js/carrito.js"></script>
    <script src="js/pedido.js"></script>

</body>

</html>