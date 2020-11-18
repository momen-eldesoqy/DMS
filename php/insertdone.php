    <?php

$servername = "localhost" ;
$username = "root" ;
$password = "" ;
$dbname = "office" ;

$conn = new mysqli($servername , $username , $password , $dbname ) ;

 $elname= $_POST["elname"] ;
 $feature = $_POST["feature"] ;
 $date = $_POST["date"] ;
 $decision = $_POST["decision"] ;
 $orders = $_POST["orders"] ;
 $enemy = $_POST["enemy"] ;
 $address = $_POST["address"] ;
 $subject = $_POST["subject"] ;
 $rolnum = $_POST["rolnum"] ;


$sql = "INSERT INTO `users` (`name`, `feature`, `date`, `decision`, `orders`, `enemy`, `address`, `subject`, `rolnum`) VALUES ('$elname', '$feature', '$date', '$decision', '$orders', '$enemy', '$address', '$subject', '$rolnum')";

 $conn->query($sql) ;


header('Location: http://localhost/abo/php/all.php');


?>
