<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Cetpro José Galvez</title>
    <link rel="stylesheet" type="text/css" href="css/estilos-propios.css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
    <link rel="stylesheet" href="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">

    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/custom-themes.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
</head>

<body>

    <div class="page-wrapper chiller-theme sidebar-bg bg1 toggled">
        
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>

        <nav id="sidebar" class="sidebar-wrapper" style="background-color: #163590">
            <div class="sidebar-content">

                <div class="sidebar-brand">
                    <a href="#"></a>
                    <div id="close-sidebar">
                        <i class="fas fa-times float-left"></i>
                    </div>
                </div>

                <div class="sidebar-header">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded" src="img/user.jpg" alt="User picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name">Jeferson
                            <strong>Cayo</strong>
                        </span>
                        <span class="user-role">Administrador</span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>En línea</span>
                        </span>
                    </div>
                </div>
                <!-- sidebar-header  -->


                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>Administración</span>
                        </li>
                        <li>
                            <a href="index.php">
                                <i class="fa fa-folder"></i>
                                <span>Inicio</span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-graduation-cap"></i>
                                <span>Alumnos</span>
                                <!-- <span class="badge badge-pill badge-danger">New </span> -->
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="alumno_registrar.php">Agregar <!--<span class="badge badge-pill badge-success">Pro</span>--></a>
                                    </li>
                                    <li>
                                        <a href="#">Buscar</a>
                                    </li>
                                    <li>
                                        <a href="#">Editar</a>
                                    </li>
                                    <li>
                                        <a href="#">Eliminar</a>
                                    </li>
                                    <li>
                                        <a href="#">Ver Todo</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fas fa-chalkboard-teacher"></i>
                                <span>Profesores</span>
                                <!--<span class="badge badge-pill badge-primary">3</span>-->
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="profesor_registrar.php">Agregar</a>
                                    </li>
                                    <li>
                                        <a href="#">Buscar</a>
                                    </li>
                                    <li>
                                        <a href="profesor_modificar.php">Editar</a>
                                    </li>
                                    <li>
                                        <a href="#">Eliminar</a>
                                    </li>
                                    <li>
                                        <a href="#">Ver Todo</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-book"></i>
                                <span>Familias Profesionales</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="familia_registrar.php">Agregar</a>
                                    </li>
                                    <li>
                                        <a href="#">Buscar</a>
                                    </li>
                                    <li>
                                        <a href="#">Editar</a>
                                    </li>
                                    <li>
                                        <a href="#">Eliminar</a>
                                    </li>
                                    <li>
                                        <a href="#">Ver Todo</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-book"></i>
                                <span>Opciones Ocup.</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="opcion_registrar.php">Agregar</a>
                                    </li>
                                    <li>
                                        <a href="#">Buscar</a>
                                    </li>
                                    <li>
                                        <a href="#">Editar</a>
                                    </li>
                                    <li>
                                        <a href="#">Eliminar</a>
                                    </li>
                                    <li>
                                        <a href="#">Ver Todo</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-book"></i>
                                <span>Módulos</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="/showRegistroModulo">Agregar</a>
                                    </li>
                                    <li>
                                        <a href="#">Buscar</a>
                                    </li>
                                    <li>
                                        <a href="#">Editar</a>
                                    </li>
                                    <li>
                                        <a href="#">Eliminar</a>
                                    </li>
                                    <li>
                                        <a href="#">Ver Todo</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="header-menu">
                            <span>Operaciones</span>
                        </li>
                        <li>
                            <a href="matricular.php">
                                <i class="fa fa-folder"></i>
                                <span>Matrícular</span>
                            </a>
                        </li>
                        <li>
                            <a href="asignar.php">
                                <i class="fa fa-folder"></i>
                                <span>Asignar Docente</span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-folder"></i>
                                <span>Reportes</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">Reporte de ...</a>
                                    </li>
                                    <li>
                                        <a href="#">Reporte de ...</a>
                                    </li>
                                    <li>
                                        <a href="#">Reporte de ...</a>
                                    </li>
                                    <li>
                                        <a href="#">Reporte de ...</a>
                                    </li>
                                    <li>
                                        <a href="#">Reporte de ...</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->            
        </nav>
        <!-- sidebar-wrapper -->


        <main class="page-content">


            <div class="titulo-principal" class="row justify-content-center" style="background-color: #192F72">
                <div>
                    <h4>CENTRO DE PRODUCCIÓN TÉCNICA JOSÉ GALVEZ</h4>
                </div>
            </div>

            <div class="contenido-main">
                <div class="titulo-formulario">
                    <h2>Registrar <span>Módulo</span></h2>
                </div>

                <form action="/registrarModulo" method="POST" >
                   @csrf
                    <div class="form-group">
                        <label class="titulo-label">Nombre del Módulo</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre del módulo" required autofocus>
                    </div>

                    
                    <div class="form-group">
                        <label class="titulo-label">Opción ocupacional</label>                            
                        <select  class="form-control" name="opcion_ocupacional">
                            <option value="1" selected>Opción ocupacional 1</option>
                            <option value=2>Opción ocupacional 2</option>
                        </select>
                    </div>


                    <div class="form-row">
                        <!--
                        <div class="form-group col-md-4">
                            <label class="titulo-label">Fecha de inicio</label>
                            <input type="date" class="form-control" name="fecha_inicio" placeholder="DD/MM/AAAA" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="titulo-label">Fecha de fin</label>
                            <input type="date" class="form-control" name="fecha_fin" placeholder="DD/MM/AAAA" required>
                        </div>-->
                        <div class="form-group col-md-4">
                            <label class="titulo-label">Duración en horas</label>
                            <input type="number" class="form-control" name="duracion" placeholder="Ej. 300" required>
                        </div>
                    </div>


                    <div class="botones">
                        <button type="submit" class="btn boton-registrar btn-success col-xs-4" name="registro_modulo">Registrar</button>
                        <button type="reset" class="btn boton-limpiar btn-warning col-xs-4" name="limpia_modulo">Limpiar</button>
                    </div>

                </form>
            </div>
        </main>
        <!-- page-content" -->


    </div>

    <!-- page-wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>