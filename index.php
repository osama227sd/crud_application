<?php include('header.php');?>
<?php include('dbconnect.php');?>

    <div class="box1">
        <h2>ALL STUDENTS</h2>
        <button type="button"  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD STUDENT</button>
    </div>
    <table class="table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fisrt Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>

        <?php
        $query = "select * from `students`";
        $result = mysqli_query($connect , $query);

        if(!$result){

            die("noooooooo");
        }else{

         while($row  = mysqli_fetch_assoc($result)){



        ?>
            <tr>
                <td><?php echo $row ['id']; ?></td>
                <td><?php echo $row ['first_name']; ?></td>
                <td><?php echo $row ['last_name']; ?></td>
                <td><?php echo $row ['age']; ?></td>
                <td><a href="update_page_1.php?id=<?php echo $row ['id']; ?>" class="btn btn-success">Update</a></td>
                <td><a href="delete_page_1.php?id=<?php echo $row ['id'];?> " class="btn btn-danger">Delete</td>
            </tr>
        <?php
        }
    }
         ?>
        </tbody>
    </table>

    <!-- Modal -->
    <form method="post" action="insert_data.php">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD STUDENT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
            <div class="form_groub">
                <label for="f_name">First Name</label>
                <input type="text" name="f_name" class="form-control">
            </div>
            <div class="form_groub">
                <label for="l_name">Last Name</label>
                <input type="text" name="l_name" class="form-control">
            </div>
            <div class="form_groub">
                <label for="age">age</label>
                <input type="text" name="age" class="form-control">
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" value="ADD" name="add-student">
      </div>
    </div>
  </div>
</div>

</form> 

<?php

if(isset($_GET['message'])){

    echo "<h3 class='red'>". $_GET['message'] . "</h3>";
}


if(isset($_GET['insert_msg'])){

    echo "<h3 class='green'>". $_GET['insert_msg'] . "</h3>";
}


if(isset($_GET['delete'])){

    echo "<h3 class='red'>". $_GET['delete'] . "</h3>";
}

?>
<?php include('footer.php');?>