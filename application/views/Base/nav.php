            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <span class="margin-logo">
                       <a href="<?= base_url() ?>Home/main" class="logo"><i><img src="<?= base_url() ?>plantilla/images/fc_logo.png" width="48" alt="Logo"></i> <span><img src="<?= base_url() ?>plantilla/images/fast_cash.png" width="120" alt="Logo"></span></a>
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
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="<?= base_url() ?>plantilla/images/user.png" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">

                                        <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile</a></li>

                                        <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                        <li><a href="<?php echo base_url();?>Home/loginOut"><i class="md md-settings-power"></i> Cerrar Sesion</a></li>

                                        <li><a href="javascript:void(0)"><i class="md md-settings-power"></i> Logout</a></li>

                                        <li><a href="<?php echo base_url();?>Home/loginOut"><i class="md md-settings-power"></i> Cerrar Sesión</a></li>

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
                    <div class="user-details">
                        <div class="pull-left">
                            <img src="<?= base_url() ?>plantilla/images/user.png" alt="" class="thumb-md img-circle">
                        </div>

                        <div class="user-info">
                            <div class="dropdown">


                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php echo $this->session->userdata("nombre")." ".$this->session->userdata("apellido");?><span class="caret"></span></a>

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">User Name<span class="caret"></span></a>

                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings-power"></i> Logout</a></li>

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php echo $this->session->userdata("nombre")." ".$this->session->userdata("apellido");?><span class="caret"></span></a>

                                </ul>
                            </div>
                            
                            <p class="text-muted m-0"><?php echo $this->session->userdata("tipoAcceso");?></p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="<?= base_url() ?>Home/main" class="waves-effect active"><i class="fa fa-home fa-lg"></i><span> Inicio</span></a>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fa fa-user-o fa-lg"></i><span> Clientes </span><span class="pull-right"><i class="md  md-keyboard-arrow-down"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?= base_url() ?>Clientes/">Agregar nuevo cliente</a></li>
                                    <li><a href="<?= base_url() ?>Clientes/gestionarCliente">Gestionar informacion de clientes</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fa fa-cog" ></i><span> Configuracion </span><span class="pull-right"><i class="md  md-keyboard-arrow-down"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?= base_url() ?>EstadosSolicitud/">Gesctionar estados de la solicitud</a></li>
                                </ul>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End --> 