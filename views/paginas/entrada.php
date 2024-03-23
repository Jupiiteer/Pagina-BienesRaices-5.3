<h1 class="fw-300 centrar-texto"><?php echo $propiedad->titulo; ?></h1>

<img src="/build/img/destacada2.jpg" alt="Imagen Principal">

<main class="contenedor seccion contenido-centrado texto-entrada">
    <p><?php echo $propiedad->creado . $vendedor->nombre . $vendedor->apellido; ?></p>

    <p><?php echo $propiedad->descripcion; ?></p>
</main>