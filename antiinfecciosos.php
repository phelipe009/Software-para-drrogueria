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

    <title>seccion anti infecciosos </title>
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
            <h1 class="display-4 mt-4"> anti infecciosos </h1>
            <p class="lead">Selecciona uno de nuestros productos</p>
        </div>

        <div class="container" id="lista-productos">
            
       
            

           
           

            
            <div class="card-deck mb-3 text-center">
                
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">amoxicilina</h4>
                    </div>
                    <div class="card-body">
                        <img src="imagenes/21.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">  $ <span class="">700</span></h1>
                        <h8 class="seccion "> Está indicada en el tratamiento de las infecciones </h8>

                        <ul class="list-unstyled mt-3 mb-4">
                            
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="22">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">clotrimazol</h4>
                    </div>
                    <div class="card-body">
                        <img src="imagenes/22.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">  $ <span class=""> 7000</span></h1>
                        <h8 class="seccion "> combate infeciones vaginales   </h8>

                        <ul class="list-unstyled mt-3 mb-4">
                         
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="23">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">ciproflaxino</h4>
                    </div>
                    <div class="card-body">
                        <img src="imagenes/23.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">  $ <span class="">800</span></h1>
                        <h8 class="seccion "> combate infeciones    </h8>

                        <ul class="list-unstyled mt-3 mb-4">
                            
                            
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="24">Comprar</a>
                    </div>
                </div>
                

            </div>

            <div class="card-deck mb-3 text-center">
                
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">ampicilina</h4>
                    </div>
                    <div class="card-body">
                        <img src="imagenes/25.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">  $ <span class="">300</span></h1>
                         <h8 class="seccion "> combate infeciones   </h8>

                        <ul class="list-unstyled mt-3 mb-4">
                            
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="25">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">norfloxacino</h4>
                    </div>
                    <div class="card-body">
                        <img src="imagenes/26.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">  $ <span class="">1000</span></h1>
                        <h8 class="seccion "> ecsencial para combatir bacterias    </h8>

                        <ul class="list-unstyled mt-3 mb-4">
                         
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="26">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">cefalexina</h4>
                    </div>
                    <div class="card-body">
                        <img src="imagenes/27.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio"> $ <span class="">700</span></h1>
                        <h8 class="seccion "> combete infecciones agudas      </h8>

                        <ul class="list-unstyled mt-3 mb-4">
                            
                            
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="27">Comprar</a>
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