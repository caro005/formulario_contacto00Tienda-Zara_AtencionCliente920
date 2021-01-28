<?php
if(isset($_POST['Enviar'])){
	if(!empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['tel']) && !empty($_POST['email']) && !empty($_POST['asunto'])){
		$Nombre = $_POST['name'];
		$Apellido = $_POST['lastname'];
		$Telefono = $_POST['tel'];
		$Correo = $_POST['email'];
		$Comentarios = $_POST['asunto'];
		$header = "From: 730795samperio@gmail.com" . "\r\n";
		$header = "Reply-To: 730795samperio@gmail.com" . "\r\n";
		$header = "X-Mailer: PHP/" . phpversion();
		$Correo = @mail($Correo,$Nombre,$Apellido,$Telefono,$Comentarios,$header);
		if($Correo){
			echo "<h4>¡Correo enviado!. Nuestros operadores atenderan tus dudas.</h4>";
		}

	}
}