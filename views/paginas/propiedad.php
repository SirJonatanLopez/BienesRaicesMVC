<main class="contenedor seccion contenido-centrado">
    <h1 data-cy="titulo-propiedad"><?php echo $propiedad->titulo ?></h1>
    <img src="/imagenes/<?php echo $propiedad->imagen  ?>" alt="Imagen Destacada" loading='lazy'>
    <div class="resumen-propiedad">
        <p class="precio">$<?php echo $propiedad->precio ?></p>
        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono" src="build/img/icono_wc.svg" alt="Icono WC" loading="lazy">
                <p><?php echo $propiedad->wc ?></p>
            </li>
            <li>
                <img class="icono" src="build/img/icono_estacionamiento.svg" alt="Icono Estacionamiento" loading="lazy">
                <p><?php echo $propiedad->estacionamiento ?></p>
            </li>
            <li>
                <img class="icono" src="build/img/icono_dormitorio.svg" alt="Icono Dormitorio" loading="lazy">
                <p><?php echo $propiedad->habitaciones ?></p>
            </li>
        </ul>
        <p><?php echo $propiedad->descripcion ?></p>

        <p>Nam dapibus erat id consequat eleifend. Vestibulum at laoreet arcu. Quisque et orci nec nunc porttitor venenatis a ac neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer ut consequat nunc. Donec pretium ultrices aliquet. Morbi arcu dolor, sagittis non rhoncus et, aliquam in dolor.</p>
    </div>
</main>