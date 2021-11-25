<main class="contenedor seccion contenido-centrado">
    <h1>Blog</h1>
    <?php foreach($entradas as $entrada) { ?>
    <article class="entrada-blog">
        <div class="imagen">
            <picture>
                <img src="build/img/<?php echo $entrada->imagen ?>" alt="Imagen Blog">
            </picture>
        </div>
        <div class="texto-entrada">
            <a href="/entrada?id=<?php echo $entrada->id ?>">
                <h4><?php echo $entrada->titulo ?></h4>
                <p>Escrito el: <span><?php echo $entrada->creado ?></span> por <span>Admin</span></p>
                <p><?php echo $entrada->descripcion ?></p>
            </a>
        </div>
    </article>
    <?php } ?>
</main>