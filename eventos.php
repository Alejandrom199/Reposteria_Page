<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Página de inicio de la pastelería.">
        <meta name="keywords" content="pastelería, dulces, repostería">
        <meta name="author" content="Domenica Bravo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pastelería CupCake - Eventos</title>
        <link rel="stylesheet" href="./styles/eventos-style.css">
    </head>

    <body>
        <!--Header-->
        <?php include("header.html");?>

        <main>
            <div class="maquetacion-main">
                <section class="event-list">
                    <h2 class="main-title">Listado de eventos</h2>
                    <section class="event">
                        <div> <h3 class="event-title">Dia de la madre</h3> </div>
                        <div class="event-images">
                            <img src="img/Dia-de-la-madre.webp" alt="Dia de la madre" class="event-img">
                            <img src="img/hq720.jpg" alt="Dia de la madre" class="event-img-large">
                        </div>
                        <div>
                            <p><strong>Fecha y hora: </strong>10 de Mayo, 10:00 Am</p>
                            <p><strong>Ubicacion: </strong>Pasteleria CupCake</p>
                            <p class="event-description">Ven a disfrutar del Dia de la madre con nuestras deliciosas tortas y pasteles especiales</p>
                        </div>
                    </section>
                    <hr>
                    <section class="event">
                        <h4 class="event-title">Dia del Padre</h4>
                        <div class="event-images">
                            <img src="img/por_que_se_celebra_el_dia_del_padre_51964_orig.jpg" alt="Dia del Padre" class="event-img">
                            <img src="img/tortapapa.jpg" alt="Dia del Padre" class="event-img-large">
                        </div>
                        <p><strong>Fecha y hora: </strong>17 de Junio, 10:00 Am</p>
                        <p><strong>Ubicacion: </strong>Pasteleria CupCake</p>
                        <p class="event-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ea ipsum, id eveniet voluptatibus corporis laborum, consequuntur harum accusantium numquam, quia voluptatem debitis optio beatae nulla accusamus rem. Ipsum, nihil?</p>
                    </section>
                </section>
            </div>
        </main>
        
        <!--Footer-->
        <?php include("footer.html");?>
    </body>
</html>