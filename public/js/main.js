var saludos = document.querySelector('.saludos');
var nombre = document.querySelector('.nombre');
var token = document.querySelector('.token');
var token = document.querySelector('#token');
saludos.style.color = "red";
nombre.addEventListener('input', function(e) {
    e.preventDefault()
    console.log(nombre.value.length);
    if (nombre.value.length === 3) {
        var form = new FormData();
        form.append("autocomplete", e.target.value);
        var xhr = new XMLHttpRequest();
        xhr.onload = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var respuesta = xhr.responseText;
                //  var array = JSON.parse(respuesta)
                //console.log(array);
                var imprime = JSON.parse(respuesta);
                nombre.value = nombre.value + imprime;
                //Object.values(array).forEach(elemento => {
                //  console.log(elemento.nombre);
                // });
            }
        };
        xhr.open("POST", "personas/dos", false);
        xhr.setRequestHeader("X-CSRF-TOKEN", token.value);
        xhr.send(form);
    }
});
nombre.addEventListener('click', function(e) {
    e.preventDefault();
    nombre.value = "";
});
onkeydown = function Enter(e) {

    if (e.which === 8)
        nombre.value = "";
}