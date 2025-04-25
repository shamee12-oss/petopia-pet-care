<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/styles.css" />
  <title>Login & Register</title>
</head>
<body>
<?php
  session_start();
  require_once 'includes/functions.php';
  $activeForm = $_SESSION['active_form'] ?? 'login';
  $errors = $_SESSION['errors'] ?? [];
  $success = $_SESSION['success'] ?? '';
  unset($_SESSION['errors'], $_SESSION['success']);
?>

<?php if ($success): ?>
  <div class="success-message">
    <?= htmlspecialchars($success) ?>
  </div>
<?php endif; ?>

<!-- LOGIN FORM -->
<div class="form-box" id="login-box" style="<?= $activeForm === 'register' ? 'display:none;' : '' ?>">
  <h2>Login</h2>
  <?= showError($errors['login'] ?? '') ?>
  <form action="auth/login.php" method="post">
    <div class="mb-3">
      <label for="login-email">Email</label>
      <input type="email" id="login-email" name="email" placeholder="you@example.com" required>
    </div>
    <div class="mb-3">
      <label for="login-password">Password</label>
      <input type="password" id="login-password" name="password" placeholder="••••••••" required>
    </div>
    <button class="btn" type="submit" name="login">Login</button>
  </form>
  <p>Don't have an account? <a href="#" onclick="showForm('register-box')">Sign up</a></p>
</div>

<!-- REGISTER FORM -->
<div class="form-box" id="register-box" style="<?= $activeForm === 'login' ? 'display:none;' : '' ?>">
  <h2>Register</h2>
  <?= showError($errors['register'] ?? '') ?>
  <form action="auth/register.php" method="post">
    <div class="mb-3">
      <label for="reg-username">Name</label>
      <input type="text" id="reg-username" name="name" placeholder="Your name" required>
    </div>
    <div class="mb-3">
      <label for="reg-email">Email</label>
      <input type="email" id="reg-email" name="email" placeholder="you@example.com" required>
    </div>
    <div class="mb-3">
      <label for="reg-password">Password</label>
      <input type="password" id="reg-password" name="password" placeholder="••••••••" required>
    </div>
    <div class="mb-3">
      <label for="reg-confirm-password">Confirm Password</label>
      <input type="password" id="reg-confirm-password" name="confirm_password" placeholder="••••••••" required>
    </div>
    <button class="btn" type="submit" name="register">Register</button>
    <p>Already have an account? <a href="#" onclick="showForm('login-box')">Login</a></p>
  </form>
</div>

<script>
function showForm(formId) {
  const loginBox = document.getElementById('login-box');
  const registerBox = document.getElementById('register-box');
  if (formId === 'register-box') {
    loginBox.style.display = 'none';
    registerBox.style.display = 'block';
  } else {
    loginBox.style.display = 'block';
    registerBox.style.display = 'none';
  }
}
</script>
</body>
</html>
