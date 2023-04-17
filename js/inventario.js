var tabla;


function init() {
   mostrarelformulario(false);

}


function editar(){
    document.getElementById('1').disabled = false;
    document.getElementById('11').disabled = false;
    document.getElementById('111').disabled = false;
    document.getElementById('1111').disabled = false;

    $("#guardarbtn").prop("disabled", false);
   // document.getElementsByTagName("thead")[2].remove();
}   

function guardar1(){
    document.getElementById('1').disabled = true;
    document.getElementById('11').disabled = true;
    document.getElementById('111').disabled = true;
    document.getElementById('1111').disabled = true; 
}

// function eliminar(){
//     document.getElementsByTagName("thead")[2].remove();
// }

// function Eliminar(i) {
//     document.getElementsByTagName("table")[0].setAttribute("id","tableid");
//     document.getElementById("tableid").deleteRow(i);
//    }

function guardar(e){
    e.preventDefault();
    let nombre = document.getElementById("nombre").value;
    let stock = document.getElementById("stock").value;
    let descripcion = document.getElementById("descripcion").value;
    let precio = document.getElementById("precio").value;
    
        $.ajax({
            data: {
                nombre: nombre,
                stock: stock,
                descripcion: descripcion,
                precio: precio,
            },
            url: "validarInventario.php",
            type: "post",
            success: function (response) {
                alert(response);
    
                mostrarelformulario(false);
    
               /*  if (response === "USUARIO REGISTRADO") {
                    window.location.href = "../index.html";
                } */
            }
        });
    }



function mostrarelformulario(x) {

    if (x) {
        
        $("#listadoregistros").hide();
        $("#formularioregistros").show();
        $("#btnGuardar").prop("disabled", false);
        $("#btnagregar").hide();
   
    } else {
        $("#listadoregistros").show();
		$("#formularioregistros").hide();
		$("#btnagregar").show();
    }

}



function cancelarformulario() {
    mostrarelformulario(false);
    
}

init();

  /* function guardar(e) {

    e.preventDefault(); //No se activará la acción predeterminada del evento
    $("#btnGuardar").prop("disabled", true);
    var formData = new FormData($("#formulario")[0]);


    	$.ajax({
		url: "../ajax/articulos.php?op=guardaryeditar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
	          bootbox.alert(datos);	          
	          mostrarelformulario(false);
	          tabla.ajax.reload();
	    }

        });
    
        var saveme =  $.ajax({
            type: "POST",
            url: "hola.php", //nombre del archivo php que consultaremos.
            dataType: "json",
            data: dataString, //Los datos enviados para la consulta
            success: function(data) {
              $.each(data, function(i, item) {
              lista = document.getElementById("myTable");
              var tr = document.createElement("tr");
              var columna1 = document.createElement("th")
              columna1.innerHTML = item.dato1;
              var columna2 = document.createElement("th")
              columna2.innerHTML = item.dato1;
              var columna3 = document.createElement("th")
              columna3.innerHTML = item.dato3;
              var columna4 = document.createElement("th")
              columna4.innerHTML = item.dato4;
              lista.appendChild(tr);
              tr.appendChild(columna1);
              tr.appendChild(columna2);
              tr.appendChild(columna3);
              tr.appendChild(columna4);
             });
            }
          });

} */

