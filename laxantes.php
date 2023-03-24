<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/popper.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

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
            <h1 class="display-4 mt-4"> Laxantes </h1>
            <p class="lead">Selecciona uno de nuestros productos</p>
        </div>

        <div class="container" id="lista-productos">








            <div class="card-deck mb-3 text-center">

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Dulcolax</h4>
                    </div>
                    <div class="card-body">
                        <img src="imagenes/dulcolax.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">22000</span></h1>
                        <h8 class="seccion "> Es un laxante estimulante. Éste causa que los músculos del colon se
                            contraigan y dejen pasar a la heces fecales. </h8>

                        <ul class="list-unstyled mt-3 mb-4">

                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="46">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Verolax</h4>
                    </div>
                    <div class="card-body">
                        <img src="imagenes/verolax.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">2700</span></h1>
                        <h8 class="seccion "> Está indicado para el alivio local sintomático del estreñimiento
                            transitorio y ocasional para adultos y adolescentes a partir de 12 años. </h8>

                        <ul class="list-unstyled mt-3 mb-4">

                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="47">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Fave de fuca</h4>
                    </div>
                    <div class="card-body">
                        <img src="imagenes/favedefuca.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">8000</span></h1>
                        <h8 class="seccion ">Laxante que estimula la actividad intestinal favoreciendo la evacuación de
                            las heces </h8>

                        <ul class="list-unstyled mt-3 mb-4">


                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="48">Comprar</a>
                    </div>
                </div>


            </div>

            <div class="card-deck mb-3 text-center">

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Microlax</h4>
                    </div>
                    <div class="card-body">
                        <img src="imagenes/microlax.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">5600</span></h1>
                        <h8 class="seccion "> Actúa como un laxante de tipo osmótico, debido a la acción combinada del
                            Citrato de sodio, que actúa reteniendo líquido en el intestino, incrementando el volumen de
                            agua en las heces </h8>

                        <ul class="list-unstyled mt-3 mb-4">

                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="49">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Digestar</h4>
                    </div>
                    <div class="card-body">
                        <img src="imagenes/digestar.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">22000</span></h1>
                        <h8 class="seccion "> Laxante/colagogo, usado en situaciones de estreñimiento severo limpiando
                            de forma efectiva también el hígado actuando como un descargador hepático. </h8>

                        <ul class="list-unstyled mt-3 mb-4">

                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="50">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Laxadina</h4>
                    </div>
                    <div class="card-body">
                        <img src="imagenes/laxadina.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">4000</span></h1>
                        <h8 class="seccion "> medicamento de plantas que se utiliza para el tratamiento del
                            estreñimiento ocasional. </h8>

                        <ul class="list-unstyled mt-3 mb-4">


                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="51">Comprar</a>
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