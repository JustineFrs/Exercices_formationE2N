function valid(){
  var premiernombre = document.getElementById('premier_nombre').value;
  var deuxiemenombre = document.getElementById('deuxieme_nombre').value;
  if (isNaN (premiernombre) || isNaN (deuxiemenombre) ){
    alert("Erreur, ce n'est pas un nombre");
  }
  else {
    premiernombre = parseFloat(premiernombre);
    deuxiemenombre = parseFloat(deuxiemenombre);
    var result = premiernombre % deuxiemenombre;
    alert(result);
  }
}
