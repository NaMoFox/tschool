/*=============================================
EDITAR ADMINISTRADORES
=============================================*/
$(".tablas").on("click", ".btnEditarAdministrador", function(){

	var idAdministrador = $(this).attr("idAdministrador");

	var datos = new FormData();
    datos.append("idAdministrador", idAdministrador);

    $.ajax({

      url:"ajax/administradores.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){
      
      	 $("#idAdministrador").val(respuesta["id"]);
	       $("#editarAdministrador").val(respuesta["nombres"]);
         $("#editarApellidos").val(respuesta["apellidos"]);
         $("#editarTipodoc").val(respuesta["tipodoc"]);
	       $("#editarDocumentoId").val(respuesta["documento"]);
         $("#editarCodigo").val(respuesta["codigo"]);
	       $("#editarEmail").val(respuesta["email"]);
	       $("#editarTelefono").val(respuesta["telefono"]);
	       $("#editarDireccion").val(respuesta["direccion"]);
           $("#editarFechaNacimiento").val(respuesta["fecha_nacimiento"]);
	  }

  	})

})

/*=============================================
ELIMINAR ADMINISTRADOR
=============================================*/
$(".tablas").on("click", ".btnEliminarAdministrador", function(){

	var idAdministrador = $(this).attr("idAdministrador");
	
	swal({
        title: '¿Está seguro de borrar el Administrador?',
        text: "¡Si no lo está puede cancelar la acción!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar administrador!'
      }).then(function(result){
        if (result.value) {
          
            window.location = "index.php?ruta=administradores&idAdministrador="+idAdministrador;
        }

  })

})