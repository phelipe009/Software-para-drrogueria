(function () {
    emailjs.init("user_Jcr42DwA5H5RNRJTEuU2E");
})();

var myform = $("form#contactar");

myform.submit( (event) => {
    event.preventDefault();

    // Change to your service ID, or keep using the default service
    var service_id = "default_service";
    var template_id = "template_3c945ci";

    const cargandoGif = document.querySelector('#cargando');
    cargandoGif.style.display = 'block';

    const enviado = document.createElement('img');
    enviado.src = 'img/mail.gif';
    enviado.style.display = 'block';
    enviado.width = '150';

    emailjs.sendForm(service_id, template_id, myform[0])
        .then(() => {
            cargandoGif.style.display = 'none';
            document.querySelector('#loaders').appendChild(enviado);

            setTimeout(() => {
                compra.vaciarLocalStorage();
                enviado.remove();
                window.location = "indexp.php";
            }, 2000);


        }, (err) => {
            alert("Error al enviar el email\r\n Response:\n " + JSON.stringify(err));
            // myform.find("button").text("Send");
        });

    return false;

});