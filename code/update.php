<?php

include 'connect.php';

if(isset($_POST['isbn'])) {
    $ISBN = $_POST['isbn'];
    
    // Query to retrieve book information based on ISBN
    $query = "SELECT * FROM books WHERE ISBN='$ISBN'";
    $result = $conn->query($query);
    
    if($result->num_rows > 0) {
        $book = $result->fetch_assoc();
        // Pre-fill form fields with retrieved book information
        $title = $book['Title'];
        $edition = $book['Edition'];
        $category = $book['Category'];
        $status = $book['Status'];
        $price = $book['Price'];
        $staff_id = $book['Id_staff'];
    } else {
        echo "Book not found!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Book Information</title>
    <link rel="stylesheet" href="./addbook.css">
</head>
<body>
    <div class="container">
        <form method="post" action="register.php"> <!-- Assuming update_book.php is the file for handling book updates -->
            <div class="input-group">
                <i class="fas fa-user"></i>
                <label for="isbn">ISBN</label>  
                <input type="text" name="isbn" id="isbn" placeholder="ISBN" required value="<?php echo isset($ISBN) ? $ISBN : ''; ?>">
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <label for="title">Title</label>  
                <input type="text" name="title" id="title" placeholder="Title" required value="<?php echo isset($title) ? $title : ''; ?>">
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <label for="edition">Edition</label>  
                <input type="number" name="edition" id="edition" placeholder="Edition" required value="<?php echo isset($edition) ? $edition : ''; ?>">
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <label for="category">Category</label>  
                <input type="text" name="category" id="category" placeholder="Category" required value="<?php echo isset($category) ? $category : ''; ?>">
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <label for="status">Status</label>  
                <select name="status" type="text" id="status" required>
                    <option value="Select">Select</option>
                    <option value="Available" <?php echo isset($status) && $status == 'Available' ? 'selected' : ''; ?>>Available</option>
                    <option value="Reserved" <?php echo isset($status) && $status == 'Reserved' ? 'selected' : ''; ?>>Reserved</option>
                </select>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <label for="price">Price</label>  
                <input type="number" name="price" id="price" placeholder="Price" required value="<?php echo isset($price) ? $price : ''; ?>">
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <label for="staff_id">Staff Id</label>  
                <input type="number" name="staff_id" id="staff_id" placeholder="Staff id" required value="<?php echo isset($staff_id) ? $staff_id : ''; ?>">
            </div>
            <input type="submit" value="Submit" id="submit_button" class="submit-button" name="UpdateBooks">
        </form>
        <script>
        document.addEventListener("DOMContentLoaded", function() {
    
    const submitbutton = document.getElementById("submit_button");
    
    submitbutton.addEventListener("click", function() {
            alert("Book Updated Successfully!");
        });
    });
    </script>
    </div>
    
</body>
</html>
