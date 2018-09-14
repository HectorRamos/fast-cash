    <body class="nicescroll">

            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                       <span class="margin-logo">
                       <a href="#" class="logo"><i><img src="<?= base_url() ?>plantilla/images/fc_logo.png" width="48" alt="Logo"></i> <span><img src="<?= base_url() ?>plantilla/images/fast_cash.png" width="120" alt="Logo"></span></a>
                        </span>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->
            <div class="container wrapper-page">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="panel panel-color panel-primary panel-pages">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div align="center" class="mar-logo-login"> 
                                            <img src="<?= base_url() ?>plantilla/images/fc.png" class="img-responsive img-thumbnail imgwrapper" alt="Logo">
                                            <style type="text/css">
                                                .imgwrapper {
                                                    border: none;
                                                }
                                            </style>
                                            <!-- <h3 id="messageLabelrespon">Te da la Bienveniada!</h3> -->
                                            <h4 id="messageLabel"></h4>
                                        </div> 
                                    </div>
                                    <div class="col-sm-6 bordr-right">
                                        <form action="<?= base_url() ?>Home/main">

                                            <h3 class="h3-title-login"> <label class="label-title-login">Iniciar sesión</label> </h3>

                                            <div class="row m-t-40">
                                                <div class="col-md-12">
                                                    <div class="form-group ">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-user fa-lg"></i></span>
                                                            <input class="form-control input-lg " type="text" required="" placeholder="Usuario">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-lock fa-lg"></i></span>
                                                            <input class="form-control input-lg" type="password" required="" placeholder="Contraseña">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group text-center m-t-30">
                                                <div class="col-xs-12">
                                                    <button class="btn btn-default btn-lg w-lg waves-effect waves-light" type="submit"><i class="fa fa-sign-in fa-lg"></i> <b>ENTRAR</b></button>
                                                </div>
                                            </div>
                                        </form> 
                                    </div>
                                </div>
                            </div>                                 
                            <img src="<?= base_url() ?>plantilla/images/pie.png" class="img-responsive pie-login" alt="Logo">
                        </div>
                    </div>
                </div>
            </div>
	