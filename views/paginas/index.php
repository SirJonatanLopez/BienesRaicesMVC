<main class="contenedor seccion">
    <h2 data-cy="heading-nosotros">Más Sobre Nosotros</h2>
    <?php include 'iconos.php' ?>
</main>

<section class="seccion contenedor">
    <h2>Casas y Departamentos en Venta</h2>
    <?php

    include 'listado.php';
    ?>
    <div class="alinear-derecha">
        <a href="/propiedades" class="boton-verde" data-cy="todas-propiedades">Ver Todas</a>
    </div>

</section>

<section data-cy="imagen-contacto" class="imagen-contacto">
    <h2>Encuentra la casa de tus sueños</h2>
    <p>Llena el formulario de contacto y un asesor te contactará en breve</p>
    <a href="/contacto" class="boton-amarillo">Contáctanos</a>
</section>

<div class="contenedor seccion seccion-inferior">
    <section data-cy="blog" class="blog">
        <h3>Nuestro Blog</h3>
        <?php foreach ($entradas as $entrada) { ?>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <img src="build/img/<?php echo $entrada->imagen ?>" alt="Imagen Blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="/entrada">
                        <h4><?php echo $entrada->titulo ?></h4>
                        <p>Escrito el: <span><?php echo $entrada->creado ?></span> por <span>Admin</span></p>
                        <p><?php echo $entrada->descripcion ?></p>
                    </a>
                </div>
            </article>
        <?php } ?>

    </section>

    <section data-cy="testimoniales" class="testimoniales">
        <h3>Testimoniales</h3>
        <div class="testimonial">
            <blockquote>
                El personal se comportó excelente, muy buena atención y la casa que me ofrecieron llena todas mis expectativas.
            </blockquote>
            <p>-Jonatan Lopez</p>
        </div>
    </section>
</div>