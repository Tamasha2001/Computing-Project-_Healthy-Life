<?php
    // addDeliveryBoyController.php

    // Check if the form is submitted
    if(isset($_POST['upload'])){
        
        // Include the database connection
        include_once "../config/dbconnect.php";
        
        // Get the form inputs
        $first_name = $_POST['f_name'];
        $last_name = $_POST['l_name'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $address = $_POST['address'];
        $vehicle_number = $_POST['vehicle_number'];
        
        // Prepare the SQL query using prepared statements to avoid SQL injection
        $stmt = $conn->prepare("INSERT INTO delivery_boys (first_name, last_name, email, phone_number, address, vehicle_number) VALUES (?, ?, ?, ?, ?, ?)");
        
        // Bind the parameters to the prepared statement
        $stmt->bind_param("ssssss", $first_name, $last_name, $email, $phone_number, $address, $vehicle_number);
        
        // Execute the prepared statement
        if ($stmt->execute()) {
            echo "Delivery boy added successfully.";
        } else {
            echo "Error adding delivery boy: " . $conn->error;
        }
        
        // Close the statement and database connection
        $stmt->close();
        $conn->close();
    }
?>
