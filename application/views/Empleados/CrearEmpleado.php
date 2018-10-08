<!-- contenedor -->
<div class="content-page">
  <div class="content">
    <div class="container">
      <!-- Page-Title -->
      <div class="row">
        <div class="col-sm-12">
          <ol class="breadcrumb pull-right">
            <li><a href="<?= base_url() ?>Home/main">Inicio</a></li>
            <li class="active">Gestión de Empleados</li>
          </ol>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="table-title">
                <div class="row">
                  <div class="col-sm-5">
                    <h3 class="panel-title">Nuevo Empleados</h3>                 
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-body">
              <form method="post" action="">
                <div class="row">
                  <div class="form-group col-sm-6">
                    <label for="txtNombre">Nombre</label>
                    <input type="text" class="form-control" name="txtNombre" id="txtNombre">
                  </div>
                   <div class="form-group col-sm-6">
                    <label for="txtApellido">Apellido</label>
                    <input type="text" class="form-control" name="txtApellido" id="txtApellido">
                  </div>                 
                </div>
                <div class="row">
                  <div class="form-group col-sm-6">
                    <label for="txtFechaNacimiento">Fecha de Nacimiento</label>
                    <input type="text" class="form-control DateTime" name="txtFechaNacimiento" id="txtFechaNacimiento" placeholder="Fecha de Nacimiento" data-mask="9999/99/99">
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="cboGenero">Genero</label>
                    <select class="form-control" name="cboGenero">
                      <option value="select">..::Selecionar::..</option>
                      <option value="Femenino">Femenino</option>
                      <option value="Masculino">Masculino</option>
                      <option value="Otros">Otro</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                   <div class="form-group col-sm-6">
                    <label for="txtDui">DUI</label>
                    <input type="text" class="form-control" name="txtDui" id="txtDui" data-mask="99999999-9">
                  </div>                  
                  <div class="form-group col-sm-6">
                    <label for="txtNit">NIT</label>
                    <input type="text" class="form-control" name="txtNit" id="txtNit" data-mask="9999-999999-999-9">
                  </div>
                </div>
                <div class="row">
                   <div class="form-group col-sm-6">
                    <label for="txtCargo">Cargo</label>
                    <input type="text" class="form-control" name="txtCargo" id="txtCargo">
                  </div>                  
                  <div class="form-group col-sm-6">
                    <label for="txtProfesion">Profesión</label>
                    <input type="text" class="form-control" name="txtProfesion" id="txtProfesion">
                  </div>
                </div>
                  <div class="row">
                   <div class="form-group col-sm-6">
                    <label for="txtTelefono">Teléfono</label>
                    <input type="text" class="form-control" name="txtTelefono" id="txtTelefono">
                  </div>                  
                  <div class="form-group col-sm-6">
                    <label for="txtEmail">Email</label>
                    <input type="email" class="form-control" name="txtEmail" id="txtEmail">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-sm-12">
                    <label for="txtDireccion">Email</label>
                    <textarea class="form-control resize" name="txtDireccion" id="txtDireccion" rows="3"></textarea>
                  </div>
                </div>
                <button type="submit" class="btn btn-success btn-lg">Guardar</button>
                <button type="reset" class="btn btn-default btn-lg">Limpiar</button>
              </form>
            </div>
          </div>
        </div>
      </div> <!-- End Row -->

    </div>
  </div>
</div>

