<HTML>
	 <body onselectstart="return false;" ondragstart="return false;" oncontextmenu="return false;" oncopy="return false;">
        <?php
            $db = '85stix';
            $dbuser = 'root';
            $dbpass = '';
            $dbhost = 'localhost';
            $second_db = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $second_db -> error);

            $sql="SELECT TABLE_NAME FROM information_schema.TABLES ";
            $result=$second_db->query($sql);
            echo "<ul>";
            while ( $tables = $result->fetch_assoc())
            {
                echo "<li>".$tables['TABLE_NAME'];
                echo "</li>";
            }
            echo "</ul>";
        ?>
    </body>
</HTML>