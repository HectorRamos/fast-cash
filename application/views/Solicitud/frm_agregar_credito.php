<!-- contenedor -->
<div class="content-page">
  <div class="content">
    <div class="container">
      <!-- Page-Title -->
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb pull-right">
            <li><a href="<?= base_url() ?>Home/Main">Inicio</a></li>
            <li class="active">Gestión de Solicitud de prestamo</li>
          </ol>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="table-title">
                <div class="row">
                  <div class="col-md-5">
                    <h3 class="panel-title">Crédito de prestamo</h3>                 
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-body">
              <form method="post" action="">
                <label for="">Id de la solicitud</label>
                <input type="text" value="<?= $id ?>">

                <label for="">Codigo de la solicitud</label>
                <input type="text" value="<?= $codigo ?>">

              </form>
            </div>
          </div>
        </div>
      </div> <!-- End Row -->

    </div>
  </div>
</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->