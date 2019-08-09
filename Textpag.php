<?php
require ('datoscliente.php');
$clientes = new datoscliente();
$clientes->nombre=$_POST['Nombre'];
$clientes->apellido=$_POST['Apellido'];
$clientes->nodpi=$_POST['DPI'];
$clientes->telefono=$_POST['Telefono'];
$clientes->correo=$_POST['Miemail'];
$clientes->edad=$_POST['Miedad'];
$clientes->noches=$_POST['Numero'];
echo '<h2> INFORMACION REUNIDA <h2><br>';
echo 'Nombre: ', $clientes-> nombre;
echo '<br> Apellido: ', $clientes-> apellido;
echo '<br> No. DPI: ', $clientes-> nodpi;
echo '<br> Telefono: ', $clientes-> telefono;
echo '<br> correo: ', $clientes-> correo;
echo '<br> Edad: ', $clientes-> edad;
echo '<br> Cant. de Noches: ', $clientes-> noches;

?>