<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5 "><a href="crud.php" class="text-light">Add User</a></button>
    </div>
    <table class="table">
        <thead>
            <tr>
            <th>sl no</th>
            <th>register no</th>
            <th>name</th>
            <th>age</th>
            <th>department</th>
            <th>email</th>
            <th>password</th>
            <th>opration</th>
            </tr>
        </thead>
        <tbody>
            <?php
           
            $sql="select * from crud";
            $result=mysqli_query($con,$sql);
            if($result){
               
                $row=mysqli_fetch_assoc($result);
                while($row=mysqli_fetch_assoc($result)){
                    $id=$row['id'];
                    $reg_no=$row['reg_no'];
                    $name=$row['name'];
                    $age=$row['age'];
                    $department=$row['department'];
                    $email=$row['email'];
                    $password=$row['password'];
                    echo'<tr>
                        <th scope="col">'.$id.'</th>
                        <td>'.$reg_no.'</td>
                        <td>'.$name.'</td>
                        <td>'.$age.'</td>
                        <td>'.$department.'</td>
                        <td>'.$email.'</td>
                        <td>'.$password.'</td>
                        <td>
                        <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                       </td>
                    </tr>';}
            }
           

            ?>
           
        </tbody>
        
    </table>
</body>
</html>
