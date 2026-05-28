<?php
session_start();

$valid_users = [
    'ALN' => password_hash('ALN', PASSWORD_DEFAULT),
];

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
    header('Location: admin.php');
    exit;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (array_key_exists($username, $valid_users) && password_verify($password, $valid_users[$username])) {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username; 
        header('Location: admin.php');
        exit;
    } else {
        $error = "HAYOLOH MAU NGAPAIN MEMEX 😂🖕";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login pusat aln</title>
<link rel="icon" type="image/png" href="favicon.png">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<style>
  body {
    font-family: 'Roboto', sans-serif;
    background-color: #000;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-image: url('https://i.ibb.co.com/NdPjZT65/IMG-20260524-WA0160.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
    z-index: 1;
    background-attachment: fixed;
        }
  .login-form {
    width: 100%;
    max-width: 400px;
    padding: 25px;
    background: rgba(255, 255, 255, 0.8);
    border-radius: 10px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
  }
  .login-form h2 {
    text-align: center;
    margin-bottom: 30px;
    font-size: 28px;
    color: #6600CC;
  }
  .form-group {
    position: relative;
  }
  .form-group .input-group-prepend .input-group-text {
    background: #6600CC;
    border: none;
  }
  .form-control {
    border-radius: 8px;
    margin-bottom: 20px;
    box-shadow: none;
    height: 50px;
    font-size: 16px;
  }
  .btn-primary {
    background-color: #6600CC;
    border: none;
    border-radius: 8px;
    padding: 12px 20px;
    font-size: 18px;
    font-weight: bold;
    transition: background-color 0.3s;
    height: 50px;
  }
  .btn-primary:hover {
    background-color: #fff;
  }
  .error-message {
    color: #6600CC;
    font-size: 14px;
    text-align: center;
    margin-top: 10px;
  }
  .form-group .input-group-prepend .input-group-text {
    border-top-left-radius: 8px;
    border-bottom-left-radius: 8px;
  }
  .input-group-text i {
    color: #ff0;
  }
</style>
</head>
<body>
<div class="login-form">
  <h2><i class="fas fa-user"></i> Log In  </h2>
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" autocomplete="off">
    <div class="form-group">
      <div class="input-group-prepend">
        <span class="input-group-text bg-white"><i class="fas fa-user"></i></span>
      </div>
      <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
    </div>
    <div class="form-group">
      <div class="input-group-prepend">
        <span class="input-group-text bg-white"><i class="fas fa-lock"></i></span>
      </div>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Login</button>
    <?php if (!empty($error)): ?>
      <div class="error-message"><?php echo $error; ?></div>
    <?php endif; ?>
  </form>
 
 
 
  <div class="info-box">
                 ‼️PERHATIAN‼️
    JIKA ANDA BELUM MENJADI MEMBER DAN INGIN MENGAKSES PUSAT NYA<br>
    SILAHKAN KLIK TOMBOL DI BAWAH INI👇<br>
    <a href="https://wa.me/6285353389626/" target="_blank" class="wa-button">
      <i class="fab fa-whatsapp"></i> HUBUNGI WHATSAPP ADMIN
    </a>
  </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
