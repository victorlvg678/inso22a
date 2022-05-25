<!DOCTYPE html5>
<html>
<head>
    <title>Menú | Sistema de gestión de liguilla</title>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="../../media/css/main.css"/>
    <link rel="stylesheet" href="../../media/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../media/css/boxicons.min.css" />
    <link rel="stylesheet" href="../../media/css/tabs.css" />

    <!-- Scripts -->
    <script type="text/javascript" src="../../media/bootstrap/js/bootstrap.bundle.min.js"></script>
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
        <div class="container">
            <input type="radio" id="tab1" name="tab" checked>
            <label for="tab1"><i class="bx bx-message-square-add"></i> Crear</label>
            <input type="radio" id="tab2" name="tab">
            <label for="tab2"><i class="bx bx-search"></i> Buscar</label>
            <input type="radio" id="tab3" name="tab">
            <label for="tab3"><i class="bx bx-message-square-edit"></i> Actualizar</label>
            <input type="radio" id="tab4" name="tab">
            <label for="tab4"><i class="bx bx-message-square-x"></i> Eliminar</label>
            <div class="line"></div>
                <div class="content-container">
                    <div class="content" id="c1">
                        <h3>Features</h3>
                        <p>There really are a lot of features.</p>
                    </div>
                    <div class="content" id="c2">
                        <h3>History</h3>
                        <p>The project started in 2018 when someone needed something.</p>
                    </div>
                    <div class="content" id="c3">
                        <h3>Reviews</h3>
                        <p>Amazing product. I don't know how it works.</p>
                        <i>- Anonymous</i>
                    </div>
                    <div class="content" id="c4">
                        <h3>Share</h3>
                        <p>This product is currently not shareable.</p>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>