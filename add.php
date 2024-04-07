<?php
include('Database.php');
$users= new Database('users');
if(isset($_POST['Last']) && isset($_POST['Frist'])){
    $users->update($_POST['id'],$_POST);
  header('Location: index.php');
}
