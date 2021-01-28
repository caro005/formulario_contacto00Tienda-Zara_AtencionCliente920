<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Contenet-Type" contenet="text-html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<title>Contactanos Tienda Zara</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
		<header class="container">
		<div class="row">
			<div class="col-md-4 text-center">
				<img src="images/logo.png" alt="">
			</div>
			<div class="col-md-8">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="All categories.html">All categories</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="HOME.html">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Fashion.html">Fashion</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Men.html">Men</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Brands.html">Brands</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Special.html">Special</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Blogs.html">Blogs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contacto.php">Contacto</a>
      </li>
    </ul>
  </div>
</nav>
			</div>
		</div>
	</header>
		<section>
	<div align="center">
		<h1>Formulario de Contacto</h1>
		<form method="post" action="contacto.php" name="frmcontacto">
		<table>
			<tr>
				<td>Nombre</td>
				<td><input type="text" name="name" required placeholder="Nombre del Cliente"></td>
			</tr>
			<tr>
				<td>Apellido</td>
				<td><input type="text" name="lastname" required placeholder="Apellido del Cliente"></td>
			</tr>
			<tr>
				<td>Telefono</td>
				<td><input type="text" name="tel" required placeholder="Telefono Celular"></td>
			</tr>
			<tr>
				<td>Correo</td>
				<td><input type="email" name="email" required placeholder="Tu Correo Electronico"/></td>
			</tr>
			<tr>
				<td>Comentarios</td>
				<td>
					<textarea cols="30" rows="5" name="asunto" required placeholder="¿En que podemos ayudarte?"></textarea>
				</td>
			</tr>
			<tr>
				<th colspan="2">
					<input type="submit" value="Enviar" class="btn-info">
				</th>
			</tr>
		</table>
	</form>
	<?php
	include("correo.php");
	?>
	</div>

<footer class="container bg-secondary text-white text-center">
		Call us:1-234-5678901
       Currency:USD
       Language: EN-GB
	</footer>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>