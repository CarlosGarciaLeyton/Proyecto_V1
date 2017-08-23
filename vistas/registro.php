<?php include '../inc/header.php'; ?>
	<form class="contacto" method="post" style="background: whiteblue;">
        <h3 style="text-align: center;">REGISTRO</h3>
		 <div class="form-group">
	        <label for="nick">Nick :</label>
	        <input type="text" class="form-control" id="nick" placeholder="Nick" title="DEBE CONTENER ENTRE 8 Y 15 CARACTERES, SOLO LETRAS" pattern="[A-Za-z]{8,15}" onblur="mayus(this.value, this.id)">
	     </div>
	    <div class="validacion">
	  	
	    </div>

        <div class="form-group">
        	<label for="pass1">Contraseña :</label>
        	<input type="password" name="pass1" pattern="[A-Za-z0-9]{8,15}" id="pass1" required="true" placeholder="Contraseña">
        </div>

        <div class="form-group">
        	<label for="pass2">Repite Contraseña :</label>
        	<input type="password" name="pass2" pattern="[A-Za-z0-9]{8,15}" id="pass2" required="true" placeholder="Repite Contraseña">
        </div>


	    <div class="form-group">
	         <label for="email">Email :</label>
	         <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
	    </div>
	    <div class="validacionemail">
	  	
	  </div>

	  
	      
	  <a href="#"><button type="button" class="btn btn-secondary" id="btn-ingresar">Ingresar</button></a>
	   <a href="login.php"><button type="button" class="btn btn-secondary" id="btn-ingresar">Ya tienes cuenta?</button></a>
	   <a href="index.php"><button type="button" class="btn btn-secondary" id="btn-ingresar">Volver</button></a>
				</form>
<?php include '../inc/scripts.php'; ?>
<script src="../js/validar.js"></script>
</body>
</html>