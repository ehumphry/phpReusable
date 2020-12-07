<?php
    /*This chunck of code queries an entire table and fetches the results one row 
    at a time */

    
    // require_once 'login.php' insert login here

    //insert connection here


    $query = "SELECT * FROM table";    //replace table with desired table
    $result = $connection ->query($query);

    if (!$result) die ("Fatal Error");

    $rows = $result->num_rows;

    for ($j = 0; $j < $rows; $j++){
        $result->data_seek($j);
        //do something with the data(
        echo 'Column Name: ' .htmlspecialchars($result->fetch_assoc()['Column Name']) .'<br>';
        /*repeat as many times as there are Columns in table that was queried changing 
        column name each time */
    }

    $result->close();
    $conn->clost();
?>