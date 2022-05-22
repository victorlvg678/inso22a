<!DOCTYPE html5>
<html>
<head>
    <title>Menú | Sistema de gestión de liguilla</title>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="../../media/css/main.css"/>
    <link rel="stylesheet" href="../../media/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../media/css/boxicons.min.css" />

    <!-- Scripts -->
    <script type="text/javascript" src="../../media/bootstrap/bootstrap.bundle.min.css"></script>
    <script type="text/javascript" src="../../media/js/main.js"></script>
</head>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">SGL</span> </a>
                <div class="nav_list">
                    <a href="#" class="nav_link active"> 
                        <i class='bx bx-grid-alt nav_icon'></i> 
                        <span class="nav_name">Equipos</span> 
                    </a> 
                    <a href="#" class="nav_link"> 
                        <i class='bx bx-user nav_icon'></i> 
                        <span class="nav_name">Usuarios</span> 
                    </a> 
                    <a href="#" class="nav_link"> 
                        <i class='bx bx-message-square-detail nav_icon'></i> 
                        <span class="nav_name">Partidos</span> 
                    </a> 
                    <!--<a href="#" class="nav_link"> 
                        <i class='bx bx-bookmark nav_icon'></i> 
                        <span class="nav_name">Bookmark</span> 
                    </a> <a href="#" class="nav_link"> 
                        <i class='bx bx-folder nav_icon'></i> 
                        <span class="nav_name">Files</span> 
                    </a> 
                    <a href="#" class="nav_link"> 
                        <i class='bx bx-bar-chart-alt-2 nav_icon'></i> 
                        <span class="nav_name">Stats</span> 
                    </a> -->
                </div>
            </div> 
            <a href="#" class="nav_link"> 
                <i class='bx bx-log-out nav_icon'></i> 
                <span class="nav_name">Cerrar sesión</span> 
            </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light">
        <br>
        <br>
        <br>
        <button class="btn btn-primary">Registrar</button>
        <button class="btn btn-primary">Buscar</button>
        <button class="btn btn-primary">Actualizar</button>
        <button class="btn btn-danger">Eliminar</button>
        <h4>Usuarios</h4>
        <p>Nombre(s)</p>
        <input class="form-control" type="text" style="width: auto">
        <p>Apellido(s)</p>
        <input class="form-control" type="text"  style="width: auto">
        <p>Nombre de usuario</p>
        <input class="form-control" type="text"  style="width: auto">
        <p>Contraseña</p>
        <input class="form-control" type="text"  style="width: auto">
        <p>Pregunta de seguridad 1</p>
        <select class="form-control" style="width: auto">
            <option>¿Cuál es tu color favorito</option>
        </select>
        <p>Respuesta</p>
        <input class="form-control" type="text"  style="width: auto">
        <p>Pregunta de seguridad 2</p>
        <select class="form-control" style="width: auto">
            <option>¿Cuál es tu color favorito</option>
        </select>
        <p>Respuesta</p>
        <input class="form-control" type="text"  style="width: auto">
        <p>Pregunta de seguridad 3</p>
        <select class="form-control" style="width: auto">
            <option>¿Cuál es tu color favorito</option>
        </select>
        <p>Respuesta</p>
        <input class="form-control" type="text"  style="width: auto">
        <p>Pregunta de seguridad 4</p>
        <select class="form-control" style="width: auto">
            <option>¿Cuál es tu color favorito</option>
        </select>
        <p>Respuesta</p>
        <input class="form-control" type="text"  style="width: auto">
    </div>
    <!--Container Main end-->
<script type="text/javascript" src="menu.js"></script>
</body>
</html>