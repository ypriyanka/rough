<?php 

 include("db.php");
$databasee = new database('localhost', 'root', 'vsspl');
$databasee->connectdb();
$databasee->select('bug_tracker');
$val="checkout";
echo $result2 = mysql_query('SELECT ID FROM bugs where Project LIKE "%'.$val.'%"');	

 while($row = mysql_fetch_assoc($result2))
 {
 	var_dump($row);
 }
?>