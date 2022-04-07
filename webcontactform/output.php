<?php
    if(isset($_POST['name'])){
        $name = htmlentities($_POST['name']);
    }
    if(isset($_POST['email'])){
        $email = htmlentities($_POST['email']);
    }
    if(isset($_POST['issue'])){
        $issue = htmlentities($_POST['issue']);
    }    
    if(isset($_POST['comment'])){
        $comment = htmlentities($_POST['comment']);
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
    <title>Form Submission</title>
</head>
<body>
    <div class="container mt-3">
        <h1><?php echo $name; ?>, thank you for your feedback!</h1>
        <h2 class="mb-3">Here are the details that you have submitted</h2>
        <p>Your name: <?php echo $name;?></p>
        <p>Your email: <?php echo $email;?></p>
        <p>Issue: <?php echo $issue;?></p>
        <p>Your comments: <?php echo $comment;?></p>
    
</div>
    
</body>
</html>