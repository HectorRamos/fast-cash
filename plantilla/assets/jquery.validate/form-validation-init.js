
!function($) {
    "use strict";

    var FormValidator = function() {
        //####################### FORMULARIO DE CLIENTE #######################
        this.$FormNuevoCliente = $("#FormNuevoCliente");
        this.$FormNuevoClienteEmpleado = $("#FormNuevoClienteEmpleado");
        this.$FormNuevoClienteEmpresario = $("#FormNuevoClienteEmpresario");

        this.$FormEditarCliente = $("#FormEditarCliente");
        this.$FormEditarClienteEmpleado = $("#FormEditarClienteEmpleado");
        this.$FormEditarClienteEmpresario = $("#FormEditarClienteEmpresario");
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
        this.$FormNuevoCliente.validate({
            rules: {
                Nombre_Cliente: "required",
                Apellido_Cliente: "required",
                cbbDepartamentos: { required: true },
                cbbMunicipios: { required: true },
                Celular_Cliente: { required: true },
                Fecha_Nacimiento: { required: true },                
                Dui_Cliente: { required: true },
                Fecha_Registro: { required: true }, 
                Profesion_Cliente: "required",
            },
            messages: {
                Nombre_Cliente: "Por favor, escriba un nombre",                
                Apellido_Cliente: "Por favor, escriba un apellido",
                cbbDepartamentos: { required: "Por favor, seleccione un Departamento" },
                cbbMunicipios: { required: "Por favor, seleccione un Municipio" },
                Celular_Cliente: { required: "Por favor, digite un número de teléfono celular" },
                Fecha_Nacimiento: { required: "Por favor, seleccione una fecha de nacimiento" },                
                Dui_Cliente: { required: "Por favor, digite un número de dui" },
                Fecha_Registro: { required: "Por favor, seleccione una fecha de registro" }, 
                Profesion_Cliente: "Por favor, escriba una profesión",
            },
            highlight: function(element) { $(element).closest('.form-group').addClass('has-error'); },
            unhighlight: function(element) { $(element).closest('.form-group').removeClass('has-error'); }
        });

        // VALIDACION DE FORMULARIO NUEVO CLIENTE EMPLEADO
        this.$FormNuevoClienteEmpleado.validate({
            rules: {
                Nombre_Negocio: "required",
                NIT: { required: true },                
                NRC: { required: true },
                Giro: "required",
                Direccion_Negocio: "required",
                Ingreso_Mensual: { required: true },
                Tipo_Factura: "required",
            },
            messages: {
                Nombre_Negocio: "Por favor, escriba el nombre de la empresa",
                NIT: { required: "Por favor, digite un número de nit" },                
                NRC: { required: "Por favor, digite un número de nrc" },
                Giro: "Por favor, digite un giro",
                Direccion_Negocio: "Por favor, escriba una dirección del negocio",
                Ingreso_Mensual: { required: "Por favor, digite una cantidad de ingreso mensual" },
                Tipo_Factura: "Por favor, escriba el tipo de factura",
            },
            highlight: function(element) { $(element).closest('.form-group').addClass('has-error'); },
            unhighlight: function(element) { $(element).closest('.form-group').removeClass('has-error'); }
        });

        // VALIDACION DE FORMULARIO NUEVO CLIENTE EMPRESARIO
        this.$FormNuevoClienteEmpresario.validate({
            rules: {
                Nombre_Empresa: "required",
                Cargo: "required",
                Direccion: "required",
                Telefono: { required: true },
                Rubro: "required",
                Ingreso_Mensual: { required: true },
            },
            messages: {
                Nombre_Empresa: "Por favor, escriba el nombre de la empresa",
                Cargo: "Por favor, escriba el cargo que tiene en la empresa",
                Direccion: "Por favor, escriba una dirección de la empresa",
                Telefono: { required: "Por favor, digite un número de teléfono" },
                Rubro: "Por favor, escriba el tipo de rubro de la empresa",
                Ingreso_Mensual: { required: "Por favor, digite una cantidad de ingreso mensual" },
            },
            highlight: function(element) { $(element).closest('.form-group').addClass('has-error'); },
            unhighlight: function(element) { $(element).closest('.form-group').removeClass('has-error'); }
        });

        // VALIDACION DE FORMULARIO EDITAR CLIENTE
        this.$FormEditarCliente.validate({
            rules: {
                Nombre_Cliente: "required",
                Apellido_Cliente: "required",
                cbbDepartamentos: { required: true },
                cbbMunicipios: { required: true },
                Celular_Cliente: { required: true },
                Fecha_Nacimiento: { required: true },                
                Dui_Cliente: { required: true },
                Fecha_Registro: { required: true }, 
                Profesion_Cliente: "required",
            },
            messages: {
                Nombre_Cliente: "Por favor, escriba un nombre",                
                Apellido_Cliente: "Por favor, escriba un apellido",
                cbbDepartamentos: { required: "Por favor, seleccione un Departamento" },
                cbbMunicipios: { required: "Por favor, seleccione un Municipio" },
                Celular_Cliente: { required: "Por favor, digite un número de teléfono celular" },
                Fecha_Nacimiento: { required: "Por favor, seleccione una fecha de nacimiento" },                
                Dui_Cliente: { required: "Por favor, digite un número de dui" },
                Fecha_Registro: { required: "Por favor, seleccione una fecha de registro" }, 
                Profesion_Cliente: "Por favor, escriba una profesión",
            },
            highlight: function(element) { $(element).closest('.form-group').addClass('has-error'); },
            unhighlight: function(element) { $(element).closest('.form-group').removeClass('has-error'); }
        });

        // VALIDACION DE FORMULARIO EDITAR CLIENTE EMPLEADO
        this.$FormEditarClienteEmpleado.validate({
            rules: {
                Nombre_Negocio: "required",
                NIT: { required: true },                
                NRC: { required: true },
                Giro: "required",
                Direccion_Negocio: "required",
                Ingreso_Mensual: { required: true },
                Tipo_Factura: "required",
            },
            messages: {
                Nombre_Negocio: "Por favor, escriba el nombre del negocio",
                NIT: { required: "Por favor, digite un número de nit" },                
                NRC: { required: "Por favor, digite un número de nrc" },
                Giro: "Por favor, digite un giro",
                Direccion_Negocio: "Por favor, escriba una dirección del negocio",
                Ingreso_Mensual: { required: "Por favor, digite una cantidad de ingreso mensual" },
                Tipo_Factura: "Por favor, escriba el tipo de factura",
            },
            highlight: function(element) { $(element).closest('.form-group').addClass('has-error'); },
            unhighlight: function(element) { $(element).closest('.form-group').removeClass('has-error'); }
        });

        // VALIDACION DE FORMULARIO EDITAR CLIENTE EMPRESARIO
        this.$FormEditarClienteEmpresario.validate({
            rules: {
                Nombre_Empresa: "required",
                Cargo: "required",
                Direccion: "required",
                Telefono: { required: true },
                Rubro: "required",
                Ingreso_Mensual: { required: true },
            },
            messages: {
                Nombre_Empresa: "Por favor, escriba el nombre de la empresa",
                Cargo: "Por favor, escriba el cargo que tiene en la empresa",
                Direccion: "Por favor, escriba una dirección de la empresa",
                Telefono: { required: "Por favor, digite un número de teléfono" },
                Rubro: "Por favor, escriba el tipo de rubro de la empresa",
                Ingreso_Mensual: { required: "Por favor, digite una cantidad de ingreso mensual" },
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
                estado: "required",
            },
            messages: {
                estado: "Por favor, escriba el nombre del estado de solicitud",
            },
            highlight: function(element) { $(element).closest('.form-group').addClass('has-error'); },
            unhighlight: function(element) { $(element).closest('.form-group').removeClass('has-error'); }
        });

        // VALIDACION DE FORMULARIO EDITAR ESTADO DE SOLICITUD
        this.$FormEditarEstadoSolicitud.validate({
            rules: {
                estado: "required",
            },
            messages: {
                estado: "Por favor, escriba el nombre del estado de solicitud",
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
                descripcion: "required",
            },
            messages: {
                tipoAcceso: "Por favor, escriba el nombre de tipo de acceso",
                descripcion: "Por favor, escriba una descripción",
            },
            highlight: function(element) { $(element).closest('.form-group').addClass('has-error'); },
            unhighlight: function(element) { $(element).closest('.form-group').removeClass('has-error'); }
        });

        // VALIDACION DE FORMULARIO EDITAR ACCESO AL SISTEMA
        this.$FormEditarAccesoSistema.validate({
            rules: {
                tipoAcceso: "required",
                descripcion: "required",
            },
            messages: {
                tipoAcceso: "Por favor, escriba el nombre de tipo de acceso",
                descripcion: "Por favor, escriba una descripción",
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
                txtProfesion: "required",
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
                txtProfesion: "Por favor, escriba la profesión del empleado",
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
                txtProfesion: "required",
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
                txtProfesion: "Por favor, escriba la profesión del empleado",
                txtTelefono: "Por favor, digite el número de teléfono del empleado",
                txtEmail: "Por favor, escriba el email del empleado",
                txtDireccion: "Por favor, escriba la dirección del empleado correctamente",
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