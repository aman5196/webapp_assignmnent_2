<?php
// connect to the database
$conn = mysqli_connect("localhost", "root","", "database_contact-form") or die("Couldn't connect to database)'");

// check for form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// retrieve the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

// insert the data into the database
    $query = "INSERT INTO database_table (name, email, subject, message) VALUES ('{$name}', '{$email}', '{$subject}', '{$message}')";
    mysqli_query($conn, $query) or die("Error inserting");
    header("location: http://localhost/form/form.php");
}

?>