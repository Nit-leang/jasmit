<!DOCTYPE html>
<html>
<head>
     <meta chrset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Page Title</title>
     <h3> Add User</h3>
     <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
     <form action="add.php" method="post"enctype="multipart/form-data">
           <label for ="file">Firstname:</label>
           <input type="txt" name="name"/><br/>
           <label for ="file">Lastname:</label>
           <input type="txt" name="name"/><br/>
           <label for ="file">Email:</label>
           <input type="txt" name="name"/><br/>
           <label for ="file">Image:</label>          
           <input type="file" name="file" id="file" /><br/>
           <input type="submit" name="submit" value="Submit" />        
     </form>
</body>
</html>