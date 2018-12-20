<?php
require_once "../modelos/conexion.php";

$proyecto = $_POST['proyecto'];
$etapa = $_POST['etapa'];

$stmt = Conexion::conectar()->prepare("SELECT * FROM proyectos WHERE proyecto = '$proyecto' AND etapa ='$etapa' AND estado= '0' ");
$stmt -> execute();
echo '<option value="0">Seleccione</option>';
while ( $row = $stmt->fetch() )
{
	echo '<option value="' . $row['terreno']. '">' . $row['terreno'] . '</option>' . "\n";
}
$stmt = null;