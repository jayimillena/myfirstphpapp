<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="comment.php" method="POST">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Enter your fullname" required />
        <textarea name="comment" placeholder="Enter your comment" required ></textarea>
        <input type="submit" name="send" value="Send">
    </form>
</body>
</html>