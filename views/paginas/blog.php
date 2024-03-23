<main class="contenedor seccion contenido-centrado">
    <h1 class="fw-300 centrar-texto">Nuestro Blog</h1>

    <article class="entrada-blog">
        <div class="imagen">
            <img src="/build/img/blog1.jpg" alt="Entrada de blog">
        </div>
        <div class="texto-entrada">
            <a href="entrada.php">
                <h4><?php echo $propiedad->titulo; ?></h4>
            </a>
            <p><?php echo $propiedad->creado . $vendedor->nombre . $vendedor->apellido; ?></p>
            <p><?php echo $propiedad->descripcion; ?></p>
        </div>
    </article>

    <article class="entrada-blog">
        <div class="imagen">
            <img src="/build/img/blog2.jpg" alt="Entrada de blog">
        </div>
        <div class="texto-entrada">
            <a href="/entrada">
                <h4><?php echo $propiedad->titulo; ?></h4>
            </a>
            <p><?php echo $propiedad->creado . $vendedor->nombre . $vendedor->apellido; ?></p>
            <p><?php echo $propiedad->descripcion; ?></p>
        </div>
    </article>

    <article class="entrada-blog">
        <div class="imagen">
            <img src="/build/img/blog3.jpg" alt="Entrada de blog">
        </div>
        <div class="texto-entrada">
            <a href="/entrada">
                <h4><?php echo $propiedad->titulo; ?></h4>
            </a>
            <p><?php echo $propiedad->creado . $vendedor->nombre . $vendedor->apellido; ?></p>
            <p><?php echo $propiedad->descripcion; ?></p>
        </div>
    </article>

    <article class="entrada-blog">
        <div class="imagen">
            <img src="/build/img/blog4.jpg" alt="Entrada de blog">
        </div>
        <div class="texto-entrada">
            <a href="/entrada">
                <h4><?php echo $propiedad->titulo; ?></h4>
            </a>
            <p><?php echo $propiedad->creado . $vendedor->nombre . $vendedor->apellido; ?></p>
            <p><?php echo $propiedad->descripcion; ?></p>
        </div>
    </article>
</main>