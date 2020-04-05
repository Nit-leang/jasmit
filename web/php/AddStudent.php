

    <?php
    //set up for mysql Connection
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $conn = mysql_connect($dbhost, $dbuser, $dbpass);
    //test if the connection is established successfully then it will proceed in next process else it will throw an error message
    if(! $conn ){
      die('Could not connect: ' . mysql_error());
    }
     
    //we specify here the Database name we are using
    mysql_select_db('userdb');
    //It wiil insert a row to our tbluser`
    $sql = "INSERT INTO `userdb`.`tbluser` (`s_id`, `firstname`, `lastname`, `email`, `imge`) 
		VALUES (NULL, 'Joken', 'Villanueva', '<a href="mailto:joken000189561@gmail.com" rel="nofollow">joken000189561@gmail.com</a>', 'file');";
    //we are using mysql_query function. it returns a resource on true else False on error
    $retval = mysql_query( $sql, $conn );
    if(! $retval )
    {
      die('Could not enter data: ' . mysql_error());
    }
    echo "Entered data successfully\n";
    //close of connection
    mysql_close($conn);
    ?>