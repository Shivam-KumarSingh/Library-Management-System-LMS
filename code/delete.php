<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Search</title>
    <link rel="stylesheet" href="./updatebook.css">
</head>
<body>
    <div class="container">
        <h2>Delete Book</h2>
        <form action="register.php" method="post">
            <input type="text" name="isbn" placeholder="Enter ISBN number">
            <input type="submit" value="Submit" id="searchbutton" class="submit_button" name="DeleteBooks">
        </form>
        <div id="searchResult"></div>
    </div>
    <script src="./delete.js"></script>
</body>
</html>
