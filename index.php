<!DOCTYPE html>
<html>
<body>
<h1>  Data pengguna </h1>
<?php
require_once('DB.php');

$users = DB::getInstance()->query('SELECT * FROM `pengguna`');
if ($users->count()) {
    echo "<table border=1>
    <tr>
    <th>nip</th>
    <th>nama </th>
    </tr>";

    foreach($users->results() as $user){
    
       echo "<tr>";

       echo "<td>".$user->nip."</td>";
     
       echo "<td>".$user->nama."</td>";

       echo "</tr>";

    }
    echo "</table>";
}
?>

</body>
</html> 
