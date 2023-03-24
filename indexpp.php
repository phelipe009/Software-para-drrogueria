<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/popper.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/sweetalert2.min.css">

    <title>Carrito Compras Droguería la 20</title>
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
            <h1 class="display-4 mt-4">Lista de Productos</h1>
            <p class="lead">Selecciona uno de nuestros productos</p>
        </div>

        <div class="container" id="lista-productos">
            
            <div class="card-deck mb-3 text-center">
                
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Acido salicilico</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/acido salicilico.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">2500</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="1">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Hibuprofeno </h4>
                    </div>
                    <div class="card-body">
                        <img src="img/prueba.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">500</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="2">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Fleximax Nap</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/Fleximax Nap.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">800</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="3">Comprar</a>
                    </div>
                </div>

            </div>

            <div class="card-deck mb-3 text-center">
                
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Valeriana</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/Valeriana.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">2300</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                           
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="4">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Shampoo H&S grande</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/h&s.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">23000</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                         
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="5">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Desodorante AXE</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/Desodorante AXE.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">8000</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="6">Comprar</a>
                    </div>
                </div>

            </div>

            <div class="card-deck mb-3 text-center">
                
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Agua del Carmen</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/Agua del Carmen.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">7000</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="7">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Formol</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/Formol.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">6500</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                         
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="8">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Tramadol</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/Tramadol.png" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">7000</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            
                            
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="9">Comprar</a>
                    </div>
                </div>
                

            </div>

            <div class="card-deck mb-3 text-center">
                
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Apronax</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/Apronax.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">1300</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="10">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Romero</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/Romero.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">2000</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                         
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="11">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Acetaminofen</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/Acetaminofen.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">300</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            
                            
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="12">Comprar</a>
                    </div>
                </div>
                

            </div>

            <div class="card-deck mb-3 text-center">
                
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Stopen</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/Stopen.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">5000</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="13">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Cera Ego</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/Cera ego.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">9000</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                         
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="14">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Color-1 - Tinte</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/Tinte.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">8000</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            
                            
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="15">Comprar</a>
                    </div>
                </div>
                

            </div>

            <div class="card-deck mb-3 text-center">
                
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Bicarbonato</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/Bicarbonato.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">700</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="16">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Veterina</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/Veterina.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">7000</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                         
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="17">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Azufre</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/Azufre.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">2500</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            
                            
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="18">Comprar</a>
                    </div>
                </div>
                

            </div>

            <div class="card-deck mb-3 text-center">
                
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Alucema</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/Alucema.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">3000</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="19">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Naproxeno</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/Naproxeno.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">600</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                         
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="20">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Meloxicam</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/Meloxicam.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">1500</span></h1>

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