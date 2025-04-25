<?php
session_start();
require_once '../includes/db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $pdo->prepare("SELECT * FROM user WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {
  $_SESSION['user_id'] = $user['id'];
  $_SESSION['name'] = $user['name'];
  header("Location: ../dashboard.php");
  exit;
} else {
  $_SESSION['errors']['login'] = "Invalid email or password.";
  $_SESSION['active_form'] = 'login';
  header("Location: ../index.php");
  exit;
}
?>

