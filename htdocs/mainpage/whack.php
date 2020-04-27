<?php
    //載入我們寫的PHP函式庫
    require_once("./functions.php");
    //與資料庫連線
    connect_db();
?>

<HTML>
    <?php /*
	 <body onselectstart="return false;" ondragstart="return false;" oncontextmenu="return false;" oncopy="return false;">
    <div class="change container  pl-5 pr-5 pb-5">
    <div>
    <div class="pt-5">
    <h1>註冊</h1>
    </div>

    <div class="form-group">
    <label for="account">帳號</label>
        <input type="account" class="form-control" name="account" placeholder="Account">
        </div>
        <div class="form-group">
        <label for="password">密碼</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-group">
            <label for="password2">再次輸入密碼</label>
                <input type="password" class="form-control" name="password2" placeholder="Password">
                </div>
                <span class='message'></span>
                
                <button id="pass" type="submit" class="btn btn-primary">註冊</button>
                </div>
     <form action='' method="post">
         帳號: <input type="test" name="Account">
         密碼: <input type="test" name="Password">
         <input type="submit" name="submit" value="送出表單">
     </form>
             */?>
                
     <?php
         function storedata(){
			 global $db;
             $acc = $_POST['username'];
             $psw = md5($_POST['password']);
             
             $sqlsyntax=("SELECT * FROM 85stix.adminstrator WHERE Account='$acc'");
             $result = $db->query($sqlsyntax);
             while(($row_result = $result->fetch_assoc()) !== null)
                 die('User '.$acc.' already exist.');
             
             $sqlsyntax=("INSERT INTO adminstrator (Account, Password) VALUES ('$acc', '$psw')");
             $db->query($sqlsyntax);
             display_query("SELECT * FROM 85stix.adminstrator");
             //與資料庫斷線
             close_db();
         }
     ?>  
    <body>
      
      <div class = "container form-signin">
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
                storedata();
            }
         ?>
      </div> <!-- /container -->
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            帳號：<input type = "text" class = "form-control" 
               name = "username" placeholder = "Account" 
               required autofocus></br>
            密碼：<input type = "password" class = "form-control"
               name = "password" placeholder = "Password" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
         
      </div> 
      
   </body>      
    
    
    </body>
</HTML>