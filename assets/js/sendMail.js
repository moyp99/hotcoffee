function sendMail(event) {
  event.preventDefault();
  var tempParams = {
    from_name: document.getElementById("suscribe-mail").value,
  };

  if (tempParams.from_name != "") {
    emailjs
      .send("service_6lgxra9", "template_po33f1b", tempParams)
      .then(function (res) {
        console.log("success", res.status);
        alert('Tu suscripción se ha realizado con éxito.')
      });
  } else {
      alert('Por favor ingresa una dirección valida')
  }
}
