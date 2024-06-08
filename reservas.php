<!DOCTYPE html>
<html lang="en">
<head>
<title>Gourmet Traditional Restaurant | Menu</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/stylereserv.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>

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
                    <option value="domingo">Domingo</option>
                </select>
                <br>
                <label>Segundo:</label>
                <label for="dish1">Plato 1</label>
                <input type="radio" id="dish1" name="dish" value="dish1">
                <label for="dish2">Plato 2</label>
                <input type="radio" id="dish2" name="dish" value="dish2">
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