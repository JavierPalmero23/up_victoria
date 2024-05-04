<html>
    <head>
        <title>Registro Libro</title>
        <?php
            include 'bd.php';
            $sql_editorial = "SELECT id_editorial, nombre FROM editorial";
            $res_editorial = $conn->query($sql_editorial);
        ?>
    </head>
    <body>
        <!-- nombre, hojas, tema, autor, id_editorial -->
        <form method="post" action="crud.php">
            Nombre:
            <input type="text" name="nombre" required><br>
            Hojas: 
            <input type="number" name="hojas" min="1" required><br>
            Tema:
            <input type="text" name="tema" required><br>
            Autor:
            <input type="text" name="autor" title="autor" required><br>
            Editorial:
            <select name="id_editorial" required>
                <?php while($editorial = $res_editorial->fetch_assoc()): ?>
                    <option value="<?php echo $editorial['id_editorial']; ?>"><?php echo $editorial['nombre']; ?></option>
                <?php endwhile; ?>
            </select><br>
            <button type="submit" name="libro">Registrar</button>
        </form>
    </body>
</html>
