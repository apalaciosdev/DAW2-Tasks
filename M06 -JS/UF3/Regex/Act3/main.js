function validatePass(campo) {
  var RegExPattern = /^([a-z+\d+.+\-+\/]{1,64})+(@)+(.{1,255})+[^.]$/; 
  var errorMessage = 'Mail Incorrecto.';
  if ((campo.value.match(RegExPattern)) && (campo.value!='')) {
      alert('Mail Correcto'); 
  } else {
      alert(errorMessage);
      campo.focus();
  } 
}