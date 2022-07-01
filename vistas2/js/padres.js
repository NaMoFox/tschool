/*=============================================
EDITAR ADMINISTRADORES
=============================================*/
$(".tablas").on("click", ".btnEditarPadre", function(){

	var idPadre = $(this).attr("idPadre");

	var datos = new FormData();
    datos.append("idPadre", idPadre);

    $.ajax({

      url:"ajax/padres.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){
      
      	 $("#idPadre").val(respuesta["id"]);
	       $("#editarPadre").val(respuesta["nombres"]);
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
$(".tablas").on("click", ".btnEliminarPadre", function(){

	var idPadre = $(this).attr("idPadre");
	
	swal({
        title: '¿Está seguro de borrar el Padre?',
        text: "¡Si no lo está puede cancelar la acción!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar padre!'
      }).then(function(result){
        if (result.value) {
          
            window.location = "index.php?ruta=padres&idPadre="+idPadre;
        }

  })

})