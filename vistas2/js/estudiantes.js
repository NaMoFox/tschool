/*=============================================
EDITAR ESTUDIANTES
=============================================*/
$(".tablas").on("click", ".btnEditarEstudiante", function(){

	var idEstudiante = $(this).attr("idEstudiante");

	var datos = new FormData();
    datos.append("idEstudiante", idEstudiante);

    $.ajax({

      url:"ajax/estudiantes.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){
      
      	 $("#idEstudiante").val(respuesta["id"]);
	       $("#editarEstudiante").val(respuesta["nombres"]);
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
ELIMINAR ESTUDIANTE
=============================================*/
$(".tablas").on("click", ".btnEliminarEstudiante", function(){

	var idEstudiante = $(this).attr("idEstudiante");
	
	swal({
        title: '¿Está seguro de borrar el Estudiante?',
        text: "¡Si no lo está puede cancelar la acción!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar estudiante!'
      }).then(function(result){
        if (result.value) {
          
            window.location = "index.php?ruta=estudiantes&idEstudiante="+idEstudiante;
        }

  })

})