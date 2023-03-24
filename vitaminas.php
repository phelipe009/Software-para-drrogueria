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

    <title> seccion de Vitaminas</title>
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
            <h1 class="display-4 mt-4"> Vitaminas </h1>
            <p class="lead">Selecciona uno de nuestros productos</p>
        </div>

        <div class="container" id="lista-productos">








            <div class="card-deck mb-3 text-center">

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Vitacerebrina</h4>
                    </div>
                    <div class="card-body">
                        <img src="imagenes/vitacerebrina.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">50000</span></h1>
                        <h8 class="seccion "> Reconstituyente del cerebro y los nervios remineralizante y restaurador de
                            los glóbulos rojos, en la sangre y de insuperable eficacia en la restauración del nervio
                            óptico, al que devuelve la vitalidad perdida, aclarando la vista y curando radicalmente los
                            cansancios del cerebro, mareos, desvanecimiento perdida de la memoria y el agotamiento de la
                            vista. </h8>

                        <ul class="list-unstyled mt-3 mb-4">

                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="40">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Neurobion</h4>
                    </div>
                    <div class="card-body">
                        <img src="imagenes/neurobion.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">30000</span></h1>
                        <h8 class="seccion "> Neurobión es un complemento vitamínico que sirve para compensar la
                            deficiencia de las vitaminas B1, B6 y B12 en el organismo, que provocan diversos
                            padecimientos. Dependiendo del uso y presentación incluye otros ingredientes. </h8>

                        <ul class="list-unstyled mt-3 mb-4">

                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="41">Comprar</a>
                    </div>
                </div>


            </div>

            <div class="card-deck mb-3 text-center">

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">emulsion de scott</h4>
                    </div>
                    <div class="card-body">
                        <img src="imagenes/emulsion.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">17000</span></h1>
                        <h8 class="seccion">complemento vitamínico rico en aceite de hígado de bacalao, que es fuente
                            natural de vitaminas A y D, además contiene calcio y fósforo adicionados. Para los niños:
                            Fortalece los huesos, contribuye al óptimo desempeño del sistema nervioso, fomenta el
                            crecimiento e impulsa su desarrollo.</h8>

                        <ul class="list-unstyled mt-3 mb-4">

                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="42">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Calcibon </h4>
                    </div>
                    <div class="card-body">
                        <img src="imagenes/calcibond.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">600</span></h1>
                        <h8 class="seccion">Coadyuvante en el tratamiento de las deficiencias orgánicas de calcio,
                            prevención y tratamiento de la osteoporosis.</h8>

                        <ul class="list-unstyled mt-3 mb-4">

                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="43">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Vita c + Zinc</h4>
                    </div>
                    <div class="card-body">
                        <img src="imagenes/vitac.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">400</span></h1>
                        <h8 class="seccion">Actúa en la síntesis de colágeno, hueso, cartílago, dientes y piel. Estimula
                            los sistemas de defensa contra enfermedades infecciosas y mejora la resistencia natural a
                            las enfermedades. Activa el metabolismo intermediario, la respiración celular y la
                            cicatrización.</h8>

                        <ul class="list-unstyled mt-3 mb-4">


                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="44">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Neuriva</h4>
                    </div>
                    <div class="card-body">
                        <img src="imagenes/neuriva.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">40000</span></h1>
                        <h8 class="seccion">suplemento dietético de dos ingredientes diseñado para estimular la
                            cognición mental y la función cerebral.</h8>

                        <ul class="list-unstyled mt-3 mb-4">


                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="45">Comprar</a>
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