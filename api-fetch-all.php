<?php
// Set header to return JSON response
header("Content-Type: application/json");


include 'config.php';

// SQL query to get all students
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    $students = [];

    // Fetch all rows and store in array
    while($row = mysqli_fetch_assoc($result)){
        $students[] = $row;
    }

    // Send JSON response
    echo json_encode($students, JSON_PRETTY_PRINT); // Prettier output (optional)
} else {
    echo json_encode(["message" => "No student found"]);
}
?>
