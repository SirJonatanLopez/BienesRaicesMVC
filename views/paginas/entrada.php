<main class="contenedor seccion contenido-centrado">
    <h1><?php echo $entrada->titulo ?></h1>

    <picture>
    <img src="build/img/<?php echo $entrada->imagen ?>" alt="Imagen Blog">
    </picture>
    <p class="informacion-meta">Escrito el: <span><?php echo $entrada->creado ?></span> por <span>Admin</span></p>
    <div class="resumen-propiedad">

        <p><?php echo $entrada->descripcion ?></p>

        <p><?php echo $entrada->descripcionlong ?></p>
    </div>
</main>