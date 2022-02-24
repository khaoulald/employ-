<?php 
include("connect.php");

$id  = $_GET['id'];
if(isset($id)){
    $query = "DELETE FROM employee WHERE matricule='$id'";
    $result = mysqli_query($con,$query);
    if($result){
        header('location:list.php');
    }else{
        echo"error";
    }
}
?>
