<HTML>
	 <body onselectstart="return false;" ondragstart="return false;" oncontextmenu="return false;" oncopy="return false;">
    
    //搜尋並印在網頁上
    <?php
    	//載入我們寫的PHP函式庫
    	require_once("./functions.php");
		//與資料庫連線
        connect_db();
		//將搜尋結果印在網頁上
    	display_query("SELECT UID FROM 85stix.member");	
		//與資料庫斷線
        close_db();
    ?>
        
    //新增資料
    <?php
		//載入我們寫的PHP函式庫
    	require_once("./functions.php");
		//與資料庫連線
        connect_db();
		//取得全域變數db
		global $db;
		//設定SQL語法至變數sqlsyntax
		$sqlsyntax = "INSERT INTO adminstrator (Account, Password) VALUES ('test', 'realy')");
        //db執行sqlsyntax的指令
		$db->query($sqlsyntax);
		//將搜尋結果印在網頁上
    	display_query("SELECT UID FROM 85stix.member");	
		//與資料庫斷線
        close_db();
    ?>
        
    </body>
</HTML>