<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./addbook.css">
</head>
<body>
    <div class="container">
        <form method="post" action="register.php">
        
            <div class="input-group">
                <i class="fas fa-user"></i>
                <label for="isbn">ISBN</label>  
                <input type="text" name="isbn" id="isbn" placeholder="ISBN" required>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <label for="title">Title</label>  
                <input type="text" name="title" id="title" placeholder="Title" required>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <label for="edition">Edition</label>  
                <input type="number" name="edition" id="edition" placeholder="Edition" required>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <label for="category">Category</label>  
                <input type="text" name="category" id="category" placeholder="Category" required>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <label for="status">Status</label>  
                <select name="status" type="text" id="status" required>
                    <option value="Select">Select</option>
                    <option value="Available">Available</option>
                    <option value="Reserved">Reserved</option>
                </select>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <label for="price">Price</label>  
                <input type="number" name="price" id="price" placeholder="Price" required>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <label for="staff_id">Staff Id</label>  
                <input type="number" name="staff_id" id="staff_id" placeholder="Staff id" required>
            </div>
            <input type="submit" value="Submit" class="submit-button" name="AddBooks">
        </form>
    </div>
</body>
</html>
