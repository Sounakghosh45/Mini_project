<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "hotel";

// Connect to database
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $pin = $_POST['pin'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match!'); window.location.href='index.php';</script>";
        exit();
    }

    
    $check_sql = "SELECT * FROM users WHERE email = ?";
    $check_stmt = $conn->prepare($check_sql);
    $check_stmt->bind_param("s", $email);
    $check_stmt->execute();
    $result = $check_stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script>alert('Error: Email already registered!'); window.location.href='index.php';</script>";
        exit();
    }

 
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

   
    $target_dir = "uploads/"; // Create this folder in your project
    $target_file = $target_dir . basename($_FILES["picture"]["name"]);
    move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file);

    
    $sql = "INSERT INTO users (name, email, phone, picture, address, pin, dob, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssss", $name, $email, $phone, $target_file, $address, $pin, $dob, $hashed_password);

    if ($stmt->execute()) {
        $_SESSION['user_email'] = $email; // Set session
        header("Location: SG.php"); // Redirect to homepage
        exit();
    } else {
        echo "<script>alert('Error: " . $stmt->error . "'); window.location.href='SG.php';</script>";
    }

    $stmt->close();
}
$conn->close();
?>
