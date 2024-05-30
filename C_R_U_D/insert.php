<?php
include"config.php";
if(isset($_POST['submit'])){ 
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $address   = $_POST['address'];

    $sql     = "INSERT INTO product_details(name,email,address)VALUES('$name','$email','$address')";
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

            <div class="col-sm-6 mt-4 pt-4 border border-success"> 
                <form action="insert.php" method="POST" ecntype="multipart/form-data"> 
                    Name : <br>
                    <input type="text" name="name"><br><br>
                    E-Mail : <br>
                    <input type="text" name="email"><br><br>
                    Address : <br>
                    <input type="text" name="address"><br>
                    <button class="btn btn-success" name="submit">Insert</button>
                </form>
            </div>

            <div class="col-sm-3"></div>
        </div>
    </div>
    
</body>
</html>