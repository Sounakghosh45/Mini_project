<?php
$servername = "localhost";
$username = "root"; // Default XAMPP username
$password = ""; // Default XAMPP password (empty)
$database = "hotel"; // Your database name

// Create database connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email_id = $_POST['email_id'];
    $password = $_POST['password']; // Encrypt password

    // Insert into database
    $sql = "INSERT INTO login_details (Email_id, Password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email_id, $password);

    if ($stmt->execute()) {
        // Store session and redirect to home
        $_SESSION['user_email'] = $email_id;
        header("Location: SG.php"); // Redirect to homepage
        exit(); // Stop script execution
    } else {
        echo "<script>alert('Error: " . $stmt->error . "'); window.location.href='SG.php';</script>";
    }
   
    $stmt->close();
}
$conn->close();
?>
