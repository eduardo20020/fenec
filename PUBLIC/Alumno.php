<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejemplo JavaScript con Bootstrap</title>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
  /* Estilos adicionales si los necesitas */
</style>
</head>
<body class="container">

<h1 class="mt-5">Ejemplo JavaScript con Bootstrap</h1>

<!-- Manipulación del DOM -->
<button class="btn btn-primary" onclick="cambiarColorFondo()">Cambiar Color de Fondo</button>
<ul id="lista" class="list-group mt-3">
  <li class="list-group-item">Elemento 1</li>
  <li class="list-group-item">Elemento 2</li>
  <li class="list-group-item">Elemento 3</li>
</ul>

<!-- Funciones -->
<script>
  // Función para cambiar el color de fondo del body
  function cambiarColorFondo() {
    document.body.style.backgroundColor = "lightblue";
  }
</script>

<!-- Bucles -->
<script>
  var numeros = [1, 2, 3, 4, 5];
  document.write("<p class='mt-3'>Números del 1 al 5:</p>");
  document.write("<ul class='list-group'>");
  // Bucle for para escribir los números en una lista
  for (var i = 0; i < numeros.length; i++) {
    document.write("<li class='list-group-item'>" + numeros[i] + "</li>");
  }
  document.write("</ul>");
</script>

<!-- Condicionales -->
<script>
  var dia = new Date().getDay();
  var mensaje = (dia === 0 || dia === 6) ? "¡Es fin de semana!" : "¡Es día laboral!";
  document.write("<p class='mt-3'>" + mensaje + "</p>");
</script>

<!-- Objetos -->
<script>
  var persona = {
    nombre: "Juan",
    edad: 30,
    profesion: "Desarrollador"
  };
  document.write("<p class='mt-3'>Nombre: " + persona.nombre + ", Edad: " + persona.edad + ", Profesión: " + persona.profesion + "</p>");
</script>

<!-- Arrays -->
<script>
  var frutas = ["Manzana", "Plátano", "Fresa"];
  document.write("<p class='mt-3'>Frutas:</p>");
  document.write("<ul class='list-group'>");
  // Bucle for para escribir las frutas en una lista
  for (var j = 0; j < frutas.length; j++) {
    document.write("<li class='list-group-item'>" + frutas[j] + "</li>");
  }
  document.write("</ul>");
</script>

<!-- Expresiones regulares -->
<script>
  var correo = "usuario@example.com";
  var patron = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
  var valido = patron.test(correo);
  document.write("<p class='mt-3'>Correo electrónico válido: " + valido + "</p>");
</script>

<!-- LocalStorage -->
<script>
  localStorage.setItem("visitas", 1 + (localStorage.getItem("visitas") || 0));
  document.write("<p class='mt-3'>Visitas: " + localStorage.getItem("visitas") + "</p>");
</script>

<h1 class="mt-5">Más Ejemplos JavaScript con Bootstrap</h1>

<!-- Manipulación del DOM -->
<button class="btn btn-primary" onclick="agregarElemento()">Agregar Elemento</button>
<ul id="lista" class="list-group mt-3">
  <li class="list-group-item">Elemento 1</li>
  <li class="list-group-item">Elemento 2</li>
  <li class="list-group-item">Elemento 3</li>
</ul>

<!-- Eventos -->
<div class="mt-3" onmouseover="mostrarMensaje()">Pasa el mouse aquí</div>
<form class="mt-3" onsubmit="return validarFormulario()">
  <input type="text" id="correo" class="form-control" placeholder="Correo electrónico">
  <button type="submit" class="btn btn-primary mt-3">Enviar</button>
</form>

<!-- Funciones -->
<script>
  // Función para agregar un nuevo elemento a la lista
  function agregarElemento() {
    var nuevoElemento = document.createElement("li");
    nuevoElemento.textContent = "Nuevo Elemento";
    document.getElementById("lista").appendChild(nuevoElemento);
  }

  // Función para mostrar un mensaje de alerta al pasar el mouse sobre un elemento
  function mostrarMensaje() {
    alert("¡Pasaste el mouse por encima!");
  }

  // Función para validar el formulario antes de enviarlo
  function validarFormulario() {
    var correo = document.getElementById("correo").value;
    if (!correo.includes("@")) {
      alert("Por favor ingresa un correo electrónico válido.");
      return false;
    }
    return true;
  }
</script>

<!-- Arrays -->
<script>
  var colores = ["rojo", "verde", "azul"];
  document.write("<p class='mt-3'>Colores:</p>");
  document.write("<ul class='list-group'>");
  // Utilizando forEach para escribir los colores en una lista
  colores.forEach(function(color) {
    document.write("<li class='list-group-item'>" + color + "</li>");
  });
  document.write("</ul>");
</script>

<!-- Expresiones regulares -->
<script>
  var cadena = "Hola mundo123";
  var patron = /\d+/;
  var resultado = patron.test(cadena);
  document.write("<p class='mt-3'>La cadena contiene números: " + resultado + "</p>");
</script>

<!-- Animaciones -->
<div id="caja" class="mt-3" style="width: 100px; height: 100px; background-color: red;"></div>
<button class="btn btn-primary mt-3" onclick="animarCaja()">Animar Caja</button>

<!-- Manejo de errores -->
<script>
  try {
    // Esto lanzará un error
    console.log(variableNoDefinida);
  } catch (error) {
    console.error("Ocurrió un error:", error);
  }
</script>

<script>
  // Función para animar la caja cambiando su tamaño y color
  function animarCaja() {
    var caja = document.getElementById("caja");
    caja.style.transition = "width 2s, height 2s, background-color 2s";
    caja.style.width = "200px";
    caja.style.height = "200px";
    caja.style.backgroundColor = "blue";
  }
</script>

<!-- Bootstrap JS (opcional, si necesitas funcionalidades de Bootstrap que requieran JavaScript) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
