
<table border="1" cellspacing="0">
    <tr>
        <th>Id</th>
        <th>descripcion </th>
        <th>Nombres</th>
        <th>cantidad</th>
        <th>precio</th>
        <th>modelo</th>
        <th> </th>
        <th>&nbsp;</th>
    </tr>
<?php
foreach($productos as $producto){
echo "<tr>".
    "<td>".$producto->id."</td>".
    "<td>".$producto->nombres."</td>".
    "<td>".$producto->cantidad."</td>".
    "<td>".$producto->precio."</td>".
    "<th>"$producto->modelo>"</th>"

    "<td>".
    "<form method='get' action='asistencia/".$producto->id."/edit'>
                <input type='submit' value='Marcar Asistencia'>";
?>
@csrf
<?php
echo "</form>
