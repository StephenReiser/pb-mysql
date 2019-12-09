<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <title>PHP Practice</title>
</head>
<body>
    <?php require_once "process.php"; ?>
    <div class = "row justify-content-center">
        <form action="process.php" method="POST">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="Enter your name">
            </div>
            <div class="form-group">
                <label>Location</label>
                <input type ="text" name="location" class="form-control"  value="Enter your location">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="save">Save</button>
            </div>

        </form>
        </div>
</body>
</html>