<?php
    //載入我們寫的PHP函式庫
    require_once("./functions.php");
    //與資料庫連線
    connect_db();
    global $db;
?>

<HTML>
	 <body>
      
      <div class = "container form-signin">
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
                
                
                    $acc = $_POST['username'];
                    $psw = $_POST['password'];
                    $sqlsyntax=("INSERT INTO adminstrator (Account, Password) VALUES ('$acc', '$psw')");
                echo $sqlsyntax;
                    $db-> query($sqlsyntax);
                    display_query("SELECT * FROM 85stix.adminstrator");
                    //與資料庫斷線
                    close_db();
                
            }
         ?>
      </div> <!-- /container -->
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "username = tutorialspoint" 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password = 1234" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
         
      </div> 
      
   </body>
    /*<?php
		//設定SQL語法並執行
        if (isset($_POST['submit'])) {
            echo "WWWWW";
            storedata();
        }        
        function storedata(){
            global $db;
            $acc = $_POST['account'];
			$psw = $_POST['password'];
            $sqlsyntax=("INSERT INTO adminstrator (Account, Password) VALUES ($acc, $psw)");
            $db-> query($sqlsyntax);
            display_query("SELECT * FROM 85stix.adminstrator");
            //與資料庫斷線
            close_db();
        }
    ?>*/
</HTML>