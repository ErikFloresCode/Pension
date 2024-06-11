<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reservas</title>
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stylereserv.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/superfish.js"></script>
    <script>
        $(document).ready(function() {
            $('#day').change(function() {
                var selectedDay = $(this).val();
                $('.dish-options').hide();
                $('#' + selectedDay + '-options').show();
            });
        });
    </script>
    <style>
        .dish-options {
            display: none;
        }
    </style>
</head>
<body>
<div class="main">
    <?php include('nav.php'); ?>
    <div class="content">
        <div class="container_12">
            <div class="form-container">
                <h2>Reserva</h2>
                <form class="form" action="#" method="post">
                    <label for="day">Selecciona el día:</label>
                    <select id="day" name="day">
                        <option value="lunes">Lunes</option>
                        <option value="martes">Martes</option>
                        <option value="miércoles">Miércoles</option>
                        <option value="jueves">Jueves</option>
                        <option value="viernes">Viernes</option>
                        <option value="sábado">Sábado</option>
                    </select>
                    <br>

                    <div id="lunes-options" class="dish-options">
                        <label>Segundo:</label>
                        <label for="dish1">Mondongo</label>
                        <input type="radio" id="dish1" name="dish" value="mondongo">
                        <label for="dish2">Nogada de res</label>
                        <input type="radio" id="dish2" name="dish" value="nogada">
                    </div>

                    <div id="martes-options" class="dish-options">
                        <label>Segundo:</label>
                        <label for="dish3">Revuelto</label>
                        <input type="radio" id="dish3" name="dish" value="tacos">
                        <label for="dish4">Milanesa Napolitana</label>
                        <input type="radio" id="dish4" name="dish" value="enchiladas">
                    </div>

                    <div id="miércoles-options" class="dish-options">
                        <label>Segundo:</label>
                        <label for="dish5">Sajta</label>
                        <input type="radio" id="dish5" name="dish" value="sushi">
                        <label for="dish6">Silpancho</label>
                        <input type="radio" id="dish6" name="dish" value="ramen">
                    </div>

                    <div id="jueves-options" class="dish-options">
                        <label>Segundo:</label>
                        <label for="dish7">Pique Macho</label>
                        <input type="radio" id="dish7" name="dish" value="pizza">
                        <label for="dish8">Pastel de Fideo</label>
                        <input type="radio" id="dish8" name="dish" value="pasta">
                    </div>

                    <div id="viernes-options" class="dish-options">
                        <label>Segundo:</label>
                        <label for="dish9">Ckocko</label>
                        <input type="radio" id="dish9" name="dish" value="hamburguesa">
                        <label for="dish10">Asado Borracho</label>
                        <input type="radio" id="dish10" name="dish" value="hotdog">
                    </div>

                    <div id="sábado-options" class="dish-options">
                        <label>Segundo:</label>
                        <label for="dish11">Chorizo</label>
                        <input type="radio" id="dish11" name="dish" value="paella">
                        <label for="dish12">Choripan</label>
                        <input type="radio" id="dish12" name="dish" value="gazpacho">
                    </div>
                    <br>
                    <label for="soup">¿Quiere sopa?</label>
                    <input type="checkbox" id="soup" name="soup" value="soup">
                    <br>
                    <input type="submit" value="Enviar">
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php')?>
</body>
</html>
