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
                        <img class="img-responsive img-rounded" src="/img/user.jpg" alt="User picture">
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
                            <a href="action="{{ route('profesor.index') }}"  role="form"">
                                <i class="fa fa-folder"></i>
                                <span>Inicio</span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown">
                            <a>
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
                                        <a href="">Buscar</a>
                                    </li>
                                    <li>
                                        <a href="">Editar</a>
                                    </li>
                                    <li>
                                        <a href="">Eliminar</a>
                                    </li>
                                    <li>
                                        <a href="">Ver Todo</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-dropdown">
                            <a>
                                <i class="fas fa-chalkboard-teacher"></i>
                                <span>Profesores</span>
                                <!--<span class="badge badge-pill badge-primary">3</span>-->
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="{{ route('profesor.create') }}">Agregar</a>
                                    </li>
                                    <li>
                                        <a href="">Buscar</a>
                                    </li>
                                    <li>
                                        <a href="/editar_profesor">Editar</a>
                                    </li>
                                    <li>
                                        <a href="">Eliminar</a>
                                    </li>
                                    <li>
                                        <a href="">Ver Todo</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a>
                                <i class="fa fa-book"></i>
                                <span>Familias Profesionales</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="familia_registrar.php">Agregar</a>
                                    </li>
                                    <li>
                                        <a href="">Buscar</a>
                                    </li>
                                    <li>
                                        <a href="">Editar</a>
                                    </li>
                                    <li>
                                        <a href="">Eliminar</a>
                                    </li>
                                    <li>
                                        <a href="">Ver Todo</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a>
                                <i class="fa fa-book"></i>
                                <span>Opciones Ocup.</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="opcion_registrar.php">Agregar</a>
                                    </li>
                                    <li>
                                        <a href="">Buscar</a>
                                    </li>
                                    <li>
                                        <a href="">Editar</a>
                                    </li>
                                    <li>
                                        <a href="">Eliminar</a>
                                    </li>
                                    <li>
                                        <a href="">Ver Todo</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a>
                                <i class="fa fa-book"></i>
                                <span>Módulos</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="/showRegistroModulo">Agregar</a>
                                    </li>
                                    <li>
                                        <a href="">Buscar</a>
                                    </li>
                                    <li>
                                        <a href="">Editar</a>
                                    </li>
                                    <li>
                                        <a href="">Eliminar</a>
                                    </li>
                                    <li>
                                        <a href="">Ver Todo</a>
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
                            <a>
                                <i class="fa fa-folder"></i>
                                <span>Reportes</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="">Reporte de ...</a>
                                    </li>
                                    <li>
                                        <a href="">Reporte de ...</a>
                                    </li>
                                    <li>
                                        <a href="">Reporte de ...</a>
                                    </li>
                                    <li>
                                        <a href="">Reporte de ...</a>
                                    </li>
                                    <li>
                                        <a href="">Reporte de ...</a>
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