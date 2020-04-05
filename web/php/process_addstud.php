

     <?php
     
     //set up for mysql Connection
     $dbhost = 'localhost';
     $dbuser = 'root';
     $dbpass = '';
     $conn = mysql_connect($dbhost, $dbuser, $dbpass);
     //test if the connection is established successfully then it will proceed in next process else it will throw an error message
     if(! $conn )
     {
       die('Could not connect: ' . mysql_error());
     }
      
     //we specify here the Database name we are using
     mysql_select_db('studentdb');
     $f_name = $_POST['f_name'];
     $l_name = $_POST['l_name'];
     $email	= $_POST['email'];
     $imge= $_POST['imge'];
      
     //It wiil insert a row to our tblstudent`
     $sql = "INSERT INTO `studentdb`.`tblstudent` (`s_id`, `firstname`, `lastname`, `email`, `imge`) 
             VALUES (NULL, '{$f_name}', '{$l_name}', '{$email}', '{$imge}');";
     //we are using mysql_query function. it returns a resource on true else False on error
     $retval = mysql_query( $sql, $conn );
     if(! $retval )
     {
       die('Could not enter data: ' . mysql_error());
     }
     ?>
                         <script type="text/javascript">
                             alert("New Record is Added to the Database");
                             window.location = "addStudent.php";
                         </script>
                         <?php
     //close of connection
     mysql_close($conn);
     ?>