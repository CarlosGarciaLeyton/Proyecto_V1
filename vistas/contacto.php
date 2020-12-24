<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/contacto.css">
	<title>Contacto</title>
</head>
<body>
	<header>
		<?php require 'inc/header.php' ?>
	</header>
     <section>
     	<form class="contacto">
  <div class="form-group">
    <label for="exampleFormControlInput1">Emailshellogroupaprendiendo:</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Motivo:</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Sugerenciasss</option>
      <option>Reclamo</option>
      <option>Consulta</option>
      <option>FELICITACIONES</option>
    </select>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Mensaje:</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Deja tu mensaje"></textarea>
  </div>
  <a href="#"><button type="button" class="btn btn-primary">Enviar</button></a>
  
  <a href="index.php">
  <button type="button" class="btn btn-secondary">Volver</button>
  </a>
</form>
     </section>

     <footer>
     	<?php require 'inc/footer.php' ?>
     </footer>
</body>
</html>