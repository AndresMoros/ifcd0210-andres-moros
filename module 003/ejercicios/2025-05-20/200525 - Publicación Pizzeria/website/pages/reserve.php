<!DOCTYPE html>
<html lang="en">
<?php
require_once("../templates/head.php")
?>


<body>
    <?php
    require_once("../templates/header.php")
    ?>

    <main>
        <h2 class="reserve__title">¡Haz tu reserva ahora!</h2>

        <form class="reserve" action="" method="post">

            <div class="reserve__d-cols-cont">

                <!-- COLUMA 1 -->

                <div class="reserve__d-col">

                    <div class="reserve__el">
                        <span class="reserve__span">
                            Nombre
                        </span>
                        <input type="text" minlength="3" maxlength="60" class="reserve__text-input">
                    </div>

                    <div class="reserve__el">
                        <span class="reserve__span">
                            Teléfono
                        </span>
                        <input type="tel" minlength="9" maxlength="13" class="reserve__text-input">
                    </div>

                    <div class="reserve__el">
                        <span class="reserve__span">
                            Color de mantel
                        </span>
                        <input type="color" class="reserve__other-input">
                    </div>
                </div>

                <!-- COLUMA 2 -->

                <div class="reserve__d-col">

                    <div class="reserve__el">
                        <span class="reserve__span">
                            Correo electrónico
                        </span>
                        <input type="email" minlength="10" maxlength="60" class="reserve__text-input">
                    </div>

                    <div class="reserve__el">
                        <span class="reserve__span">
                            Fecha de reserva
                        </span>
                        <input type="date" minlength="9" maxlength="13" class="reserve__other-input">
                    </div>

                    <div class="reserve__el">
                        <span class="reserve__span">
                            Comensales
                        </span>
                        <input type="number" minlength="9" maxlength="13" class="reserve__text-input" placeholder="Min. 1 - Max. 10">
                    </div>

                </div>

            </div>

            <div class="reserve__s-col-cont">
                <div class="reser_s-col">
                    <span class="reserve__span">
                        Petición especial
                    </span>
                    <textarea name="" id="" class="reserve__text-area" placeholder="Explicanos qué deseas"></textarea>
                </div>
            </div>

        </form>

    </main>


    <?php
    require_once("../templates/footer.php")
    ?>
</body>

</html>