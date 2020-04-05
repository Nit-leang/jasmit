<h3>index user</h3>
<table border ="1">
<tr>
        <th>No</th>
        <th>Name</th>
        <th>Age</th>
        <th>Email</th>
</tr>
<?php foreach ($user as $key=>$name){?>

<tr>
        <td><?php echo $key+1; ?><t/d>
        <td><?php echo $name; ?></td>
        
        <td><?php echo $Age; ?></td>
        <td><?php echo $Email; ?></td>

</tr>
<?php }?>
</table>