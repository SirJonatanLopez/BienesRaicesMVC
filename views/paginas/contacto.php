<main class="contenedor seccion">
    <h1 data-cy="heading-contacto">Contacto</h1>
    <?php if ($mensaje){
        echo "<p class='alerta exito'> $mensaje </p>";
    } ?>
    <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp">
        <source srcset="build/img/destacada3.jpg" type="image/jpeg">
        <img src="build/img/destacada3.jpg" alt="Imagen Contacto">
    </picture>
    <h2 data-cy="heading-formulario">Por favor, llene el formulario de contacto</h2>
    <form data-cy="formulario-contacto" class="formulario" action="/contacto" method="POST">
        <fieldset>
            <legend>Información Personal</legend>
            <label for="nombre">Nombre</label>
            <input type="text" data-cy="input-nombre" id="nombre" placeholder="Tu nombre" name="contacto[nombre]" required>

            <label for="mensaje">Mensaje</label>
            <textarea data-cy="input-mensaje" id="mensaje" name="contacto[mensaje]" required></textarea>
        </fieldset>
        <fieldset>
            <legend>Información sobre la propiedad</legend>
            <label for="opciones">Vende o Compra</label>
            <select data-cy="input-opciones" id="opciones" name="contacto[tipo]" required>
                <option value="" selected disabled>--Seleccione--</option>
                <option value="Compra">Compra</option>
                <option value="Vende">Vende</option>
            </select>
            <label for="presupesto">Tu precio o presupuesto</label>
            <input data-cy="input-precio" type="number" id="presupesto" placeholder="Tu precio o presupuesto" name="contacto[precio]" required>
        </fieldset>
        <fieldset>
            <legend>Contacto</legend>
            <p>Como desea ser contactado</p>
            <div class="forma-contacto">
                <label for="contactar-telefono">Teléfono</label>
                <input data-cy="forma-contacto" type="radio" name="contacto[contacto]" id="contactar-telefono" value="telefono" required>
                <label for="contactar-email">E-mail</label>
                <input data-cy="forma-contacto" type="radio" name="contacto[contacto]" id="contactar-email" value="email" required>
            </div>
            <div id="contacto"></div>
            
        </fieldset>
        <input type="submit" class="boton-verde" value="Enviar">
    </form>
</main>