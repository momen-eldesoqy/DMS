<?php
    session_start();
    if(isset($_SESSION['user']))
    {
        
    
?>
<!DOCTYPE html>
<html>
<head>
	<title> Data Management</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/est3lam.css">
	<script src="../script/jquery-3.3.1.min.js"></script>

</head>
<body>

<div id="form-main">
	<div id="form-div">
		<form class="form" id="form1" method="POST" action="data_from_date.php">
            <p class="name">
            <input name="date" type="date" data-date=""  class="validate[required,custom[onlyLetter],length[0,100]] feedback-input  code" placeholder="تاريخ اليوم " id="code" autocomplete="off"/>
			 </p>
            
 <div class="submit">
    <input type="submit" class='sub' value="بحث" id="button-blue"/>
       <div class="ease"></div>
</div>
         </form>
    </div>
<script>
$(document).ready(function(){
$("input").keyup(function(){
var coode = $('.code').val();
var coodelen = coode.length;
if (coodelen >= 3) {
$(".submit").show(1000)
}else
    {
        $(".submit").hide(1000)
    }
});
});
</script>
</body>
</html>
        <?php
}
else{
     header('Location: ../index.php') ;
}
?>