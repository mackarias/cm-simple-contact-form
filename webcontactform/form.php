<?php
    if(isset($_POST['name'], $_POST['email'])){
        echo 'yes';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="mb-3 mt-3">
            <form method="POST" action="output.php">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control"><br>
                <label for="email">Email</label>
                <input type="text" id="email" name="email" class="form-control"><br>
                <label for="issue">Issue</label>
                <select name="issue" id="issue" class="form-select">
                    <option value="query">Query</option>
                    <option value="feedback">Feedback</option>
                    <option value="complaint">Complaint</option>
                    <option value="other">Other</option>
                </select><br>
                <label for="comment">Comments</label>
                <textarea type="text" rows="5" id="comment" name="comment" class="form-control"></textarea><br>
                <input type="submit" class="btn btn-primary">
            </form>
        </div>
    </div>
</body>
</html>