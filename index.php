<!DOCTYPE html>
<html>
<head>
    
        <title> Data Management</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="css/low.css">
  

</head>
    <body>
        
   <?PHP  
                session_start();
                if(isset($_SESSION['user']))
                {
                    header('Location: php/index2.php') ;
                    exit();
                }
                $servername = "localhost" ;
                $username = "root" ; 
                $password = "" ; 
                $dbname = "office" ; 
                $conn = new mysqli($servername , $username , $password , $dbname ) ;
                
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                     $username = $_POST['username'] ; 
                     $password = $_POST['password'] ; 
                     $passwordhash = SHA1($password) ;
    $sql = "SELECT user , pass FROM admin WHERE  user = '$username' and  pass = '$passwordhash' " ;
        $result =$conn->query($sql)  ; 
            
        $count_rows = $result->num_rows ; 
         
            if ($count_rows > 0 ) {
                $_SESSION['user'] = $username;
                header('Location: php/index2.php') ;
                exit();
      }else {
                $error = "Your Login Name or Password is invalid";
                    echo $error;
                exit();
      }
}
     ?>
        <div class="login-container">

          <form method="POST" id="forma">
            <input type="text" name="username" id="username" placeholder="USERNAME" autocomplete="off"/>
              
            <input type="password" name="password" id="password" placeholder="PASSWORD" />
              
             <label>Show Password <input type="checkbox" id="check"></label>

            <input type="submit" value="Log In"  id="btn"/>
          </form>
        </div>
        <script src="script/low.js"></script>
    </body>    
</html>