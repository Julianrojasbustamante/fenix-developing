<section>
    <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark color-menu">
        <a class="navbar-brand mx-1 mx-md-5" href="inicio">
            <img src="<?php echo $GLOBALS["raiz"]; ?>vista/img/logo-encabezado.png" class="img-fluid logo-encabezado" alt="Logo Fenix Developing">
        </a>
        <button class="navbar-toggler first-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
            aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
            <div class="animated-icon1"><span></span><span></span><span></span></div>
        </button>
        <div class="collapse navbar-collapse mx-1 mx-md-5" id="navbarSupportedContent-4">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="inicio">
                    <i class="fab fa-facebook-f"></i> inicio
                    <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto">
                    <i class="fab fa-instagram"></i> Contacto</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i> Nuestros servicios </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                        <a class="dropdown-item" href="#">Desarrollo web</a>
                        <a class="dropdown-item" href="#">Soporte tecnico</a>
                        <a class="dropdown-item" href="#">Diseño</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!--/.Navbar -->
</section>