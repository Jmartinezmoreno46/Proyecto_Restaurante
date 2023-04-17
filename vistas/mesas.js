var tabla;

function init() {
    listar();
}

function listar() {

    tabla = $('#tablalistadomesas').dataTable(
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
					url: 'vistas/ajax/mesas.php?op=listar',
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



function disponible(idmesa) {
    bootbox.confirm("¿Está Seguro de activar la mesa?", function (result) {
        if (result) {
            $.post("vistas/ajax/mesas.php?op=disponible", {Id_Mesa : idmesa}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
            

        }

     })

}

function ocupado(idmesa) {
    bootbox.confirm("¿Está Seguro de desactivar la mesa?", function (result) {
        if (result) {
            $.post("vistas/ajax/mesas.php?op=ocupado", {Id_Mesa : idmesa}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
            

        }

     })

}

init();