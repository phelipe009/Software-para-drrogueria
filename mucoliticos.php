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

    <title>seccion mucoliticos </title>
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
            <h1 class="display-4 mt-4">Mucolíticos</h1>
            <p class="lead">Selecciona uno de nuestros productos</p>
        </div>

        <div class="container" id="lista-productos">
            
            <div class="card-deck mb-3 text-center">
                
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Bisolvon</h4>
                    </div>
                    <div class="card-body">
                        <img src="imagenes/bisolvon.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">25000</span></h1>
                        <h8>Reduce la viscosidad de mocos y flemas, facilitando su expulsión, en resfriados y gripes</h8>
                        <ul class="list-unstyled mt-3 mb-4">
                            
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="7">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Ambroxol</h4>
                    </div>
                    <div class="card-body">
                        <img src="imagenes/ambroxol.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">4000</span></h1>
                        <h8>Actúa disminuyendo la viscosidad de las secreciones bronquiales y facilitando la expectoración</h8>
                        <ul class="list-unstyled mt-3 mb-4">
                            
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="8">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Fluimucil</h4>
                    </div>
                    <div class="card-body">
                        <img src="imagenes/fluimucil.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">15000</span></h1>
                        <h8>Disminuye la viscosidad del moco</h8>
                        <ul class="list-unstyled mt-3 mb-4">
                            
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="9">Comprar</a>
                    </div>
                </div>

            </div>

            <div class="card-deck mb-3 text-center">
                
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Muxol Flem</h4>
                    </div>
                    <div class="card-body">
                        <img src="imagenes/muxol_flem.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">37000</span></h1>
                        <h8>Disuelve la flema</h8>
                        <ul class="list-unstyled mt-3 mb-4">
                           
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="10">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Abrilar</h4>
                    </div>
                    <div class="card-body">
                        <img src="imagenes/abrilar.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">30000</span></h1>
                        <h8>Alivia la tos en forma rápida y segura</h8>
                        <ul class="list-unstyled mt-3 mb-4">
                         
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="11">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Mucosina</h4>
                    </div>
                    <div class="card-body">
                        <img src="imagenes/mucosina.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">25000</span></h1>
                        <h8>Alivia la tos.</h8>
                        <ul class="list-unstyled mt-3 mb-4">
                            
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="12">Comprar</a>
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