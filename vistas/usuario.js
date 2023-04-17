
function guardarU() {

    var formData = new FormData($("#logueo")[0]);

       // console.log("Valor de idplato:", formData.get("idplat"));
    	$.ajax({
		url: 'ajax/usuario.php?op=verificar',
	    type: "POST", 
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                  
			
			//data =JSON.parse(data);
			
			//console.log(data);

	          bootbox.alert(datos);	          
	    },
		error: function(jqXHR, textStatus, errorThrown) {
			console.log("Error: " + errorThrown);
			console.log("Status: " + textStatus);
			console.log(jqXHR);
		}

        });

}