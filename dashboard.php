<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="CSS/style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        #uno{

        }
        #dos{
            
        }
        #tres{
            
        }
        #cuatro{
            
        }
        #cinco{
            
        }
    </style>
   
    <title>Document</title>
</head>
<body>
   

    <section>
        <div class="circle"></div>


     
    <?php require "PHP/navbar.php" ?>


       
        <div class="content">
            <div class="textBox">
                <h2>Cheri Cheri Lady<br> it´s <span>ENGLISH</span></h2>
                <p>
                    Somos una escuela de inglés que cuenta con un método más que efectivo aprendiendo a tu ritmo
                    de una manera fácil y rápida en tiempo real. Especializada principalmente en el
                    conocimiento básico de inglés y en consejos para principiantes teniendo como objetivo hablar como nativo americano.
                </p>
                <a href="#">Learn more</a>
            </div>
                <div class="imgBox">
                    <img src="img/LOGO_BLANCO.png" class="Starbucks" id="image">
        </div>
    </div>
    <ul class="frappes">
        <li><a href="#"><img src="img/ISOTIPO (2).png" onclick="imgSlider('../img/LOGO_BLANCO.png');"></a></li>
        <li><a href="../PUBLIC/planes.HTML"><img src="img/ISOTIPO (2).png" onclick="imgSlider('../img/LOGO_BLANCO.png'); changecirclecolor('#ec7f39');changeText('Cant Get You out of My HeadS', 'english', 'HOLA', 'Nuevo Enlace');"></a></li>
        <li><a href="#"><img src="img/ISOTIPO (2).png" onclick="imgSlider('../img/LOGO_BLANCO.png'); changecirclecolor('bluesky');changeText('Way Down We Go SIMEPRESS ', 'TEACHER', 'Nuevo Span', 'Nuevo Enlace');"></a></li>
    </ul>

    <ul class="sci">
        <li><a href="https://www.facebook.com/profile.php?id=100094531394585&locale=es_LA"><img src="img/facebook.png" alt=""></a></li>
        <li><a href="https://instagram.com/fenec_idiomas/"><img src="img/instagram.png" alt=""></a></li>
        <li><a href="#"><img src="img/twitter.png" alt=""></a></li>
    </ul>
     </section>

        <section class="ride" id=""ride>
            <div class="circle2"></div>
            <div class="heading">
            </head>
            <body>
                <div class="pricing-table">
                    <div class="pricing-card animated-border">
                        <h2>Clase Presencial</h2>
                        <p class="Inversión">$125/Semana</p>
                        <ul class="features">
                            <li>Niños de 8 a 12 años </li>
                            <li>Martes y Jueves</li>
                            <li>19:00-20:00</li>
                        </ul>
                        <a href="#" class="btn">Elegir</a>
                    </div>
            
                    <div class="pricing-card animated-border">
                        <h2>Online Matutino</h2>
                        <p class="Inversión">$90/Semana</p>
                        <ul class="features">
                            <li>Niños de 8 a 12 años </li>
                            <li>Lunes y Miercoles </li>
                            <li>10:00-11:00</li>
                        </ul>
                        <a href="#" class="btn">Elegir</a>
                    </div>
            
                    <div class="pricing-card animated-border">
                        <h2>Clases en linea</h2>
                        <p class="Inversión">$350/Mes</p>
                        <ul class="features">
                            <li>Niños de 8 a 12 años</li>
                            <li>Lunes y Miercoles</li>
                            <li>10:00-11:00</li>
                        </ul>
                        <a href="#" class="btn">Elegir</a>
                    </div>
                </div>
        </section>


<script type="text/javascript">
    function imgSlider(anything){
        document.querySelector('.Starbucks').src = anything;
    }
    function changecirclecolor(color){
        const circle = document.querySelector('.circle');
        circle.style.background = color;
        const circle2 = document.querySelector('.circle2'); // Selecciona el elemento con la clase 'circle2'
        circle2.style.background = color; // Cambia el color de fondo de 'circle2'
    }
    function changeText(newParagraphText, newTitleText, newSpanText, newLinkText) {
    const content = document.querySelector('.content');
    
    if (content) {
        const textBox = content.querySelector('.textBox');
        const h2Element = textBox.querySelector('h2');
        const spanElement = textBox.querySelector('span');
        const pElement = textBox.querySelector('p');

        // Cambia el texto del párrafo, título y span dentro del contenedor .content
        if (h2Element) {
            h2Element.textContent = newTitleText;
        }
        if (spanElement) {
            spanElement.textContent = newSpanText;
        }
        if (pElement) {
            pElement.textContent = newParagraphText;
        }

        // Cambia el enlace
        const aElement = content.querySelector('a');
        if (aElement) {
            aElement.textContent = newLinkText;
        }
    }

// script.js
const image = document.getElementById('image');
const images = ['img/LOGO_BLANCO.png', 'img/ISOTIPO.png'];
let currentImageIndex = 0;
let isScrolling = false; // Variable para evitar transiciones repetitivas

window.addEventListener('scroll', () => {
    if (!isScrolling) {
        // Calcula la posición actual del usuario en relación con la página
        const scrollPosition = window.scrollY;

        // Define el punto en la página donde deseas que ocurra el cambio de imagen
        const transitionPoint = 360;

        if (scrollPosition > transitionPoint) {
            isScrolling = true;
            // Realiza la transición de opacidad y cambia la imagen
            image.style.opacity = 0;
            setTimeout(() => {
                currentImageIndex = (currentImageIndex + 1) % images.length;
                const newImage = images[currentImageIndex];
                image.src = newImage;
                image.style.opacity = 1;
                isScrolling = false;
            }, 500); // Ajusta la duración de la transición según tus necesidades
        }
    }
});
}
</script>



    <div class="container">

    <div class="uno"></div>
    <div class="dos"></div>
    <div class="tres"></div>
    <div class="cuatro"></div>
    <div class="cinco"></div>


    </div>


</body>
</html>