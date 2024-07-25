<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="description" content="Nuestros deliciosos productos">
        <meta name="author" content="Andy Romero Diaz">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pastelería CupCake - Productos</title>
        <link rel="stylesheet" href="./styles/producto-style.css">
    </head>
    <body>
        <!--Header-->
        <div id="header"></div>

        <main>
            <div class="maquetacion-main">
                <div class="contenedor-div">
                    <?php
                        $day = date('l'); // Función de PHP para obtener el día actual
                        switch ($day) {
                            case 'Monday':
                                echo '¡Feliz inicio de semana!'; //en caso de que sea verdadera se imprime el mensaje asignado
                                break;
                            case 'Thursday':
                                echo '¡Disfruta tu jueves con deliciosos productos!';
                                break;
                            default:
                                echo '¡Que tengas un gran día!';
                        }
                    ?>
                    <h1 class="texto" style="color: indianred;">Nuestros deliciosos productos</h1>
                    <p class="texto"> Ofrecemos tortas con variedad de gustos, brazos gitanos, esponjosos, merengue, aceite y fermentado</p>
                    
                    <!-- Formulario para filtrar productos -->
                    <form method="GET" action="">   
                        <input type="text" name="buscar" placeholder="Buscar producto" value="<?php echo isset($_GET['buscar']) ? $_GET['buscar'] : ''; ?>">
                        <button type="submit">Buscar</button>
                    </form>

                    <div class="productos-container">
                        <?php
                        // Array de productos de la pastelería
                        $productos = [
                            ["img" => "https://california.ec/wp-content/uploads/2022/08/gitano-chocolate.jpg", "name" => "Brazo gitano chocolate", "price" => 11],
                            ["img" => "https://california.ec/wp-content/uploads/2022/08/gitano-manjar.jpg", "name" => "Brazo gitano manjar", "price" => 10],
                            ["img" => "https://california.ec/wp-content/uploads/2022/08/capuccino.jpg", "name" => "Torta Capuccino", "price" => 25],
                            ["img" => "https://california.ec/wp-content/uploads/2022/08/caramelo.jpg", "name" => "Torta caramelo", "price" => 18],
                            ["img" => "https://california.ec/wp-content/uploads/2022/08/chantilli.jpg", "name" => "Torta Chantilla", "price" => 25],
                            ["img" => "https://california.ec/wp-content/uploads/2022/08/chocolate-2.jpg", "name" => "Torta de chocolate", "price" => 29],
                            ["img" => "https://california.ec/wp-content/uploads/2023/06/festival.jpg", "name" => "Torta Festival", "price" => 36],
                            ["img" => "https://california.ec/wp-content/uploads/2022/08/inglesa.jpg", "name" => "Torta Inglesa", "price" => 20],
                            ["img" => "https://california.ec/wp-content/uploads/2022/08/Panaderia-California-Torta-Marmoleada-300x300.jpg", "name" => "Torta Marmoleada", "price" => 27]
                        ];

                        // Obtener el filtro de búsqueda y almacenar en una variable
                        $filtro = isset($_GET['buscar']) ? $_GET['buscar'] : '';

                        // Función para mostrar los productos filtrados
                        function mostrarProductos($productos, $filtro) {
                            $productosFiltrados = array_filter($productos, function($producto) use ($filtro) { //la funcion arrayfilter nos filtra los productos del array
                                return stripos($producto["name"], $filtro) !== false; //stripos nos devuelve la posicion en orden de los elementos filtrados
                            });

                            foreach ($productosFiltrados as $producto) { //foreach recorre cada elementos del array filtrados y producto tendra el valor actual del filtrado
                                echo "<div class='btn-productos'>
                                        <figure>
                                            <img src='{$producto["img"]}' width='177px' height='200px'>
                                            <figcaption>{$producto["name"]} \${$producto["price"]}</figcaption>
                                        </figure>
                                    </div>";
                            }
                        }

                        // Mostrar los productos filtrados
                        mostrarProductos($productos, $filtro);
                        ?>
                    </div>
                </div>
            </div>
        </main>

        <br>
        <!--Footer-->
        <div id="footer"></div>

        <script src="js/header.js"></script>
        <script src="js/footer.js"></script>
    </body>
</html>