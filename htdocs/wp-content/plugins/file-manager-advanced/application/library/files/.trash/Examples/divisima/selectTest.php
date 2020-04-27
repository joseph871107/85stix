<HTML>
	 <body >
        <?php
            $db = '85stix';
            $dbuser = 'root';
            $dbpass = '';
            $dbhost = 'localhost';
            $second_db = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $second_db -> error);
			
            $sql="SELECT MemberName FROM Member.TABLES ";

            $result=$second_db->query($sql);
			$datalist = $result->fetchall();
            echo "<ul>";
            while ( $datalist -> $datainfo)
            {
                echo $datainfo."br";
            }
            echo "</ul>";
        ?>
    </body>
</HTML>