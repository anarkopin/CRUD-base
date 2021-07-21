<?php 
	class Conectar
	{
		public static function ConectaDATA()
		{
			$cn = new mysqli("localhost","root","","empresa");
			return $cn;	
		}

	}
?>