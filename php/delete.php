<?php 

$servername = "localhost" ;
$username = "root" ; 
$password = "" ; 
$dbname = "office" ; 
$conn = new mysqli($servername , $username , $password , $dbname ) ;


  $elid = $_GET["id"] ;


$sql = "DELETE FROM users WHERE id = '$elid' " ;

 $conn->query($sql) ; 


header('Location: http://localhost/abo/php/all.php');
  

?>
