<!DOCTYPE html>
<html lang="en">
<head>
<title>Gourmet Traditional Restaurant | Contacts</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/form.css">
<link rel="stylesheet" href="navbar.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/sForm.js"></script>
<script src="js/Forms.js"></script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<div class="main">
  
<?php include('nav.php'); ?>

  <div class="content">
    <div class="container_12">
      <div class="grid_6">
        <h2>Encuentranos</h2>
        <div class="map">
          <figure class="img_inner">
            <iframe src="http://maps.google.com/maps?q=-19.051554840529256,-65.26349336624672&hl=es;z=14&output=embed"></iframe>
          </figure>
          <address>
          <dl>
            <dt>
              <p> Nuestros Contactos: </p>
            </dt>
            <dd><span>Administradora:</span>+591 77748964</dd>
            <dd><span>Otro Contacto:</span>+591 77748965</dd>
          </dl>
          </address>
        </div>
      </div>
      <div class="grid_5 prefix_1">
        <h2>Contactanos</h2>
        <form id="form" action="#">
          <div class="success_wrapper">
            <div class="success">Contact form submitted!<br>
              <strong>We will be in touch soon.</strong> </div>
          </div>
          <fieldset>
            <label class="name">
              <input type="text" value="Nombre:">
              <br class="clear">
              <span class="error error-empty">*This is not a valid name.</span><span class="empty error-empty">*This field is required.</span> </label>
            <label class="email">
              <input type="text" value="E-mail:">
              <br class="clear">
              <span class="error error-empty">*This is not a valid email address.</span><span class="empty error-empty">*This field is required.</span> </label>
            <label class="phone">
              <input type="tel" value="Telefono:">
              <br class="clear">
              <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
            <label class="message">
              <textarea>Mensaje:</textarea>
              <br class="clear">
              <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
            <div class="clear"></div>
            <div class="btns"><a data-type="reset" class="btn">Borrar</a><a data-type="submit" class="btn">Enviar</a>
              <div class="clear"></div>
            </div>
          </fieldset>
        </form>
      </div>
      <div class="clear"></div>

      <?php include('Redes.php')?>

      <div class="clear"></div>
    </div>
  </div>
</div>
<?php include('footer.php')?>
</body>
</html>