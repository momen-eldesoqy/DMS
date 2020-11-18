<?php
    session_start();
    if(isset($_SESSION['user']))
    {
        
    
?>
<!DOCTYPE html>
<html>
<head>
    <title> Data Management</title>
    <link rel="stylesheet" href="../css/data.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style>
             tr:hover {background-color: #ddd;}
            td, th { 
		padding: 20px; 
		border: 1px solid #ccc; 
        text-align: right;
		}
        .glyphicon
        {
            font-size: 25px;
            color: #c32727;
        }
        
        </style>
    </head>
<body>
    <div class="front">
        <img src="../images/neqpa.jpg">
        <h1>أ/ أحمد أبوالعنين</h1>
        
    </div>
        <table>
            
            <thead>
                
            <tr>
                <th>حذف</th>
                <th>رقم الرول</th>
                <th>الموضوع</th>
                <th>مكان الجلسه</th>
                <th>الخصم</th>
                <th>الطلبات</th>
                <th>القرار</th>
                <th>تاريخ الجلسه</th>
                <th>صفته</th>
                <th>الموكل</th>
            </tr>
                
            </thead>
            <tbody>
            <?php
                $servername = "localhost" ;
                $username = "root" ; 
                $password = "" ; 
                $dbname = "office" ; 
                $conn = new mysqli($servername , $username , $password , $dbname ) ;
                    
            $sql = "SELECT * FROM users " ;
            $result  = $conn->query($sql) ; 
            
            while($row = $result->fetch_assoc()) {
            ?>
		  
              
            <tr>
 <td><a href="delete.php?id=<?php echo $row["id"]; ?>"><span class="glyphicon glyphicon-remove"></span></a></td>
                <td><?php echo $row["rolnum"]; ?></td>
                <td><?php echo $row["subject"]; ?></td>
                <td><?php echo $row["address"]; ?></td>
                <td><?php echo $row["enemy"]; ?></td>
                <td><?php echo $row["orders"]; ?></td>
                <td><?php echo $row["decision"]; ?></td>
                <td><?php echo $row["date"]; ?></td>
                <td><?php echo $row["feature"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                
            </tr>
              <?php
                }
            }else{
                     header('Location: ../index.php') ;
                 }
                ?>

		</tbody>
	</table>
    
    </body>
    <script src="../script/jquery-3.3.1.min.js"></script>
    <script src="../script/bootstrap.min.js"></script>
</html>