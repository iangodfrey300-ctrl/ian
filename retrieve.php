<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Simple authentication (replace with secure method)
    if ($username == "admin" && $password == "pass123") {
        $_SESSION['loggedin'] = true;
    }
}

if (!isset($_SESSION['loggedin'])) {
    echo '<form method="POST" action="">
            <label>Username: <input type="text" name="username"></label><br>
            <label>Password: <input type="password" name="password"></label><br>
            <input type="submit" name="login" value="Login">
          </form>';
} else {
    $conn = new mysqli("localhost", "username", "password", "database_name");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query("SELECT * FROM submissions");
    echo "<h2>Submissions</h2>";
    while ($row = $result->fetch_assoc()) {
        echo "<p>First Name: " . $row['first_name'] . ", Quote: " . $row['quote'] . "</p>";
    }

    $conn->close();
}
?>