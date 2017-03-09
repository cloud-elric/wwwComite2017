<?php
$debug = true;
$dataBase = array ();
if ($debug) {
	$dataBase = array (
				
			'connectionString' => 'mysql:host=localhost;dbname=comite_2017',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'root',
			//'charset' => 'utf8',
				
			'schemaCachingDuration'=>3600,
	);
} else {
	$dataBase = array (
			'connectionString' => 'mysql:host=mysql3000.mochahost.com;dbname=beto2gom_comite_2017',
			'emulatePrepare' => true,
			'username' => 'beto2gom_DgomDev',
			'password' => 'b4n4n4M0nk3y!',
			'charset' => 'utf8',
			
			'schemaCachingDuration'=>3600,		
	)
	;
}
return $dataBase;
