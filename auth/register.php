<?php
session_start();
require_once '../includes/db.php';         // connects using $pdo
require_once '../includes/functions.php'; // your helper functions

// show PHP errors (for dev only)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name     = trim($_POST['name'] ?? '');
    $email    = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm  = $_POST['confirm_password'] ?? '';

    $_SESSION['active_form'] = 'register';

    // validation
    if (!$name || !$email || !$password || !$confirm) {
        $_SESSION['errors']['register'] = 'All fields are required.';
        header('Location: ../index.php');
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['errors']['register'] = 'Invalid email address.';
        header('Location: ../index.php');
        exit;
    }

    if ($password !== $confirm) {
        $_SESSION['errors']['register'] = 'Passwords do not match.';
        header('Location: ../index.php');
        exit;
    }

    // check if email already exists
    $stmt = $pdo->prepare("SELECT id FROM user WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->fetch()) {
        $_SESSION['errors']['register'] = 'Email already registered.';
        header('Location: ../index.php');
        exit;
    }

    // insert new user
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $pdo->prepare("INSERT INTO user (name, email, password) VALUES (?, ?, ?)");
    $stmt->execute([$name, $email, $hashedPassword]);

    $_SESSION['active_form'] = 'login';
    $_SESSION['success'] = 'Registration successful. Please login.';
    header('Location: ../index.php');
    exit;
}
