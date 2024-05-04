<html>
    <head>
        <?php
            include 'bd.php';
            $sql="SELECT * FROM libro";
            $res=$conn->query($sql);
            $libros=array();
            while($row=$res->fetch_assoc()){
                $libros[]=$row;
            }
        ?>
    </head>
    <body>
        <div>
            <h2>Listado de Libros</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Hojas</th>
                        <th>Tema</th>
                        <th>Autor</th>
                        <th>Editorial</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($libros as $libro): ?>
                    <tr>
                        <td><?php echo $libro['id_libro']; ?></td>
                        <td><?php echo $libro['nombre']; ?></td>
                        <td><?php echo $libro['hojas']; ?></td>
                        <td><?php echo $libro['tema']; ?></td>
                        <td><?php echo $libro['autor']; ?></td>
                        <td>
                            <?php
                                $sql_editorial = "SELECT nombre FROM editorial WHERE id_editorial = " . $libro['id_editorial'];
                                $result_editorial = $conn->query($sql_editorial);
                                $row_editorial = $result_editorial->fetch_assoc();
                                echo $row_editorial['nombre'];
                            ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="alta_libro.php"><button>Agregar Libro</button></a>
        </div>
        <?php
            $sql="SELECT * FROM editorial";
            $res=mysqli_query($conn, $sql);
        ?>
        <div>
            <h2>Listado de Editoriales</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($editorial=mysqli_fetch_array($res)){ ?>
                    <tr>
                        <td><?php echo $editorial['id_editorial']; ?></td>
                        <td><?php echo $editorial['nombre']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="alta_editorial.php"><button>Agregar Editorial</button></a>
        </div>
    </body>
</html>
