<?php
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];

// Create a database connection
$conn = new mysqli('localhost', 'root', '', 'db1');

// Check the connection 
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} else {
    // Prepare the SQL statement with placeholders
    $stmt = $conn->prepare("INSERT INTO detail (nom, prenom, email, password, gender) VALUES (?, ?, ?, ?, ?)");

    // Bind the parameters to the placeholders
    $stmt->bind_param("sssss", $nom, $prenom, $email, $password, $gender);


    // Execute the statement
    $stmt->execute();

    // Check for successful insertion
    if ($stmt->affected_rows > 0) {
        echo "Record inserted successfully";
        echo "<pre>";
        echo "Nom: $nom";
        echo "Prenom: $prenom\n";
        echo "Email: $email\n";
        echo "Password: $password\n";
        echo "Gender: $gender\n";
        echo "</pre>";
    } else {        
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
