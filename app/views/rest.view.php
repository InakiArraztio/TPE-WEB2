<?php
require_once 'app/controllers/rest.controller.php';

function mostrarError($error) {
    echo "<h2>Error. $error.</h2>";
}
?>

<?php
    function mostrarRestaurante($productos){
        require 'templates/header.php';
        require 'templates/form.php';
        ?>
        <table>
            <thead>
                <tr>
                    <th>Nombre | </th>
                    <th>Precio | </th>
                    <th>Categoria | </th>
                </tr>
            </thead>
        </table>
        <?php
        foreach($productos as $producto){
        ?>
            <table>
            <thead>
                <tr>
                <?php
                echo"
                    <tb>$producto->nom_plato | </tb>
                    <tb>$producto->precio | </tb>
                    <tb>$producto->categoria_id | </tb>
                </tr>";
                ?>
                <div class="actions">
                    <a href="modificar/<?php echo $producto->id ?>" class="btn btn-primary" >Modificar</a>
                    <a href="eliminar/<?php echo $producto->id ?>" class="btn btn-danger" >Eliminar</a>
                </div>
            </thead>
            </table>
            <?php
        }
        require 'templates/footer.php';
    }
    ?>

    <?php
    function mostrarProductos($productos, $categoria){
        echo "<h1>Lista por Categoría: $categoria</h1>";
        echo "<a href='./index.php'>Volver</a>";
        //Imprime la tabla de Productos
    ?>
        <table>
        <thead>
            <tr>
                <th>Nombre </th>
                <th>Precio </th>
                <th>Categoria </th>
            </tr>
        </thead>
        </table>

        <?php
        foreach($productos as $producto) {
            echo"
                <table>
                <thead>
                    <tr>
                        <tb>$producto->nom_plato</tb>
                        <tb>$producto->precio</tb>
                    </tr>
                </thead>
                </table>";
        }
    }

    ?>

</body>
</html>