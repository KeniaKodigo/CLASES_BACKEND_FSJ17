<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
        <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="#"><?php echo $_SESSION['nombre_admin']; ?></a></h1>
        </div>

        <nav id="navbar" class="nav-menu navbar">
        <ul>
            <li>
                <a href="#" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a>
            </li>
            <li>
                <a href="vistas/lista_estudiantes.php" class="nav-link scrollto"><i class="bx bxs-user-detail"></i> <span>Gestion Estudiantes</span></a>
            </li>
            <li>
                <a href="vistas/deserciones.php" class="nav-link scrollto"><i class="bx bx-user-x"></i> <span>Estudiantes Desertados</span></a>
            </li>
            <li>
                <a href="#" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Gestion Profesores</span></a>
            </li>
        </ul>
        </nav>
    </div>
</header>