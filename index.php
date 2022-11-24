<?php
    session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Flower Management System</title>
</head>
<body>
    <div class="container my-5">
        <?php include 'message.php'; ?>
        <!-- <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
          <h4>Flower Dashboard</h4>
          <a href="flower_add.php" class="btn btn-primary float-end">Add Flower</a>
        </nav> -->
        <nav class="navbar navbar-expand-lg bg-light" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <h4>Flower Dashboard</h4>
                <a href="flower_add.php" class="navbar-brand btn btn-primary float-end">Add Flower</a>
            </div>
        </nav>
        <div class="row">
            <?php
                include 'connection.php';
                $sql = "select * from flowers";
                $res = $conn->query($sql);
                if($res->num_rows > 0) {
                    while ($row=$res->fetch_assoc()) {
                        ?>
                        <div class="card m-1" style="width: 20rem;">
                            <!-- <img style="max-height: 200px;" src="images/<?=$row['image_url']?>" alt=""> -->
                            <div class="card-body">
                                <h5 class="card-title"><?=$row['name']?></h5>
                                <h6 class="card-subtitle mb-2 text-mute">Color: <?=$row['color']?></h6>
                                <div class="card-text overflow-auto" style="max-height: 160px; min-height: 160px;">
                                    <?=$row['description']?>
                                </div>
                                <div class="row mt-2">
                                    <a href="update.php?id=<?=$row['id']?>" class="col btn btn-success btn-sm">Update</a>
                                    <span class="col"></span>
                                    <a href="delete.php?id=<?=$row['id']?>" class="col btn btn-danger btn-sm">Delete</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
            ?>
        </div>
    </div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>