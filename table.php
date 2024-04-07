
<?php 
include('Database.php');
$users= new Database('users');

  $allUsers = $users->Select();



?>
<?php while($row = $allUsers->fetch_assoc()):?>
<tr>
      <th scope="row"><?=$row['id']?></th>
      <th scope="row"><?=$row['Frist']?></th>
      <th scope="row"><?=$row['Last']?></th>
      <th scope="row">
        <form action="update.php" method ='GET'>
            <input type="submit" value="edit">
            <input type="hidden" value="<?=$row['id']?>">
        </form>
      </th>
     
</tr>


<?php endwhile; ?>