<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    $gender = htmlspecialchars($_POST['gender']);
    $contact = htmlspecialchars($_POST['contact']);
    $address = htmlspecialchars($_POST['address']);
    $height = htmlspecialchars($_POST['height']);
    $weight = htmlspecialchars($_POST['weight']);
    $blood_group = htmlspecialchars($_POST['blood_group']);
    
    echo "<script>
        alert('Registration Successful!\\n\\nDetails:\\nName: $name\\nAge: $age\\nGender: $gender\\nContact: $contact\\nAddress: $address\\nHeight: $height cm\\nWeight: $weight kg\\nBlood Group: $blood_group');
        window.location.href = 'index.html';
    </script>";
} else {
    echo "Invalid Request!";
}
?>
