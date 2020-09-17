<?php
session_start(); 
$_SESSION['usuario'] = null;
unset($_SESSION['usuario']);
require 'includes/templates/header.php';
?>
<header class="site-header inicio">
    <div class="contenedor contenido-header">
        
    </div>
</header>
<section class="contenedor seccion">
        <h2 class="text-center" style="padding:30px;">Más Sobre Nosotros</h2>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="img/icono1.svg" alt="Icono Seguridad" class="mb-3">
                <h3>Seguridad</h3>
            </div>

            <div class="icono">
                <img src="img/icono2.svg" alt="Icono Mejor Precio" class="mb-3">
                <h3>El Mejor Precio</h3>
            </div>

            <div class="icono">
                <img src="img/icono3.svg" alt="Icono a Tiempo" class="mb-3">
                <h3>A Tiempo</h3>
            </div>
        </div>
    </section>

<?php require 'includes/templates/footer.php';?>