function sendData(){

let nombre = document.getElementById("txtNombre").value;
let apellido = document.getElementById("txtApellido").value;
let telefono = document.getElementById("txtTelefono").value;
let correo = document.getElementById("txtGmail").value;
let contrasena = document.getElementById("txtPass").value;
let Ccontrasena = document.getElementById("txtCpass").value;

if (contrasena === Ccontrasena) {
    $.ajax({
        data: {
            NOMBRES: nombre,
            APELLIDOS: apellido,
            TELEFONO: telefono,
            GMAIL: correo,
            PASSWORD: contrasena,
        },
        url: "validar.php",
        type: "post",
        success: function (response) {
            alert(response);

            window.location.href = "login.html";

           /*  if (response === "USUARIO REGISTRADO") {
                window.location.href = "../index.html";
            } */
        }
    });
} else {
    alert('contraseñas no coinciden')
    form.PASSWORD.focus();
}

}

function cancelar(){
window.location.href = "./login.php";
}
