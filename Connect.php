<?php

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn = new mysqli('localhost', 'root', '', 'blood_donation_camp');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['blood_group'])) {

        $username = test_input($_POST['username']);
        $email = test_input($_POST['email']);
        $phone = test_input($_POST['phone']);
        $blood_group = test_input($_POST['blood_group']);

        $sql = "INSERT INTO users (username, email, phone, blood_group) VALUES ('$username', '$email', '$phone','$blood_group')";

        // $query = $conn->query($sql);

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
}
