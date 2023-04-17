var tablareserva;

function init() {
    listarR();
}

function listarR() {

    tablareserva = $('#tablalistadoreserva').dataTable(
        {

        "aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
            dom: 'Bfrtip',//Definimos los elementos del control de tablareserva
        
               buttons: [		          
		            'copyHtml5',
		            'excelHtml5',
		            'csvHtml5',
		            'pdf'
            ],
               

            "ajax":
				{
					url: 'vistas/ajax/reserva.php?op=listarR',
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


function guardar() {

    var formData = new FormData($("#reservaform")[0]);

       // console.log("Valor de idplato:", formData.get("idplat"));
    	$.ajax({
		url: "./ajax/reserva.php?op=guardarR",
	    type: "POST", 
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
	          bootbox.alert(datos);	          
	          tablareserva.ajax.reload();
	    }

        });

}

function eliminarR(idreserva) {
    bootbox.confirm("¿Está Seguro de eliminar la reserva?", function (result) {
        if (result) {
            $.post("vistas/ajax/reserva.php?op=eliminarR", {Id_R : idreserva}, function(e){
        		bootbox.alert(e);
	            tablareserva.ajax.reload();
        	});	
            

        }

     })

}

init();