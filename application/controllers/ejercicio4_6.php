<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ejercicio4_6 extends CI_Controller
{
	public function index()
	{
		$this->load->view('Vempleado');

	}
	public function ejercicio4()
	{
		
		$numero = rand(1,100); 
		echo " el numero es ",$numero, "<br><br><br>";
		if ($numero%2==0) {
			echo " el numero es par ", $numero;
		}
		else {
			echo " el numero es impar ", $numero;
		}
	}
	public function ejercicio5()
	{
		$numero_ale = rand(1,20);
		echo "<h2><b>NUMERO MAYOR O MERO ENTRE </b></h2>";
		if ($numero_ale > 10) {
			echo "el numero es mayo que 10 <br>";
		} 
		elseif ($numero_ale < 10) {
			echo "el numero es menor que 10 <br> ";
		}
		echo "<h2><b>LOS NUMERO PARES</b></h2>";
		for ($i=0; $i < $numero_ale; $i++) { 
			$arr[]=$i;
			//echo $arr[$i], "<br>";
			if ($arr[$i] % 2 == 0) {
				echo " el numero es par ", $arr[$i], "<br>";
			} else {
				echo " el numero es impar ", $arr[$i], "<br>";
			}
		}

	}
	public function ejercicio6()
	{
	}
}
 