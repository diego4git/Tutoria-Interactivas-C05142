<!DOCTYPE html>
<html lang="en">
<head>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
        crossorigin="anonymous"
    />

    <link rel="stylesheet" href="css/generic.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<header>
    <!-- Inicio del menú -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark ps-4 pe-4">
        <div class="container-fluid">
        <!-- Icon -->
        <a class="navbar-brand" href="#">
            <img src="imgs/Logo-NewsTable.png" alt="logo" class="menu-img"/>
            <span class="text-danger">News Tables</span>
        </a>

        <!-- Boton desplegable de menú hamburguesa -->
        <!-- apunta mediante id a los items que entrán en el menu hamburguesa con "data-bs-target" -->
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#menu"  
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Elementos del menú colapsable -->
        <div class="collapse navbar-collapse menu-input justify-content-end" id="menu">

            <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-danger" type="submit">Search</button>
            </form>

            <ul class="navbar-nav"> <!-- me-auto acomoda los items a la derecha, ms-auto lo hace a la izquierda--> 

            <li class="nav-item d-flex">

                <!-- boton que dispara el modal -->
                <a class="nav-link active" href="#">
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Sing in
                    </button>
                </a>

                <!-- modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header bg-dark">
                            <img src="imgs/Logo-NewsTable.png" alt="logo" class="menu-img"/>
                            <span class="text-danger">News Tables</span>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">@example.com</span>
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                            </div>

                            <div>
                                <a href="#"><p>Forgot Password?</p></a>
                            </div>

                        </div>

                        <div class="modal-footer bg-dark">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger">Log in</button>
                        </div>

                        </div>
                    </div>
                </div>
            </li>
            </ul>
        <hr class="text-white">
    </nav>
    <!-- Fin del menú -->
</header>
</html>