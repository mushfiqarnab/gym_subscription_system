<?php
// Include database connection
include('DBconnect.php');

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $bmi = $_POST['bmi'];

    // Insert customer data into the database
    $sql = "INSERT INTO customers (name, email, address, phone, dob, bmi) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $name, $email, $address, $phone, $dob, $bmi);

    if ($stmt->execute()) {
        echo "<script>alert('Sign-up successful!'); window.location.href='signin.php';</script>";
    } else {
        echo "<script>alert('Error: Unable to sign up.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Customer Sign-Up</h2>
        <form method="POST" action="signup.php">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" name="address" id="address" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="text" name="phone" id="phone" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" name="dob" id="dob" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="bmi">BMI:</label>
                <input type="text" name="bmi" id="bmi" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
        </form>
    </div>
</body>
</html>
