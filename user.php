<?php
    include 'connection.php';
    if(isset($_POST['submit'])) {
        $name = $_POST['name'] ;
        $email = $_POST['email'] ;
        $mobile = $_POST['mobile'] ;
        $password = $_POST['password'] ;

        $sql = "insert into user (name, email, mobile, password) values ('$name', '$email', '$mobile', '$password')" ;
        $inserted = $conn->query($sql);
        if($inserted === TRUE) {
            echo "Data updated successfully";
        } else {
            echo "Error: ". $sql . "<br>" . $conn->error;
        }
    }
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <title>Flower Management System</title>
</head>
<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter your mobile" name="mobile" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>