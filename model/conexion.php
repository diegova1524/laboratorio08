<?php 
$contrasena = "";
$usuario = "root";
$nombre_bd = "crud";

try {
	$bd = new PDO (
		username = doadmin
password = AVNS_MnLe_2zYyAPsnYajf9r
host = db-mysql-nyc1-60144-do-user-14089120-0.b.db.ondigitalocean.com
port = 25060
database = defaultdb
sslmode = REQUIRED
	);
} catch (Exception $e) {
	echo "Problema con la conexion: ".$e->getMessage();
}
?>
