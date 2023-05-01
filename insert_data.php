<?php
include('dbconnect.php');

if(isset($_POST['add-student'])){

    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $age = $_POST['age'];

    if($fname == "" || empty($fname) ||$lname == "" || empty($lname) ||$age == "" || empty($age)){

        header('location:index.php?message= you need to fill data in form');
    } else{

        $query  = "insert into `students`(`first_name` , `last_name` , `age`) values('$fname' , '$lname' , '$age')";

        $result= mysqli_query($connect , $query);

        if(!$result){

            die('error in data inserted');
        }
        else{

            header('location:index.php?insert_msg= tha data has been added successfully');

        }
    }
    
}




?>