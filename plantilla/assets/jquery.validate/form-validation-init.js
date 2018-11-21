
!function($) {
    "use strict";

    var FormValidator = function() {
        //####################### FORMULARIO DE CLIENTE #######################
        this.$FormCliente = $("#basic-form");
        this.$FormClienteEmpleado = $("#DLaborales");
        this.$FormClienteEmpresario = $("#DNegocio");
        this.$FormClienteEmpleadoRe = $("#DLaboralesRe");
        this.$FormClienteEmpresarioRe = $("#DNegocioRe");
        //##################### FIN FORMULARIO DE CLIENTE #####################

        //####################### FORMULARIO DE PLAZOS #######################
        this.$FormNuevoPlazo = $("#FormNuevoPlazo");
        this.$FormEditarPlazo = $("#FormEditarPlazo");
        //##################### FIN FORMULARIO DE PLAZOS #####################

        //####################### FORMULARIO DE GESTION DE ESTADO DE SOLICITUD #######################
        this.$FormNuevoEstadoSolicitud = $("#FormNuevoEstadoSolicitud");
        this.$FormEditarEstadoSolicitud = $("#FormEditarEstadoSolicitud");
        //##################### FIN FORMULARIO DE GESTION DE ESTADO DE SOLICITUD #####################

        //####################### FORMULARIO DE GESTION DE ACCESO AL SISTEMA #######################
        this.$FormNuevoAccesoSistema = $("#FormNuevoAccesoSistema");
        this.$FormEditarAccesoSistema = $("#FormEditarAccesoSistema");
        //##################### FIN FORMULARIO DE GESTION DE ACCESO AL SISTEMA #####################

        //####################### FORMULARIO DE GESTION DE EMPLEADOS #######################
        this.$FormNuevoEmpleado = $("#FormNuevoEmpleado");
        this.$FormEditarEmpleado = $("#FormEditarEmpleado");
        //##################### FIN FORMULARIO DE GESTION DE EMPLEADOS #####################
    };

    //init
    FormValidator.prototype.init = function() {
        //####################### FORMULARIO DE CLIENTE #######################
        // VALIDACION DE FORMULARIO NUEVO CLIENTE
        this.$FormCliente.validate({
            rules: {
                Ingreso_Mensual: "required",
                Codigo_Cliente: "required",
                Nombre_Cliente: "required",
                Apellido_Cliente: "required",
                Dui_Cliente: "required",
                Fecha_Nacimiento: "required",                
                Celular_Cliente: "required",
                Email: { email: true },
                cbbDepartamentos: "required",
                cbbMunicipios: "required", 
                Profesion_Cliente: "required",
            },
            messages: {
                Ingreso_Mensual: "",                
                Codigo_Cliente: "",                
                Nombre_Cliente: "",                
                Apellido_Cliente: "",
                Dui_Cliente: "",
                Fecha_Nacimiento: "",                
                Celular_Cliente: "",
                Email: "Por favor, escriba el email del cliente correctamente",
                cbbDepartamentos: "",
                cbbMunicipios: "",
                Domicilio_Cliente: "",
            },
            highlight: function(element) { $(element).closest('.form-group').addClass('has-error'); },
            unhighlight: function(element) { $(element).closest('.form-group').removeClass('has-error'); }
        });

        // VALIDACION DE FORMULARIO NUEVO CLIENTE EMPLEADO
        this.$FormClienteEmpleado.validate({
            rules: {
                Nombre_Empresa: "required",
                Telefono: "required",
                Direccion: "required",
            },
            messages: {
                Nombre_Empresa: "",
                Telefono: "",
                Direccion: "",
            },
            highlight: function(element) { $(element).closest('.form-group').addClass('has-error'); },
            unhighlight: function(element) { $(element).closest('.form-group').removeClass('has-error'); }
        });

        // VALIDACION DE FORMULARIO NUEVO CLIENTE EMPRESARIO
        this.$FormClienteEmpresario.validate({
            rules: {
                Nombre_Negocio: "required",
                NRC: "required",
                Direccion_Negocio: "required",
            },
            messages: {
                Nombre_Negocio: "",
                NRC: "",
                Direccion_Negocio: "",
            },
            highlight: function(element) { $(element).closest('.form-group').addClass('has-error'); },
            unhighlight: function(element) { $(element).closest('.form-group').removeClass('has-error'); }
        });
                // VALIDACION DE FORMULARIO NUEVO CLIENTE EMPLEADO
        this.$FormClienteEmpleadoRe.validate({
            rules: {
                Nombre_Empresa: "required",
                Telefono: "required",
                Direccion: "required",
            },
            messages: {
                Nombre_Empresa: "Por favor, escriba el nombre de la empresa",
                Telefono: "Por favor, digite un teléfono",
                Direccion: "Por favor, escriba una dirección",
            },
            highlight: function(element) { $(element).closest('.form-group').addClass('has-error'); },
            unhighlight: function(element) { $(element).closest('.form-group').removeClass('has-error'); }
        });

        // VALIDACION DE FORMULARIO NUEVO CLIENTE EMPRESARIO
        this.$FormClienteEmpresarioRe.validate({
            rules: {
                Nombre_Negocio: "required",
                NRC: "required",
                Direccion_Negocio: "required",
            },
            messages: {
                Nombre_Negocio: "Por favor, escriba un nombre",
                NRC: "Por favor, digite un número NRC",
                Direccion_Negocio: "Por favor, escriba una dirección",
            },
            highlight: function(element) { $(element).closest('.form-group').addClass('has-error'); },
            unhighlight: function(element) { $(element).closest('.form-group').removeClass('has-error'); }
        });
        //##################### FIN FORMULARIO DE CLIENTE #####################

        //####################### FORMULARIO DE PLAZOS #######################
        // VALIDACION DE FORMULARIO NUEVO PLAZO
        this.$FormNuevoPlazo.validate({
            rules: {
                tiempo_plazo: "required",
            },
            messages: {
                tiempo_plazo: "Por favor, digite un tiempo de plazo",
            },
            highlight: function(element) { $(element).closest('.form-group').addClass('has-error'); },
            unhighlight: function(element) { $(element).closest('.form-group').removeClass('has-error'); }
        });

        // VALIDACION DE FORMULARIO EDITAR PLAZO
        this.$FormEditarPlazo.validate({
            rules: {
                tiempo_plazo: "required",
            },
            messages: {
                tiempo_plazo: "Por favor, digite un tiempo de plazo",
            },
            highlight: function(element) { $(element).closest('.form-group').addClass('has-error'); },
            unhighlight: function(element) { $(element).closest('.form-group').removeClass('has-error'); }
        });
        //##################### FIN FORMULARIO DE PLAZOS #####################

        //####################### FORMULARIO GESTION DE ESTADO DE SOLICITUD #######################
        // VALIDACION DE FORMULARIO NUEVO ESTADO DE SOLICITUD
        this.$FormNuevoEstadoSolicitud.validate({
            rules: {
                nombreEstado: "required",
            },
            messages: {
                nombreEstado: "Por favor, escriba un nombre del estado de solicitud",
            },
            highlight: function(element) { $(element).closest('.form-group').addClass('has-error'); },
            unhighlight: function(element) { $(element).closest('.form-group').removeClass('has-error'); }
        });

        // VALIDACION DE FORMULARIO EDITAR ESTADO DE SOLICITUD
        this.$FormEditarEstadoSolicitud.validate({
            rules: {
                nombreEstado: "required",
            },
            messages: {
                nombreEstado: "Por favor, escriba un nombre del estado de solicitud",
            },
            highlight: function(element) { $(element).closest('.form-group').addClass('has-error'); },
            unhighlight: function(element) { $(element).closest('.form-group').removeClass('has-error'); }
        });
        //##################### FIN FORMULARIO GESTION DE ESTADO DE SOLICITUD #####################

        //####################### FORMULARIO GESTION DE ACCESO AL SISTEMA #######################
        // VALIDACION DE FORMULARIO NUEVO ACCESO AL SISTEMA
        this.$FormNuevoAccesoSistema.validate({
            rules: {
                tipoAcceso: "required",
            },
            messages: {
                tipoAcceso: "Por favor, escriba un nombre de acceso",
            },
            highlight: function(element) { $(element).closest('.form-group').addClass('has-error'); },
            unhighlight: function(element) { $(element).closest('.form-group').removeClass('has-error'); }
        });

        // VALIDACION DE FORMULARIO EDITAR ACCESO AL SISTEMA
        this.$FormEditarAccesoSistema.validate({
            rules: {
                tipoAcceso: "required",
            },
            messages: {
                tipoAcceso: "Por favor, escriba un nombre de acceso",
            },
            highlight: function(element) { $(element).closest('.form-group').addClass('has-error'); },
            unhighlight: function(element) { $(element).closest('.form-group').removeClass('has-error'); }
        });
        //##################### FIN FORMULARIO GESTION DE ACCESO AL SISTEMA #####################

        //####################### FORMULARIO GESTION DE EMPLEADOS AL SISTEMA #######################
        // VALIDACION DE FORMULARIO NUEVO EMPLEADO AL SISTEMA
        this.$FormNuevoEmpleado.validate({
            rules: {
                txtNombre: "required",
                txtApellido: "required",
                txtFechaNacimiento: "required",
                cboGenero: "required",
                txtDui: "required",
                txtCargo: "required",
                txtTelefono: "required",
                txtEmail: { email: true },
                txtDireccion: "required",
            },
            messages: {
                txtNombre: "Por favor, escriba el nombre del empleado",
                txtApellido: "Por favor, escriba el apellido del empleado",
                txtFechaNacimiento: "Por favor, digite la fecha de nacimiento del empleado",
                cboGenero: "Por favor, seleccione un genero del empleado",
                txtDui: "Por favor, digite el número de dui del empleado",
                txtCargo: "Por favor, escriba el cargo del empleado",
                txtTelefono: "Por favor, digite el número de teléfono del empleado",
                txtEmail: "Por favor, escriba el email del empleado correctamente",
                txtDireccion: "Por favor, escriba la dirección del empleado",
            },
            highlight: function(element) { $(element).closest('.form-group').addClass('has-error'); },
            unhighlight: function(element) { $(element).closest('.form-group').removeClass('has-error'); }
        });

        // VALIDACION DE FORMULARIO EDITAR EMPLEADO AL SISTEMA
        this.$FormEditarEmpleado.validate({
            rules: {
                txtNombre: "required",
                txtApellido: "required",
                txtFechaNacimiento: "required",
                cboGenero: "required",
                txtDui: "required",
                txtCargo: "required",
                txtTelefono: "required",
                txtEmail: { email: true },
                txtDireccion: "required",
            },
            messages: {
                txtNombre: "Por favor, escriba el nombre del empleado",
                txtApellido: "Por favor, escriba el apellido del empleado",
                txtFechaNacimiento: "Por favor, digite la fecha de nacimiento del empleado",
                cboGenero: "Por favor, seleccione un genero del empleado",
                txtDui: "Por favor, digite el número de dui del empleado",
                txtCargo: "Por favor, escriba el cargo del empleado",
                txtTelefono: "Por favor, digite el número de teléfono del empleado",
                txtEmail: "Por favor, escriba el email del empleado correctamente",
                txtDireccion: "Por favor, escriba la dirección del empleado",
            },
            highlight: function(element) { $(element).closest('.form-group').addClass('has-error'); },
            unhighlight: function(element) { $(element).closest('.form-group').removeClass('has-error'); }
        });
        //##################### FIN FORMULARIO GESTION DE EMPLEADOS AL SISTEMA #####################

    },
    //init
    $.FormValidator = new FormValidator, $.FormValidator.Constructor = FormValidator
}(window.jQuery),

//initializing 
function($) {
    "use strict";
    $.FormValidator.init()
}(window.jQuery);