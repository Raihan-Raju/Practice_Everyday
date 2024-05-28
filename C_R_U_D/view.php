

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
               <?php
               include"config.php";
               $table_data   = "SELECT * FROM product_details";
               $query        = mysqli_query($conn,$table_data);

               echo "<table class='table table-success border border-success'> 
                        <tr> 
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>";
                while($showData = mysli_fetch_assoc( $query )){ 

                    echo 
                    <tr> 
                    <td>$showData[id]</td>
                    <td>$showData[name]</td>
                    <td>$showData[email]</td>
                    <td>$showData[address]</td>
                    <td> 
                        <span><a href=""></a></span>
                    </td>
                    </tr>

                }

               ?>

            </div>

            <div class="col-sm-3"></div>
        </div>
    </div>
    
</body>
</html>