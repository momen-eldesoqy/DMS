<?php
    session_start();
    if(isset($_SESSION['user']))
    {
        
    
?>
<!DOCTYPE html>
<html>
<head>
	<title> Data Management</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="../css/insert.css">
</head>
<body>
     <div id="clock" class="clock"></div>
<div class="container">
    <form  action="insertdone.php" method="POST">
        <input type="text" name="elname" placeholder="اسم الموكل" autocomplete="off"><br>
        <input type="text" name="feature" placeholder="صفته" autocomplete="off"><br>
        <input type="date" name="date" data-date="" placeholder="تاريخ الجلسة" autocomplete="off"><br>
        <input type="text" name="decision" placeholder="القرار" autocomplete="off"><br>
        <input type="text" name="orders" placeholder="الطلبات" autocomplete="off"><br>
        <input type="text" name="enemy" placeholder="الخصم" autocomplete="off"><br>
        <input type="text" name="address" placeholder="مكان الجلسه" autocomplete="off"><br>
        <input type="text" name="subject" placeholder="الموضوع" autocomplete="off"><br>
        <input type="text" name="rolnum" placeholder="رقم الرول" autocomplete="off"><br>

        <input type="submit" value="إضافة">

    </form>
</div>
    <script src="../script/clock.js"></script>
</body>
</html>
<?php
}
else{
     header('Location: ../index.php') ;
}
?>