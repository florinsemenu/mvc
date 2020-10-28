<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
<h1>Lista de usuarios</h1>
<!--<ul>-->
<table border="solid">
<?php
foreach ($users as $user){
//echo "<li>Usuario: $user[0]: $user[1] </li>"
echo "<tr>";
echo "<td>Usuario: $user[0] </td>";
echo "<td> $user[1] </td>";
echo "<td><a href='index.php?method=show&id=$user[0]'>Ver</a></td>";
echo "</tr>";}
?>
</table>
<!--</ul>-->
</body>
</html>