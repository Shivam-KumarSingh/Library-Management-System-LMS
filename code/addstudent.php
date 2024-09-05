<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="./addstudent.css">
</head>
<body>
    <div class="container">
    <form method="post" action="register.php">
        <div class="input-group">
            <i class="fas fa-user"></i>
            
            <label for="roll_no">Roll no</label>  
            <input type="text" name="roll_no" id="roll_no" placeholder="Roll no" required>
         </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <label for="full_name">Full Name</label>  
            <input type="text" name="full_name" id="full_name" placeholder="Full Name" required>
         </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <label for="student_email">Student Email</label>  
            <input type="text" name="student_email" id="student_email" placeholder="Student Email" required>
         </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <label for="phone_number">Phone Number</label>  
            <input type="tel" name="phone_number" id="phone_number" placeholder="Phone Number" required>
         </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <label for="address">Address</label>  
            <input type="text" name="address" id="address" placeholder="Address" required>
         </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <label for="fine">Fine</label>  
            <input type="number" name="fine" id="fine" placeholder="Fine" value="0" readonly required>
         </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <label for="staff_id">Staff Id</label>  
            <input type="number" name="staff_id" id="staff_id" placeholder="Staff id" required>
         </div>
         <input type="submit" name="addstudent" value="Submit" class="submit-button" id="submit_button">
       </form>
    </div>
    <script src="addstudent.js"></script>
</body>
</html>
