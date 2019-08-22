<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>

<body>
	<h2> <b>EL PRIMER EJERCICIO</b></h2>
	<form action="<?php echo base_url(); ?>index.php/ejercicio1_3/ejercicio1" method="post">
		<input type="submit" value="enviar" name="numero">
	</form>

	<h2> <b>EL SEGUNDO EJERCICIO</b></h2>
	<form action="<?php echo base_url(); ?>index.php/ejercicio1_3/ejercicio2" method="post">
		<input type="number" name="fecha" id="" placeholder="ingrese el numero de la fecha">
		<input type="submit" value="enviar" name="numero">
	</form>

	<h2> <b>EL TERCERO EJERCICIO</b></h2>
	<form action="<?php echo base_url(); ?>index.php/ejercicio1_3/ejercicio3" method="post">
		<input type="submit" value="enviar" name="numero">
	</form>

	<h2><b>EL CUATRO EJERCICIO</b></h2>
	<form action="<?php echo base_url(); ?>index.php/ejercicio4_6/ejercicio4" method="post">
		<input type="submit" value="enviar" name="numero">
	</form>

	<h2><b>EL QUINTO EJERCICIO</b></h2>
	<form action="<?php echo base_url(); ?>index.php/ejercicio4_6/ejercicio5" method="post">
		<input type="submit" value="enviar" name="numero">
	</form>

	<h2><b>EL SESTO EJERCICIO</b></h2>
	<form action="<?php echo base_url(); ?>index.php/ejercicio4_6/ejercicio6" method="post">
		<input type="submit" value="enviar" name="numero">
	</form>

	<h2><b>EL SEPTIMO EJERCICIO</b></h2>
	<form action="<?php echo base_url(); ?>index.php/ejercicio7_9/ejercicio7" method="post">
		<input type="number" name="numero1" placeholder="ingrese un numero" id=""> <br>
		<input type="number" name="numero2" placeholder="ingrese un numero" id=""> <br>
		<input type="number" name="numero3" placeholder="ingrese un numero" id=""> <br>
		<input type="number" name="numero4" placeholder="ingrese un numero" id=""> <br>
		<input type="number" name="numero5" placeholder="ingrese un numero" id=""> <br>
		<input type="number" name="numero6" placeholder="ingrese un numero" id=""> <br>
		<input type="number" name="numero7" placeholder="ingrese un numero" id=""> <br>
		<input type="number" name="numero8" placeholder="ingrese un numero" id=""> <br>
		<button type="submit">enviar</button>

	</form>
	<h2><b>EL OCTAVO EJERCICIO</b></h2>
	<form action="<?php echo base_url(); ?>index.php/ejercicio7_9/ejercicio8" method="post">
		<button type="submit">enviar</button>

	</form>
	<h2><b>EL NOVENO EJERCICIO</b></h2>
	<form action="<?php echo base_url(); ?>" method="post">
		<input type="number" name="numero" placeholder="ingres el numero de datos de un arreglo"id="">
		<button type="submit">calcular</button>
	</form>
	<br>
	<?php
	if ($_POST) {
		$numero = $_POST['numero'];
		for ($i = 1; $i < $numero; $i++) { ?>
		<form action="<?php echo base_url(); ?>index.php/ejercicio7_9/ejercicio9" method="post">
		<input type="number" name="num[]" placeholder="ingrese los numero del arresglo" id=""> <br> <br>
		<?PHP
			}
			?>
		<button type="submit">enviar</button>
	</form>
	<?php
	} ?>


</body>

</html>.
