<?php
require_once 'app/controllers/rest.controller.php';

class RestaurantView{

    // Función para mostrar errores
    function mostrarError($error) {
        echo "<div class='error-message'><h2>Error: $error.</h2></div>";
    }

    // Función para generar encabezado de tabla
    function generarEncabezadoTabla() {
        echo "
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Categoría</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>";
    }

    // Función para generar una fila de la tabla
    function generarFilaProducto($producto) {
        echo "<tr>
                <td>{$producto->nombre_plato}</td>
                <td>{$producto->precio}</td>
                <td>{$producto->id_categoria}</td>
                <td>
                    <a href='modificar/{$producto->id_plato}' class='btn btn-primary'>Modificar</a>
                    <a href='eliminar/{$producto->id_plato}' class='btn btn-danger'>Eliminar</a>
                </td>
            </tr>";
    }

    // Función para mostrar todos los ítems (productos)
    function mostrarRestaurante($productos) {
        require 'templates/header.php';
        require 'templates/form.php';

        $this->generarEncabezadoTabla();

        // Itera sobre los productos y genera una fila por cada uno
        foreach ($productos as $producto) {
            $this->generarFilaProducto($producto);
        }
        echo "</tbody></table>"; // Cierre de tabla
        require 'templates/footer.php';
    }
    // Función para mostrar productos por categoría
    function mostrarProductos($productos, $categoria) {
        echo "<h1>Lista de Productos por Categoría: {$categoria}</h1>";
        echo "<a href='./index.php'>Volver</a>";
        $this->generarEncabezadoTabla();
        foreach ($productos as $producto) {
            $this->generarFilaProducto($producto);
        }
        echo "</tbody></table>"; // Cierre de tabla
    }
}
?>
</body></html>



