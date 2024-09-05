<?php 

include 'connect.php';

if(isset($_POST['signUp'])){
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

     $checkEmail="SELECT * From users where email='$email'";
     $result=$conn->query($checkEmail);
     if($result->num_rows>0){
        echo "Email Address Already Exists !";
     }
     else{
        $insertQuery="INSERT INTO users(firstName,lastName,email,password)
                       VALUES ('$firstName','$lastName','$email','$password')";
            if($conn->query($insertQuery)==TRUE){
                header("location: index.php");
            }
            else{
                echo "Error:".$conn->error;
            }
     }
   

}

if(isset($_POST['signIn'])){
   $email=$_POST['email'];
   $password=$_POST['password'];
   $password=md5($password) ;
   
   $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
   $result=$conn->query($sql);
   if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['email']=$row['email'];
    header("Location: homepage.php");
    exit();
   }
   else{
    echo "Not Found, Incorrect Email or Password";
   }

}
if(isset($_POST['AddBooks'])){
    $ISBN=$_POST['isbn'];
    $Title=$_POST['title'];
    $Edition=$_POST['edition'];
    $Category=$_POST['category'];
    $Status=$_POST['status'];
    $Price=$_POST['price'];
    $Staff_id=$_POST['staff_id'];

        $check_isbn="SELECT *from books where ISBN='$ISBN'";
        $result=$conn->query($check_isbn);
     if($result->num_rows>0){
        echo "Book Already Exists !";
     }
     else{
        $insertQuery="INSERT INTO books (ISBN, Title, Edition, Category, Status, Price, Id_staff)
                       VALUES ('$ISBN','$Title','$Edition','$Category','$Status','$Price','$Staff_id')";
            if($conn->query($insertQuery)==TRUE){
                echo "Book added sucessfully ";
                header("location: addbook.php");
            }
            else{
                echo "Error:".$conn->error;
            }
     }

}
if(isset($_POST['Update'])) {
    $ISBN = $_POST['isbn'];
    $check_isbn = "SELECT * FROM books WHERE ISBN='$ISBN'";
    $result = $conn->query($check_isbn);
    if($result->num_rows > 0) {
        $book = $result->fetch_assoc();
        echo "<h3>Book Details</h3>";
        echo "<p>Title: " . $book['Title'] . "</p>";
        echo "<p>Edition: " . $book['Edition'] . "</p>";
        echo "<p>Category: " . $book['Category'] . "</p>";
        echo "<p>Status: " . $book['Status'] . "</p>";
        echo "<p>Price: " . $book['Price'] . "</p>";
        echo "<p>Staff ID: " . $book['Id_staff'] . "</p>";
    } else {
        echo "Book not found!";
    }
}
if(isset($_POST['UpdateBooks'])){
    $ISBN=$_POST['isbn'];
    $Title=$_POST['title'];
    $Edition=$_POST['edition'];
    $Category=$_POST['category'];
    $Status=$_POST['status'];
    $Price=$_POST['price'];
    $Staff_id=$_POST['staff_id'];

    // Update query to update book information
    $updateQuery = "UPDATE books SET Title='$Title', Edition='$Edition', Category='$Category', Status='$Status', Price='$Price', Id_staff='$Staff_id' WHERE ISBN='$ISBN'";

    if($conn->query($updateQuery) === TRUE){
        echo "Book updated successfully";
        // Redirect to a page after successful update
        header("location: updatebook.php");
    } else {
        echo "Error updating book: " . $conn->error;
    }
}
if(isset($_POST['DeleteBooks'])){
    $ISBN=$_POST['isbn'];
    $deleteQuery="DELETE FROM books WHERE ISBN ='$ISBN'";
    if($conn->query($deleteQuery) === TRUE) {
        header("location: delete.php");
    } else {
        echo "Error deleting book: " . $conn->error;
    }
}

if(isset($_POST['addstudent'])){
    $roll_no = $_POST['roll_no'];
    $full_name = $_POST['full_name'];
    $student_email = $_POST['student_email'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $fine = $_POST['fine'];
    $staff_id = $_POST['staff_id'];

    // Check if the roll number already exists
    $checkRollNo = "SELECT * FROM students WHERE roll_no='$roll_no'";
    $result = $conn->query($checkRollNo);
    if($result->num_rows > 0){
        echo "Roll Number Already Exists!";
    } else {
        // Insert the student into the database
        $insertQuery = "INSERT INTO students(roll_no, full_name, student_email, phone_number, address, fine, staff_id)
                        VALUES ('$roll_no', '$full_name', '$student_email', '$phone_number', '$address', '$fine', '$staff_id')";
        if($conn->query($insertQuery) === TRUE){
            header("location: addstudent.php"); 
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
if(isset($_POST['searchstudent'])){
    $roll_no=$_POST['roll_no'];
    $deleteQuery="DELETE FROM students WHERE roll_no ='$roll_no'";
    if($conn->query($deleteQuery) === TRUE) {
        header("location: removestudent.php");
    } else {
        echo "Error deleting book: " . $conn->error;
    }
}

?>
