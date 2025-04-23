<?php
// Start session if needed
session_start();
$conn = new mysqli("localhost", "root", "", "hotel");
if ($conn->connect_error) die("DB connection failed: " . $conn->connect_error);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Complaint Form
    if (isset($_POST['submit_complaint'])) {
        $user = $_POST['complaint_user'];
        $msg = $_POST['complaint_msg'];
        $stmt = $conn->prepare("INSERT INTO complaints (username, complaint) VALUES (?, ?)");
        $stmt->bind_param("ss", $user, $msg);
        $stmt->execute();
        echo "<script>alert('Complaint submitted!'); window.history.back();</script>";
        exit;
    }

    // Food Order Form
    if (isset($_POST['submit_food'])) {
        $user = $_POST['food_user'];
        $order = $_POST['food_order'];
        $stmt = $conn->prepare("INSERT INTO food_orders (username, order_details) VALUES (?, ?)");
        $stmt->bind_param("ss", $user, $order);
        $stmt->execute();
        echo "<script>alert('Food order submitted!'); window.history.back();</script>";
        exit;
    }
}
?>
