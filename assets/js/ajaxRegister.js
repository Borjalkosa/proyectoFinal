function insert() {

    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var user = document.getElementById("username").value;
    var id_localidad = document.getElementById("id_localidad").value;
    var pass = document.getElementById("password").value;

    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      if (ajax.responseText == "REGOK") {
        alert("Has iniciado sesión");
        window.open('../../proyectoFinal/admin-panel/addElements.html',"_self")
      }else{
        alert("No se ha podido registrar el usuario");
      }
    }
  };
  ajax.open("POST", "../../proyectoFinal/php/forms/register.php", true);
         let formData = new FormData();

           formData.append('name', name);
           formData.append('email', email);
           formData.append('user', user);
           formData.append('id_localidad', id_localidad);
           formData.append('pass', pass);
         
          ajax.send(formData);
}
     