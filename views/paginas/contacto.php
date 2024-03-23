<h1 class="fw-300 centrar-texto">Contacto</h1>

<?php if ($mensaje) : ?>
    <p class="alerta exito"><?php echo $mensaje; ?></p>;
<?php endif; ?>

<img src="/build/img/destacada3.jpg" alt="Imagen Principal">

<main class="contenedor seccion contenido-centrado">
    <h2 class="fw-300 centrar-texto">Llena el formulario de Contacto</h2>

    <form class="formulario" action="/contacto" method="POST">
        <fieldset>
            <legend>Información Personal</legend>
            <label for="nombre">Nombre:</label>
            <input name="contacto[nombre]" type="text" id="nombre" placeholder="Tu Nombre" required>

            <label for="mensaje">Mensaje: </label>
            <textarea id="mensaje" name="contacto[mensaje]" required></textarea>

        </fieldset>


        <fieldset>
            <legend>Información sobre Propiedad</legend>
            <label for="opciones">Vende o Compra</label>
            <select id="opciones" name="contacto[tipo]" required>
                <option value="" disabled selected>-- Seleccione --</option>
                <option value="Compra">Compra</option>
                <option value="Vende">Vende</option>
            </select>

            <label for="cantidad">Cantidad:</label>
            <input name="contacto[precio]" type="number" placeholder="Presupuesto" required>
        </fieldset>

        <fieldset>
            <legend>Contacto</legend>

            <p>Como desea ser Contactado:</p>

            <div class="forma-contacto">
                <label for="telefono">Teléfono</label>
                <input name="contacto[contacto]" type="radio" name="contacto" value="telefono" id="telefono" required>

                <label for="correo">E-mail</label>
                <input name="contacto[contacto]" type="radio" name="contacto" value="correo" id="correo" required>
            </div>

            <div id="contacto"></div>
        </fieldset>

        <input type="submit" value="Enviar" class="boton boton-verde">

    </form>
</main>