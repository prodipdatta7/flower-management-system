<?php
    session_start();
    include 'connection.php';
    if(isset($_GET['id'])) {
        $flower_id = $_GET['id'] ;
        $sql = "DELETE FROM flowers WHERE id='$flower_id'";
        if($conn->query($sql) === TRUE) {
            $_SESSION['message'] = "Flower deleted successfully";
            header("Location: index.php");
            exit(0);
        } else {
            $_SESSION['message'] = "Flower not deleted";
            header("Location: index.php");
            exit(0) ;
        }
    }
?>