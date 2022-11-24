<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="styles.css" rel="stylesheet">
    <title>Add Flower</title>
</head>
<body>
    <div>
        <div class="row">
                <div class="card mx-200">
                    <div>
                        <h3>Add Flower
                            <a href="index.php" class="btn btn-danger float-right">Back</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="form-label" for="name">Flower Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="color">Flower Color</label>
                                <input type="text" name="color" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="description">Flower Description</label>
                                <textarea name="description" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_flower" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</body>
</html>