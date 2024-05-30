<?php
 include 'connect.php';
 $id=$_GET['updateid'];
 if(isset($_POST['submit'])){
    $reg_no=$_POST['reg_no'];
    $name=$_POST['name'];
    $age=$_POST['age'];
    $dept=$_POST['department'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $sql="update crud set id=$id,reg_no='$reg_no',name='$name',age='$age',department='$dept',email='$email', password='$password' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD FILE</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<body>
    <div class="container my-5">
        <form method="post" >
        <div class="form-group">
                <label >Register Number</label>
                <input type="text" placeholder="Enter your Reg no"class="form-control" name=" reg_no" required>
            </div>
            <div class="form-group my-3">
                <label >Name</label>
                <input type="text" placeholder="Enter your name"class="form-control" name="name" required>
            </div>
            <div class="form-group my-3">
                <label >Age</label>
                <input type="text" placeholder="Enter your age"class="form-control" name="age" required>
            </div>
            <div class="form-group my-3">
                <label >Department</label>
                <input type="text" placeholder="Enter your dept"class="form-control" name="department" required>
            </div>
            <div class="form-group my-3">
                <label >Email</label>
                <input type="email" placeholder="Enter your email"class="form-control" name="email" required>
            </div>
            <div class="form-group my-3">
                <label >Password</label>
                <input type="password" placeholder="Enter your password"class="form-control" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary my-3" name="submit">Update</button>
        </form>
    </div>

    
</body>
</html>