function sendData(){
    $.ajax({
      data:{
      EMAIL:document.getElementById("EMAIL").value,
      PASSWORD:document.getElementById("PASSWORD").value
 
  },
  url: "https://ejemplo.com/",
  type: "post",
 
  success: function(Response){
   
      if(Response=="ACCESO"){
      window.location.href ="http://192.168.64.2/PS2562335/REDSocial/Principal.html";
      alert("no encontrado")
     
      }
  else{
 
  }
  }
  });
  }