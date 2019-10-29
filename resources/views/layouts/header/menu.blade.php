<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                <li class=" navigation-header"><span data-i18n="nav.category.admin-panels">MENU</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="Admin Panels"></i>
                </li>
                <li class=" nav-item"><a href="../ecommerce-menu-template"><i class="ft-bar-chart"></i><span class="menu-title" data-i18n="">NOMINA</span></a>
                    <ul class="menu-content">
                            <li><a class="menu-item" href="{{route('payrollCreate')}}"><i></i><span data-i18n="nav.dash.ecommerce">REGISTRAR NOMINA</span></a>
                            </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="{{route('self-assessmentCreate')}}"><i class="ft-user-minus"></i><span class="menu-title" data-i18n="">AUTOLIQUIDACION</span></a>
                </li>
                <li class=" nav-item"><a href="../hospital-menu-template"><i class="ft-settings"></i><span class="menu-title" data-i18n="">CONFIGURACIONES</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="dashboard-ecommerce.html"><i></i><span data-i18n="nav.dash.ecommerce">SUCURSALES</span></a>   
                            <ul class="menu-content">
                                    <li><a class="menu-item" href="{{route('sucursalCreate')}}"><i></i><span data-i18n="nav.dash.ecommerce">CREAR SUCURSAL</span></a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('sucursallist')}}"><i></i><span data-i18n="nav.dash.ecommerce">LISTA SUCURSALES</span></a>
                                    </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="dashboard-crypto.html"><i></i><span data-i18n="nav.dash.crypto">NOVEDADES</span></a>                        
                            <ul class="menu-content">
                                    <li><a class="menu-item" href="{{route('noveltyCreate')}}"><i></i><span data-i18n="nav.dash.ecommerce">CREAR NOVEDADES</span></a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('noveltylist')}}"><i></i><span data-i18n="nav.dash.ecommerce">LISTA NOVEDADES</span></a>
                                    </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="dashboard-crypto.html"><i></i><span data-i18n="nav.dash.crypto">LISTADO EMPLEADOS</span></a>
                        </li>
                        <li><a class="menu-item"><i></i><span data-i18n="nav.dash.crypto">USUARIOS</span></a>
                            <ul class="menu-content">
                                    <li><a class="menu-item" href="{{route('userCreate')}}"><i></i><span data-i18n="nav.dash.ecommerce">CREAR USUARIOS</span></a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('userlist')}}"><i></i><span data-i18n="nav.dash.crypto">LISTA  USUARIOS</span></a>
                                    </li>
                            </ul>
                        </li>
                        <li><a class="menu-item"><i></i><span data-i18n="nav.dash.crypto">ROLES</span></a>
                        </li>
                    </ul>
                </li>  
                </li>  
            </ul>
        </div>
    </div>