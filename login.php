<!DOCTYPE html>
<html>
<head>
  <title>Login Form Aplikasi Inventaris Sarana dan Prasarana Sekolah Berbasis Web</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .login-container {
      width: 300px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color:#F5EBEB;
    }
    .login-container h2 {
      text-align: center;
    }
    .form-group {
      margin-bottom: 15px;
    }
    .form-group label {
      display: block;
      margin-bottom: 5px;
    }
    .form-group input {
      width: 100%;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }
    .form-group input[type="submit"] {
      background-color: #D5B4B4;
      color: white;
      cursor: pointer;
    }
    .form-group input[type="submit"]:hover {
      background-color: #867070;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Form Login</h2>
    <form method="post" action="ceklogin.php">
      <div class="form-group">
        <label for="id_user">id user:</label>
        <input type="text" id="id_user" name="id_user" required>
      </div>
      <div class="form-group">
        <label for="username">username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="nama_user">nama user:</label>
        <input type="text" id="nama_user" name="nama_user" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Login">
      </div>
    </form>
  </div>
</body>
</html>
