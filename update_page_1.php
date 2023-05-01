<?php include('header.php');?>
<?php include('dbconnect.php');?>

<?php
if(isset($_GET['id'])){

    $id= $_GET['id'];


$query= "select * from `students` where `id`= '$id' ";
$result = mysqli_query($connect , $query);

if(!$result){

    die("ERROR");
}else{

    $row = mysqli_fetch_assoc($result);
}
}

?>


<?php

if(isset($_POST['update_student'])){

    if(isset($_GET['id_new'])){
        $idnew = $_GET['id_new'];
    }

    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $age = $_POST['age'];


    $query = "update `students` set  `first_name`= '$fname', `last_name` = '$lname', `age`= '$age'  where `id`= '$idnew' ";
    $result = mysqli_query($connect , $query);
    
    if(!$result){

        die("ERROR");
    }else{
    
        header('location:index.php?update= tha data has been updated successfully');    
    }

}
?>

<form method="post" action="update_page_1.php?id_new=<?php echo $id; ?>">
            <div class="form_groub">
                    <label for="f_name">First Name</label>
                    <input type="text" name="f_name" class="form-control" value="<?php echo $row['first_name']?>">
                </div>
                <div class="form_groub">
                    <label for="l_name">Last Name</label>
                    <input type="text" name="l_name" class="form-control" value="<?php echo $row['last_name']?>">
                </div>
                <div class="form_groub">
                    <label for="age">age</label>
                    <input type="text" name="age" class="form-control" value="<?php echo $row['age']?>">
            </div>
            <input type="submit" class="btn btn-success" value="UPDATE" name="update_student">
</form>


<?php include('footer.php');?>
