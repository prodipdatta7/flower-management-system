<?php include 'connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Category</title>
</head>
<body>
    <?php
        if(isset($_GET['category_name'])){
            $name = $_GET['category_name'];
            $date = $_GET['category_entry_date'];
            $sql = "INSERT INTO category (category_name, category_entry_date)
                            VALUES('$name', '$date')";
            if($conn->query($sql) === TRUE) {
                echo "Data inserted successfully";
            }
            else {
                echo "Error: ". $sql . "<br>" . $conn->error;
            }
        }
    ?>
    <form action="add_category.php" method="GET">
        <label>Category:</label> <br>
        <input type="text" name="category_name"> <br>
        <label>Category Entry Date: </label> <br>
        <input type="date" name="category_entry_date"> <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>