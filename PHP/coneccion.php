<?php

<?php

	$DomainWeb 		= 'https://.com/';
	$DomainLocal 	= 'http://localhost/colaboraciones/Mi-Cristaleria//';
	$CDN  			= 'http://cdn..com/resources/permalink/';
	$subCDN 		= '../cdn-mi-cristaleria/resources/permalink/';

	$Host = 'localhost';	
	$DataBase = 'app-cristalerias-toro';	
	$User = 'root';	
	$Password = '';

	define('URL', $DomainLocal);
	define('CDN', $subCDN);
	define('subCDN', $subCDN);
	define('HOST', $Host);
	define('DB', $DataBase);
	define('USER', $User);
	define('PASSWORD', $Password);
	define('CHARSET', 'utf8');

	$coneccion = new mysqli("localhost", "root", "", "app-cristalerias-toro");

/*
if ($mysqli){
echo 'conectado a la base de datos';
}else{
echo 'no se ha conectado a la base de datos';
}
*/
