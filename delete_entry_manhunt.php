<?php
include( "config.php" );

if(isset($_POST['deleteItem']) and is_numeric($_POST['deleteItem']))
{
  $id = $_POST['deleteItem'];
  $count=$bdd->prepare("DELETE FROM manhunt WHERE id=:id");
  $count->bindParam(":id",$id,PDO::PARAM_INT);
  $count->execute();
};

header('Location: manhunt.php');
?>