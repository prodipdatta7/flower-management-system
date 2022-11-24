<?php
    session_start();
    include 'connection.php';
    if(isset($_POST['save_flower'])) {
        $flower_name = $_POST['name'] ;
        $flower_color = $_POST['color'] ;
        $flower_desc = $_POST['description'] ;
        $sql = "insert into flowers (name, color, description) values ('$flower_name', '$flower_color', '$flower_desc')";

        if($conn->query($sql) === TRUE) {
            $_SESSION['message'] = "Flower added successfully";
            header("Location: index.php");
            exit(0);
        } else {
            $_SESSION['message'] = "Flower not added";
            header("Location: index.php");
            exit(0) ;
        }
    }

    if(isset($_POST['update_flower'])) {
        $flower_id = $_POST['flower_id'] ;
        $flower_name = $_POST['name'] ;
        $flower_color = $_POST['color'] ;
        $flower_desc = $_POST['description'] ;
        $sql = "UPDATE flowers
        SEt name='$flower_name', color='$flower_color', description = '$flower_desc'
        WHERE id='$flower_id'";

        if($conn->query($sql) === TRUE) {
            $_SESSION['message'] = "Flower updated successfully";
            header("Location: index.php");
            exit(0);
        } else {
            $_SESSION['message'] = "Flower not updated";
            header("Location: index.php");
            exit(0) ;
        }
    }
?>