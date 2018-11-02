<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
		<div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">Nuevo cliente</h3> 
                        </div> 
                        <div class="panel-body">
                        <div class="wizard">
                        <div class="col-md-12">
                         <div role="tabpanel">
                         <form action="/" method="post" class="dropzone" enctype="multipart/form-data" id="dropzone">
                         	<div class="fallback">
                         		<input type="file" name="file">
                         		
                         	</div>
                         	<input hidden type="text" name="codigo" id="codigo" value="11111">
                         	<div class="dz-default dz-message">
                         
                         		<h3>subir documentos</h3>
                         		<p>Arrastre los archivos hasta la zona indicada o click aqui para abrir la ventana de subida</p>
                         	</div>
                         </form>

                         
                        </div>
                        	</div>
                        </div>
                       
                        </div>
                    </div>
                </div>
               </div>
               </div>
               </div>
               </div>
<script type="text/javascript">
	$(document).ready(function()
	{
		Dropzone.options.dropzone = {
			url:"<?= base_url()?>Documentos/SubirDocumentos",
			acceptedFiles : ".doc, .docx, .pdf",
			maxFilesize: 2,
			maxFiles:2,
			init:function(){
		      var self = this;
		      // config
		      self.options.addRemoveLinks = true;
		      self.options.dictRemoveFile = "Quitar";
		      self.options.dictInvalidFileType="Tipo de documento invalido";
		      self.options.dictFileTooBig="Tamaño del archivo no permito el tamaño maximo es de 2 MB";

		      //New file added
		      self.on("addedfile", function (file) {
		        console.log('new file added ', file);
		      });
		       // Send file starts
		      self.on("sending", function (file) {
		        console.log('upload started', file);
		        $('.meter').show();
		      });
		      self.on("error", function(file){
		      	alert("Error subiendo el archivo " + file.name);
		      	//removeFIle(file);

		      });
		  }
		}
		
	});
</script>

