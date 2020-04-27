<?php
    function connect_db(){
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = '85stix';

        global $db;
        $db = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        
        if ($db->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    }

    function close_db(){
        global $db;
        $db->close();
    }

    function display_query($sql){
        global $db;
        $result = $db->query($sql);
        if (!$result) {
            die("Query to show fields from table failed");
        }

        echo "<table border='1'><tr>";
        // printing table headers
        $finfo = $result->fetch_fields();
        foreach($finfo as $column){
            echo "<td>{$column->name}</td>";
        }
        echo "</tr>\n";
        
        // printing table rows
        foreach($result as $row)
        {
            echo "<tr>";
            foreach($row as $cell)
                echo "<td>$cell</td>";
            echo "</tr>\n";
        }
    }
?>