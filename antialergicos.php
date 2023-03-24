<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/popper.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="css/sweetalert2.min.css">

    <title>Seccion Anti Alergicos</title>
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
            <h1 class="display-4 mt-4">Antialérgicos</h1>
            <p class="lead">Selecciona uno de nuestros productos</p>
        </div>

        <div class="container" id="lista-productos">

            <div class="card-deck mb-3 text-center">

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Cetirizina</h4>
                    </div>
                    <div class="card-body">
                        <img src="imagenes/cetirizina.png" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">1000</span></h1>
                        <h8>aliviar temporalmente los síntomas de la fiebre del heno y las alergias a otras sustancias
                        </h8>
                        <ul class="list-unstyled mt-3 mb-4">

                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="1">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Desloratadina</h4>
                    </div>
                    <div class="card-body">
                        <img src="imagenes/desloratadina.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">3000</span></h1>
                        <h8>Alivia los síntomas de fiebre del heno y alergia, incluyendo estornudos; secreción nasal;
                            así como ojos rojos, picazón, lagrimeo en los ojos.</h8>
                        <ul class="list-unstyled mt-3 mb-4">

                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="2">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Loratadina</h4>
                    </div>
                    <div class="card-body">
                        <img src="imagenes/loratadina.png" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">1000</span></h1>
                        <h8>Alivia en forma temporal los síntomas de la fiebre del heno (alergia al polen, polvo u otras
                            sustancias en el aire) y otras alergias.</h8>
                        <ul class="list-unstyled mt-3 mb-4">

                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="3">Comprar</a>
                    </div>
                </div>

            </div>

            <div class="card-deck mb-3 text-center">

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Levocetirizina</h4>
                    </div>
                    <div class="card-body">
                        <img src="imagenes/levocetirizina.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">3400</span></h1>
                        <h8>se usa para aliviar el escurrimiento nasal; los estornudos; y el enrojecimiento, la comezón
                            y el lagrimeo de los ojos resultantes de la fiebre del heno, alergias estacionales y
                            alergias a otras sustancias como ácaros del polvo, caspa de animales y moho</h8>
                        <ul class="list-unstyled mt-3 mb-4">

                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="4">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Fexofenadina</h4>
                    </div>
                    <div class="card-body">
                        <img src="imagenes/fexofenadina.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">4800</span></h1>
                        <h8>aliviar los síntomas de la rinitis alérgica estacional (fiebre del heno), incluyendo
                            secresión nasal; estornudos; enrojecimiento, picazón u ojos acuosos</h8>
                        <ul class="list-unstyled mt-3 mb-4">

                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="5">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Clorfeniramina</h4>
                    </div>
                    <div class="card-body">
                        <img src="imagenes/clorfeniramina.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">200</span></h1>
                        <h8>Alivia el enrojecimiento, la picazón y el lagrimeo de ojos; los estornudos; la irritación de
                            nariz o garganta; y la secreción nasal</h8>
                        <ul class="list-unstyled mt-3 mb-4">

                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="6">Comprar</a>
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