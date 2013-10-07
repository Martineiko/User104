function validacion() {
  valor = document.getElementById("Codigo").value;
if( !(/^\d{9}$/.test(valor)) ) {
  return false;
}

  valor = document.getElementById("Nombre").value;
else if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
    alert('[ERROR] El campo debe tener un valor de...');
  return false;
}
 
   valor = document.getElementById("ApellidoP").value;
else if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
    alert('[ERROR] El campo debe tener un valor de...');
  return false;
}
  valor = document.getElementById("ApellidoM").value;
else if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
    alert('[ERROR] El campo debe tener un valor de...');
  return false;
}
  valor = document.getElementById("Carrera").value;
else if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
    alert('[ERROR] El campo debe tener un valor de...');
  return false;
}
valor = document.getElementById("Email").value;
else if( !(/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)/.test(valor)) ) {
  return false;
}
  // Si el script ha llegado a este punto, todas las condiciones
  // se han cumplido, por lo que se devuelve el valor true
  return true;
}