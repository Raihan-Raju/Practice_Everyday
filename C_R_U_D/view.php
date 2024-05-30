
<?php include"config.php";?>
<?php
    if(isset($_GET['deleteid'])){ 
        $deleteId  = $_GET['deleteid'];
        $sql     = "DELETE FROM product_details WHERE id='$deleteId'"; 
        if(mysqli_query($conn,$sql) == TRUE){ 
            header("location:view.php");
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container"> 
        <div class="row"> 
            <div class="col-sm-3"></div>

            <div class="col-sm-6 mt-4 pt-4 border border-success "> 
                <h1 class='bg-success text-center text-white'>User's Information</h1>
                <h3><a href="insert.php" class='text-decoration-none'>Add User</a></h3>
               <?php
               include"config.php";
               $table_data   = "SELECT * FROM product_details";
               $query        = mysqli_query($conn,$table_data);

               echo "<table class='table table-success'> 
                        <tr> 
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>";
                while($showData = mysqli_fetch_assoc($query)){ 

                    echo 
                    "<tr> 
                        <td>$showData[id]</td>
                        <td>$showData[name]</td>
                        <td>$showData[email]</td>
                        <td>$showData[address]</td>
                        <td> 
                        <span class='btn btn-success'><a href='edit.php?id={$showData['id']}' class='text-decoration-none text-white'>Edit</a></span>
                        <span class='btn btn-danger'><a href='view.php?deleteid={$showData['id']}' class='text-decoration-none text-white'>Delete</a></span>
                    </td>
                        </td>
                    </tr>";

                }

               ?>

            </div>

            <div class="col-sm-3"></div>
        </div>
    </div>
    
</body>
</html>