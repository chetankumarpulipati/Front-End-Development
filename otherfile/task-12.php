<?php
$servername = "DESKTOP-RM385K0";
$username = "cheta";
$password = "8524";
$dbname = "ecourse_feedback";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $course = $_POST["course"];
    $rating = $_POST["rating"];
    $feedback = $_POST["feedback"];
    $suggestions = $_POST["suggestions"];
    $liked = $_POST["liked"];
    $disliked = $_POST["disliked"];

    $sql = "INSERT INTO feedback (name, email, course, rating, feedback, suggestions, liked, disliked) VALUES ('$name', '$email', '$course', '$rating', '$feedback', '$suggestions', '$liked', '$disliked')";
    if ($conn->query($sql) === TRUE) {
        echo "Thank you for your feedback!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>