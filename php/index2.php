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
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <style>
       .back
        {
            width: 605px;
            height: 190px;
            margin: auto;
            background-image: url("../images/bok.png");
            background-repeat: no-repeat;
            background-size: contain;
            position: relative;
        }
        .clock
        {
            color: #fe7815;
            font-size: 50px;
            font-family: fantasy;
            float: right;
        }   
        .btn-group
        {
            margin-left: 17%;
             margin-top: 55px;
                 
        }
        .btn
        {
               margin-right: 150px;
               padding: 30px 0;
               line-height: 0.1; 
               font-size: 19px;
               margin-bottom: 25px;
        }
        .logo
        {
            float: left;
            width: 150px;
            height: 150px;
            background-image: url("../images/download.png");
            background-repeat: no-repeat;
            background-size: contain;
        }
    .dropdown-menu
        {
        top: 42%;
        width: 100%;
        text-align: center;
        }
        .dropdown-menu > li > a
        {
            font-weight: bold;
            font-size: 20px;
        }
        .dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus
        {
            background-color: #d2d2d2;
        }
    </style>
</head>
<body>
        <div id="clock" class="clock"></div>
        <div class="logo"></div>
        <div class="back"></div>
        <div class="btn-group">
            <a href="insert.php" class="btn btn-warning btn-lg form-control">اضافة جديد</a>
            <button type="button" class="btn btn-primary btn-lg form-control dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="caret"></span> استعلام </button>
            <ul class="dropdown-menu">
                <li><a href="est3lam.php">بحث بالاسم</a></li>
                <li><a href="est3lam2.php">بحث بالتاريخ</a></li>
            </ul>
            <a href="all.php" class="btn btn-success btn-lg form-control"> عرض الكل  </a>
            <a href="logout.php" class="btn btn-danger btn-lg form-control"> تسجيل الخروج  </a>
        </div>

    <script src="../script/jquery-3.3.1.min.js"></script>
    <script src="../script/clock.js"></script>
    <script src="../script/bootstrap.min.js"></script>

</body>
</html> 
<?php
}
else{
     header('Location: ../index.php') ;
}
?>