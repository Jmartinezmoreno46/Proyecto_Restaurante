var tablaplato;
 

function init() {

    mostrarelformulario(false);
    listarP();
    
    $("#formularioplato").on("submit", function (e) { 
        guardaryeditarP(e);
    })
    
    limpiar();

    $("#imagenmuestra").hide();


}



function limpiar() {

	$("#nombrep").val("");
	$("#descripcionp").val("");
	$("#preciop").val("");
    $("#imagenmuestra").attr("src","");
	$("#imagenactual").val("");
	$("#idplat").val("");
    
}

function mostrarelformulario(x) {

    limpiar();

    if (x) {
        $("#listadoregistros").hide();
        $("#formularioregistros").show();
        $("#btnGuardarPlato").prop("disabled", false);
        $("#btnagregar").hide();
   
    } else {
        $("#listadoregistros").show();
		$("#formularioregistros").hide();
		$("#btnagregar").show();
    
    }

}



function cancelarformulario() {

    limpiar();
    mostrarelformulario(false);
    
}


function listarP() {

    tablaplato = $('#tablalistadoplato').dataTable(
        
        {

        "aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
            dom: 'Bfrtip',//Definimos los elementos del control de tabla
        
               buttons: [		          
		            'copyHtml5',
		            'excelHtml5',
		            'csvHtml5',
		            'pdf'
            ],
               

            "ajax":
				{
					url: 'vistas/ajax/plato.php?op=listar',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
            },

        "bDestroy": true,
		"iDisplayLength": 5,//Paginación
	    "order": [[ 0, "desc" ]]//Ordenar (columna,orden)   
    }).DataTable();
    
}


function guardaryeditarP(e) {
    e.preventDefault(); //No se activará la acción predeterminada del evento
    $("#btnGuardarPlato").prop("disabled", true);
    var formData = new FormData($("#formularioplato")[0]);

       // console.log("Valor de idplato:", formData.get("idplat"));
    	$.ajax({
		url: "vistas/ajax/plato.php?op=guardaryeditar",
	    type: "POST", 
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
	          bootbox.alert(datos);	          
	          mostrarelformulario(false);
	          tablaplato.ajax.reload();
	    }

        });
    
    limpiar();

}


function mostrarP(idplato) {
   

    $.post("vistas/ajax/plato.php?op=mostrar", {Id_P: idplato }, function (data, status)
        
    {
        data = JSON.parse(data);
        mostrarelformulario(true);

        //$('#idcategoria').selectpicker('refresh');
        $("#idplat").val(data.Id_P);
        $("#nombrep").val(data.Nombre_P);
        $("#descripcionp").val(data.Descripcion_P);
		$("#preciop").val(data.Precio_P);
        $("#imagenmuestra").show();
		$("#imagenmuestra").attr("src","./vistas/files/platos/"+data.imagen);
		$("#imagenactual").val(data.imagen);
        })
    
}


function eliminarP(idplato) {
    bootbox.confirm("¿Está Seguro de eliminar el plato?", function (result) {
        if (result) {
            $.post("vistas/ajax/plato.php?op=eliminar", {Id_P : idplato}, function(e){
        		bootbox.alert(e);
	            tablaplato.ajax.reload();
        	});	
            

        }

     })

}



init();