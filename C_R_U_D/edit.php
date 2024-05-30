 <?php/*
include "config.php"; // ডাটাবেস কানেকশন ফাইল ইনক্লুড করুন

// যদি 'id' GET প্যারামিটার সেট করা থাকে, তাহলে ইউজারের বর্তমান তথ্যগুলি ফেচ করুন
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = $conn->prepare("SELECT * FROM product_details WHERE id = ?");
    $query->bind_param("i", $id);
    $query->execute();
    $result = $query->get_result();
    $user = $result->fetch_assoc();
    $query->close();
}

// যদি ফর্ম সাবমিট করা হয়, তাহলে ইউজারের তথ্য আপডেট করুন
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $update_query = $conn->prepare("UPDATE product_details SET name = ?, email = ?, address = ? WHERE id = ?");
    $update_query->bind_param("sssi", $name, $email, $address, $id);
    $update_query->execute();
    $update_query->close();

    // আপডেটের পর মূল পেজে রিডাইরেক্ট করুন
    header("Location: view.php");
    exit;
}
 */?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 mt-4 pt-4 border border-success">
                <h1 class='bg-success text-center'>Edit User Information</h1>
                <form action="edit.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $user['name']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $user['email']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="<?php echo $user['address']; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</body>
</html> --> 
