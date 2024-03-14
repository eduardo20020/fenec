<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejemplo JavaScript</title>
<style>
  body { font-family: Arial, sans-serif; }
  button { padding: 10px 20px; cursor: pointer; }
</style>
</head>
<body>

<h1>Ejemplo JavaScript</h1>

<!-- Manipulación del DOM -->
<button onclick="cambiarColorFondo()">Cambiar Color de Fondo</button>
<ul id="lista">
  <li>Elemento 1</li>
  <li>Elemento 2</li>
  <li>Elemento 3</li>
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
  document.write("<p>Números del 1 al 5:</p>");
  document.write("<ul>");
  // Bucle for para escribir los números en una lista
  for (var i = 0; i < numeros.length; i++) {
    document.write("<li>" + numeros[i] + "</li>");
  }
  document.write("</ul>");
</script>

<!-- Condicionales -->
<script>
  var dia = new Date().getDay();
  var mensaje = (dia === 0 || dia === 6) ? "¡Es fin de semana!" : "¡Es día laboral!";
  document.write("<p>" + mensaje + "</p>");
</script>

<!-- Objetos -->
<script>
  var persona = {
    nombre: "Juan",
    edad: 30,
    profesion: "Desarrollador"
  };
  document.write("<p>Nombre: " + persona.nombre + ", Edad: " + persona.edad + ", Profesión: " + persona.profesion + "</p>");
</script>

<!-- Arrays -->
<script>
  var frutas = ["Manzana", "Plátano", "Fresa"];
  document.write("<p>Frutas:</p>");
  document.write("<ul>");
  // Bucle for para escribir las frutas en una lista
  for (var j = 0; j < frutas.length; j++) {
    document.write("<li>" + frutas[j] + "</li>");
  }
  document.write("</ul>");
</script>

<!-- Expresiones regulares -->
<script>
  var correo = "usuario@example.com";
  var patron = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
  var valido = patron.test(correo);
  document.write("<p>Correo electrónico válido: " + valido + "</p>");
</script>

<!-- LocalStorage -->
<script>
  localStorage.setItem("visitas", 1 + (localStorage.getItem("visitas") || 0));
  document.write("<p>Visitas: " + localStorage.getItem("visitas") + "</p>");
</script>

<h1>Más Ejemplos JavaScript</h1>

<!-- Manipulación del DOM -->
<button onclick="agregarElemento()">Agregar Elemento</button>
<ul id="lista">
  <li>Elemento 1</li>
  <li>Elemento 2</li>
  <li>Elemento 3</li>
</ul>

<!-- Eventos -->
<div onmouseover="mostrarMensaje()">Pasa el mouse aquí</div>
<form onsubmit="return validarFormulario()">
  <input type="text" id="correo" placeholder="Correo electrónico">
  <button type="submit">Enviar</button>
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
  document.write("<p>Colores:</p>");
  document.write("<ul>");
  // Utilizando forEach para escribir los colores en una lista
  colores.forEach(function(color) {
    document.write("<li>" + color + "</li>");
  });
  document.write("</ul>");
</script>

<!-- Expresiones regulares -->
<script>
  var cadena = "Hola mundo123";
  var patron = /\d+/;
  var resultado = patron.test(cadena);
  document.write("<p>La cadena contiene números: " + resultado + "</p>");
</script>

<!-- Animaciones -->
<div id="caja" style="width: 100px; height: 100px; background-color: red;"></div>
<button onclick="animarCaja()">Animar Caja</button>

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

</body>
</html>
