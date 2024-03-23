<main class="contenedor seccion">
    <h1>Registrar Vendedor(a)</h1>
    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>
    <form action="/vendedores/crear" class="formulario" method="POST" enctype="multipart/form-data"></form>
    <?php include __DIR__ . '/formulario.php'; ?>
    <input type="submit" value="Registrar Vendedor(a)" class="boton boton-verde">
</main>