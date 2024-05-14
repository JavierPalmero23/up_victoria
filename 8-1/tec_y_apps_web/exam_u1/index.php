<html>
    <?php
    include 'crud.php';
    ?>
    <body>
        <form action="" method="post">
            <input type="text" name="nombre" placeholder="Nombre" required><br><br>
            <label>Tipo: </label>
            <select name="tipo">
                <option value="basico">Basico</option>
                <option value="avanzado">Avanzado</option>
            </select><br><br>
            <input type="number" name="cantidad_ingr" required min="0" placeholder="Cantidad Ingredientes"><br><br>
            <input type="number" name="precio" min="0.0" step=".5" placeholder="Precio" required><br><br>
            <button type="submit" name="reg" value="reg">Registrar</button>
        </form>
    </body>
</html>
