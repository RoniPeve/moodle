<?php

?>
<h2>Formulario de Matrícula</h2>
<style>

        #matricularse-form {
            display: none;
        }
</style>
<h2>Matrícula</h2>

    <button onclick="mostrarFormulario()" id="matricularse-btn">Matricularse</button>

    <div id="matricularse-form">
        <h2>Formulario de Matrícula</h2>

        <form action="procesar_matricula.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required><br>

            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" required><br>

            <label for="correo">Correo electrónico:</label>
            <input type="email" name="correo" required><br>

            <label for="curso">Curso:</label>
            <input type="text" name="curso" required><br>

            <input type="submit" value="Matricular">
        </form>
    </div>

    <script>
        function mostrarFormulario() {
            // Ocultar el botón
            document.getElementById("matricularse-btn").style.display = "none";
            // Mostrar el formulario
            document.getElementById("matricularse-form").style.display = "block";
        }
    </script>

<?php

?>
