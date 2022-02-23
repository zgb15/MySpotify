// validaciones
function validarPassword(){
    let password;
    let respuestaPassword;
    let nombre;
    let respuestaNombre;
    let email;
    let respuestaEmail;
    password = document.getElementById("password").value;
    nombre = document.getElementById("name").value;
    email = document.getElementById("email").value;
    ok = true;
    if(password.length<8){ // validar password
        respuestaPassword = "Invalid password";
        alert("Invalid password");
        ok=false;
    } else {
        respuestaPassword = "Accepted";
        document.getElementById("respuestaPassword").innerText = respuestaPassword;
    }
    if(nombre.length<3 || nombre.length>20){ // validar el nombre
        respuestaNombre = "Invalid name";
        alert("Invalid name");
        ok=false;
        document.getElementById("respuestaNombre").innerText = respuestaNombre;
    }

    if(ok){
        document.getElementById('form').submit();
    }

}

// SLIDER
var slideIndex = 0;
showSlides(slideIndex);

// anterior y siguiente
function plusSlides(n) {
    showSlides(slideIndex += n);
}
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot"); // circulitos para clickar
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; // i<mySlides.length <- para que se oculte
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
}

// efecto máquina de escribir
    var i, text;
    i=0;
    text="Después, solo 9,99 €/mes. Cancela cuando quieras.";
    function escritura(){
        if(i<text.length){
            document.getElementById("text").innerText += text.charAt(i);
            i++;
            setTimeout(escritura, 70);
        }
    }
    escritura();