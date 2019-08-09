<?php
require ("datoscliente.php");
$clientes= new datoscliente();
$clientes->nombre=$_POST['Nombre'];
$clientes->apellido=$_POST['Apellido'];
$clientes->nodpi=$_POST['DPI'];
$clientes->telefono=$_POST['Telefono'];
$clientes->correo=$_POST['Miemail'];
$clientes->edad=$_POST['Miedad'];
$clientes->noches=$_POST['Numero'];
echo '<h2> INFORMACION REUNIDA <h2><br>';
echo 'Nombre: ', $clientes-> nombre;
echo 'Apellido: ', $clientes-> apellido;
echo 'No. DPI: ', $clientes-> nodpi;
echo 'Telefono: ', $clientes-> telefono;
echo 'correo: ', $clientes-> correo;
echo 'Edad: ', $clientes-> edad;
echo 'Cant. de Noches: ', $clientes-> numero;

?>