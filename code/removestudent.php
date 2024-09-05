<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Search</title>
    <link rel="stylesheet" href="./removestudent.css">
</head>
<body>
    <div class="container">
        <h2>Search Student</h2>
        <form action="register.php" method="post">
            <input type="text" name="roll_no" placeholder="Enter Roll number">
            <input type="submit" value="Submit" id="searchbutton" class="submit_button" name="searchstudent">
        </form>
        <div id="searchResult"></div>
    </div>
    <script src="./removestudent.js"></script>
</body>
</html>
