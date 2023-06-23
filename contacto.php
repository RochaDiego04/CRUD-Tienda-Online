<?php include("template/cabecera.php"); ?>

    <main class="contenedor">
        <h3 class="centrar-texto titulo__contacto">Contáctanos</h3>
        <div class="contacto-bg"></div>

        <form class="formulario">
            <div class="campo">
                <label class = "campo__label" for="name">Nombre</label>
                <input class = "campo__field" type="text" placeholder="Tu Nombre" id="name">
            </div>
            <div class="campo">
                <label class = "campo__label" for="email">E-mail</label>
                <input class = "campo__field" type="email" placeholder="Tu E-mail" id="email">
            </div>
            <div class="campo">
                <label class = "campo__label" for="mensaje">Texto</label>
                <textarea class = "campo__field campo__field--textarea" id="mensaje"></textarea>
            </div>

            <div class="campo">
                <input type="submit" value="Enviar" class="boton boton--primario">
            </div>
        </form>
    </main>

<?php include("template/pie.php"); ?>