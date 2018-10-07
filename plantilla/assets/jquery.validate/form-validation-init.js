
/**
* Theme: Moltran Admin Template
* Author: Coderthemes
* Form Validator
*/

!function($) {
    "use strict";

    var FormValidator = function() {
        //this could be any form, for example we are specifying the comment form
        this.$FormNuevoCliente = $("#FormNuevoCliente");
        this.$FormNuevoClienteEmpleado = $("#FormNuevoClienteEmpleado");
        this.$FormNuevoClienteEmpresario = $("#FormNuevoClienteEmpresario");

        this.$FormEditarCliente = $("#FormEditarCliente");
        this.$FormEditarClienteEmpleado = $("#FormEditarClienteEmpleado");
        this.$FormEditarClienteEmpresario = $("#FormEditarClienteEmpresario");
    };

    //init
    FormValidator.prototype.init = function() {
        //validator plugin
        // $.validator.setDefaults({
        //     submitHandler: function() { alert("submitted!"); }
        // });

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
    },
    //init
    $.FormValidator = new FormValidator, $.FormValidator.Constructor = FormValidator
}(window.jQuery),

//initializing 
function($) {
    "use strict";
    $.FormValidator.init()
}(window.jQuery);