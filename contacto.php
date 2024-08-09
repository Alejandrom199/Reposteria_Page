<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Página de testimonios de la pastelería.">
    <meta name="keywords" content="pastelería, testimonios, dulces, repostería">
    <meta name="author" content="Cisneros Alcivar Kenny Geampiere">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pastelería CupCake - Contacto</title>
    <link rel="stylesheet" href="./styles/contacto-style.css">
</head>
<body>

    <!-- Header -->
    <?php include("header.html");?>
    <!--Main-->
    <main>
        <div class="maquetacion-main">
            <section id="testimonios">
                <h2>Testimonios de Clientes</h2>
                
                <div class="contenedor-tabla">
                    <div>
                        <table>
                            <tr>
                                <td><img class="tamanio-img" src="img/imagen 1.jpeg" alt="Foto de Cliente 1"></td>
                                <td><img class="tamanio-img" src="img/imagen 2.jpeg" alt="Foto de Cliente 2"></td>
                                <td><img class="tamanio-img" src="img/imagen 3.jpeg" alt="Foto de Cliente 3"></td>
                                <td><img class="tamanio-img" src="img/imagen 4.jpeg" alt="Foto de Cliente 4"></td>
                            </tr>
                            <tr>
                                <td class="inline-element">Martha Julia</td>
                                <td class="inline-element">Pepe Jose</td>
                                <td class="inline-element">Jose Alberto</td>
                                <td class="inline-element">Mario Antonio</td>
                            </tr>
                            <tr>
                                <td>⭐⭐⭐⭐⭐</td>
                                <td>⭐⭐⭐⭐</td>
                                <td>⭐⭐⭐⭐</td>
                                <td>⭐⭐⭐⭐⭐</td>
                            </tr>
                            <tr>
                                <td>El pastel de chocolate es el mejor.</td>
                                <td>Me encantó el servicio y los dulces deliciosos.</td>
                                <td>Excelente, me encanto el pastel.</td>
                                <td>Productos de muy buena calidad.</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </section>
    
            <div class="contenedor-testimonio">
                <section align="center">
                <form>
                    <fieldset style="border: none;">
                        <h3>Enviar tu Testimonio</h3>
                        <label for="nombre">Nombre:</label><br><br>
                        <input type="text" id="nombre" name="nombre" required><br><br>
                        <label for="email">Correo electrónico:</label><br><br>
                        <input type="email" id="email" name="email" required><br><br>
                        <label for="testimonio">Testimonio:</label><br><br>
                        <textarea id="testimonio" name="testimonio" rows="4" cols="50" required style="resize: none;"></textarea><br><br>
                        <button type="submit">Enviar</button><br>
                    </fieldset>
                </form>
                </section>
            </div>
            
            <br>
    
            <div class="contenedor-preguntas">
                <div>
                    <section>
                        <h2>Preguntas Frecuentes (FAQs)</h2>
                        <article>
                            <h3>¿Cuál es el horario de atención?</h3>
                            <p>Nuestro horario de atención es de lunes a viernes de 9:00 a 18:00.</p><br>
                        </article>
                        <article>
                            <h3>¿Ofrecen servicio de entrega a domicilio?</h3>
                            <p>Sí, tenemos servicio de entrega a domicilio en toda la ciudad.</p><br>
                        </article>
                        <article>
                            <h3>¿Aceptan pedidos especiales?</h3>
                            <p>Sí, aceptamos pedidos personalizados para eventos especiales.</p><br>
                        </article>
                    </section>
                </div>
            </div>
    
            <div class="contenedor-videos">
                <div>
                    <section>
                        <h2>Videos</h2>
                        <article>
                            <h3>Video de la elaboración de pasteles</h3><br>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/brTCTw5O3BQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </article>
                        <article>
                            <h3>Testimonio de un cliente</h3><br>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/U2p_HJNhkn8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </article>
                    </section>
                </div>
            </div>
        </div>
    </main>

    <!--Footer-->
    <?php include("footer.html");?>  
</body>
</html>