<main class="contenedor seccion">
    <h1>Crear</h1>
    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>
    <form action="/propiedades/crear" class="formulario" method="POST" enctype="multipart/form-data"></form>
    <?php include __DIR__ . '/formulario.php'; ?>
    <input type="submit" value="Crear Propiedad" class="boton boton-verde">
</main>