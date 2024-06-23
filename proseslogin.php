<?php
session_start();
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        $query = "SELECT * FROM user WHERE email = :email";
        $statement = $pdo->prepare($query);
        $statement->execute(array(':email' => $email));

        if ($statement->rowCount() > 0) {
            $user = $statement->fetch(PDO::FETCH_ASSOC);

            if ($password == $user['password']) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['role'] = $user['role'];

                // Redirect berdasarkan role
                if ($user['role'] == 'user') {
                    header('Location: user/');
                } else {
                    header('Location: pages/dashboard.php');
                }
                exit();
            } else {
                echo "<script>alert('Invalid email or password'); window.location.href = 'login.php';</script>";
            }
        } else {
            echo "<script>alert('Invalid email or password'); window.location.href = 'login.php';</script>";
        }
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}
?>
