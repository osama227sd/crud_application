<?php    
include('dbconnect.php');

?>



<?php

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $query = "delete from `students` where `id` = '$id' ";
    $result = mysqli_query($connect , $query);

    if(!$result){

        die("ERROR");
    }else{

        header('location:index.php?delete= tha data has been Deleted successfully');    

    }

}

?>