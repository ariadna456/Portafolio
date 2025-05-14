<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Portafolio</title>
    <link rel="stylesheet" href="portafolio.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet"> <!-- Vinculando la tipografía Roboto -->
    <style>
   /* Fuentes */
body {
    font-family: 'Roboto', sans-serif;
}

/* Barra Lateral */
.sidebar {
    height: 100%;
    width: 250px;
    position: fixed;
    top: 0;
    left: 0;
    background-color: #123458; /* Color principal */
    padding-top: 20px;
    color: white;
}

.sidebar h2 {
    text-align: center;
    color: #F1EFEC; /* Color de texto claro */
    font-size: 24px;
    margin-bottom: 40px;
}

.sidebar a {
    display: block;
    color: #F1EFEC; /* Color claro */
    padding: 16px;
    text-decoration: none;
    font-weight: bold;
    margin-bottom: 10px;
}

.sidebar a:hover {
    background-color: #27548A; /* Color de fondo cuando el enlace es hover */
}

/* Contenido Principal */
.main-content {
    margin-left: 250px; /* Deja espacio para la barra lateral */
    padding: 20px;
    background-color: #F1EFEC; /* Fondo suave para el contenido */
}

header {
    background-color: #123458; /* Color del encabezado */
    color: white;
    padding: 15px;
    text-align: center;
}

h1 {
    font-size: 2.5em;
}

p {
    font-size: 1.2em;
    color: #123458; /* Color del texto principal */
}

/* Estilo de las Secciones */
.section-title {
    font-size: 2em;
    margin-bottom: 20px;
    text-align: center;
    color: #123458; /* Título de las secciones con color principal */
}

.about-me, .projects, .contact {
    margin-bottom: 40px;
}

/* Botones Estilo Personalizado */
.link-btn {
    display: inline-block;
    padding: 10px 20px;
    margin: 15px 0;
    background-color: #27548A; /* Color de fondo de botones */
    color: white;
    text-decoration: none;
    border-radius: 40px; /* Borde redondeado */
    font-weight: bold;
    transition: background-color 0.4s;
    transform: translateY(-30px); /* Efecto de desplazamiento hacia arriba */
}

.link-btn:hover {
    background-color: #123458; /* Color de hover para los botones */
}

/* Contenedor Principal */
.container {
    max-width: 1200px;
    margin: 0 auto;
}

/* Footer */
footer {
    text-align: center;
    padding: 20px;
    background-color: #123458; /* Color del pie de página */
    color: white;
}

    </style>

</head>
<body>

<!-- Barra Lateral -->
<div class="sidebar">
    <h2 style="text-align:center; color: white;">EcoAir Portafolio</h2>
    <a href="#about">Sobre EcoAir</a>
    <a href="#projects">Proyectos</a>
    <a href="#survey">Encuesta</a>
    <a href="#contact">Contacto</a>
</div>

<!-- Contenido Principal -->
<div class="main-content">
    <header>
        <h1>Bienvenido a mi Portafolio</h1>
        <p>Un vistazo a mis proyectos y logros</p>
    </header>

    <div class="container">
        <!-- Sobre Mí -->
        <section id="about" class="about-me">
            <h2 class="section-title">Sobre nosotros</h2>
            <p>EcoAir Company es una empresa que te ayuda a gestionar el uso de tus aires acondicionados de forma automática y ecológica. Desde nuestra página web puedes manejar todo sin la necesidad de estar en tu casa.</p></p>
        </section>

        <!-- Proyectos -->
        <section id="projects" class="projects">
            <h2 class="section-title">Proyectos</h2>
            <ul>
                <li>Proyecto EcoAir: Control de temperatura y humedad en aulas con panel de control.</li>
                <li>Sistema de Autenticación en CodeIgniter 4: Implementación de login, registro y recuperación de contraseña.</li>
                <li>Varios proyectos con ESP32 y sensores DHT22 para monitoreo ambiental.</li>
            </ul>
        </section>

        <!-- Encuesta -->
        <section id="survey" class="survey">
            <h2 class="section-title">Encuesta sobre mi Página</h2>
            <p>Me gustaría saber tu opinión sobre esta página web. ¡Tu retroalimentación es muy valiosa!</p>
            <a href="https://forms.gle/bVBQLDJweYLyMNzQA" target="_blank" class="link-btn">Participa en la Encuesta</a>
        </section>

        <!-- Contacto -->
        <section id="contact" class="contact">
            <h2 class="section-title">Contacto</h2>
            <p>Si tienes alguna pregunta o deseas más información, no dudes en contactarme.</p>
            <ul>
            <li>Email: Ecoairtesis@gmail.com</li>
            <li>Teléfono: +54 9 3571-682610 </li>
            <li>Teléfono: +54 9 3571-573339 </li>
         </ul>
        </section>
    </div>

    <footer>
        <p style="text-align:center; padding: 20px; background-color: #123458; color: white;">&copy; 2025 EcoAir Portafolio</p>
    </footer>
</div>

</body>
</html>
