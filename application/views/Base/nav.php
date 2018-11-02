            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <span class="margin-logo">
                       <a href="<?= base_url() ?>Home/Main" class="logo"><i><img src="<?= base_url() ?>plantilla/images/fc_logo.png" width="48" alt="Logo"></i> <span><img src="<?= base_url() ?>plantilla/images/fast_cash.png" width="120" alt="Logo"></span></a>
                        </span>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i data-original="ion-navicon-round" class="ion-navicon-round"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                                </li>
                                <li class="hidden-xs">
                                    <div class="margen_nombe_nav">
                                        <div class="nombre_nav">
                                            <?php echo $this->session->userdata("nombre")." ".$this->session->userdata("apellido");?>
                                        </div>
                                        <div class="tipo_nav">
                                            <?php echo $this->session->userdata("tipoAcceso");?>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="<?= base_url() ?>plantilla/images/user.png" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url();?>Home/loginOut"><i class="fa fa-power-off fa-lg"></i> Cerrar Sesión</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details oculto_margen_nombe_nav1">
                        <div class="pull-left margen_nombe_nav1">
                            <div class="nombre_nav1">
                                <?php echo $this->session->userdata("nombre")." ".$this->session->userdata("apellido");?>
                            </div>
                            <div class="tipo_nav1">
                                <?php echo $this->session->userdata("tipoAcceso");?>
                            </div>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="<?= base_url() ?>Home/Main" class="waves-effect active"><i class="fa fa-home fa-lg"></i><span> Inicio</span></a>
                            </li>
                             <li>
                                <a href="<?= base_url() ?>Documentos/ViewInsertarDocumento" class="waves-effect active"><i class="fa fa-home fa-lg"></i><span> Documentos</span></a>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fa fa-user-o fa-lg"></i><span>Clientes</span><span class="pull-right"><i class="md  md-keyboard-arrow-down"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?= base_url() ?>Clientes/">Agregar nuevo cliente</a></li>
                                    <li><a href="<?= base_url() ?>Clientes/gestionarCliente">Gestionar información de clientes</a></li>
                                </ul>
                            </li>

                             <!--Agregando nuevos item pertenecientes al modulo de solicitud-->
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-book"></i><span>Solicitud</span><span class="pull-right"><i class="md  md-keyboard-arrow-down"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?= base_url() ?>Solicitud/">Ver Solicitudes</a></li>
                                    <li><a href="" data-toggle="modal" data-target=".modal_opcion_solicitud">Crear solicitud</a></li>
                                    <li><a href="<?= base_url() ?>Solicitud/gestionarPlazos">Gestionar plazos</a></li>
                                </ul>
                            </li>
                            <!--Fin del modulo de solicitud-->

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fa fa-user-plus fa-lg" ></i><span>Empleados</span><span class="pull-right"><i class="md  md-keyboard-arrow-down"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?= base_url() ?>Empleados/ViewInsertarEmpleados">Agregar nuevo empleado</a></li>
                                    <li><a href="<?= base_url() ?>Empleados/Index">Gestionar Empleado</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fa fa-cog" ></i><span>Configuración</span><span class="pull-right"><i class="md  md-keyboard-arrow-down"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?= base_url() ?>EstadosSolicitud/">Gesctionar estados de la solicitud</a></li>
                                    <li><a href="<?= base_url() ?>Accesos/">Gesctionar accesos de usuarios</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End --> 

            <!--MODAL PARA ELIMINAR DATOS-->
<div class="modal fade modal_opcion_solicitud" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="mySmallModalLabel">
                        <i class="fa fa-th-large fa-lg text-success"></i>
                        Crear Solicitud
                    </h4>
                </div>
                    <div class="modal-body">
                        <div class="margn">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <a href="<?= base_url() ?>Solicitud/CrearSolicitud" title="Nuevo" data-toggle="tooltip" class="btn btn-success btn-block btn-lg waves-effect waves-light m-d-5" style="background-color: #117864; border-color: #117864;"><font style="color: #fff;"><i class="fa fa-file-text-o fa-lg"></i> Credito Popular</font></a>
                                </div>
                                <div class="form-group col-md-6">
                                    <a href="#" title="Nuevo" data-toggle="tooltip" class="btn btn-success btn-block btn-lg waves-effect waves-light m-d-5" style="background-color: #006064; border-color: #006064;"><font style="color: #fff;"><i class="fa fa-paste fa-lg"></i> Credito Falta Nombre</font></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <a href="#" title="Nuevo" data-toggle="tooltip" class="btn btn-success btn-block btn-lg waves-effect waves-light m-d-5" style="background-color: #1B4F72; border-color: #1B4F72;"><font style="color: #fff;"><i class="fa fa-list-alt fa-lg"></i> Credito Hipotecario</font></a>
                                </div>
                                <div class="form-group col-md-6">
                                    <a href="#" title="Nuevo" data-toggle="tooltip" class="btn btn-success btn-block btn-lg waves-effect waves-light m-d-5" style="background-color: #004D40; border-color: #004D40;"><font style="color: #fff;"><i class="fa fa-newspaper-o fa-lg"></i> Credito Falta Nombre</font></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div  align="center">
                        <button type="button" class="btn btn-default block waves-effect waves-light m-d-5" data-dismiss="modal"><i class="fa fa-close fa-lg"></i> Cerrar</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->