<html>

<head>
  <title>Login Pendataan</title>
  <style>
    body {
      background: #456;
      font-family: 'Open Sans', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login {
      width: 400px;
      margin: 16px auto;
      font-size: 16px;
    }

    /* Reset top and bottom margins from certain elements */
    .login-header,
    .login p {
      margin-top: 0;
      margin-bottom: 0;
    }

    .login-header {
      background: black;
      padding: 20px;
      font-size: 1.4em;
      font-weight: normal;
      text-align: center;
      text-transform: uppercase;
      color: #fff;
    }

    .login-container {
      background: #ebebeb;
      padding: 12px;
    }

    /* Every row inside .login-container is defined with p tags */
    .login p {
      padding: 12px;
    }

    .login input {
      box-sizing: border-box;
      display: block;
      width: 100%;
      border-width: 1px;
      border-style: solid;
      padding: 16px;
      outline: 0;
      font-family: inherit;
      font-size: 0.95em;
    }

    .login input[type="username"],
    .login input[type="password"] {
      background: #fff;
      border-color: #bbb;
      color: #555;
    }

    /* Text fields' focus effect */
    .login input[type="username"]:focus,
    .login input[type="password"]:focus {
      border-color: #888;
    }

    .login input[type="submit"] {
      background: black;
      border-color: transparent;
      color: #fff;
      cursor: pointer;
    }

    .login input[type="submit"]:hover {
      background: #17c;
    }

    /* Buttons' focus effect */
    .login input[type="submit"]:focus {
      border-color: #05a;
    }
  </style>
</head>

<body>
  <div class="login">
    <h2 class="login-header">Login</h2>
    <form class="login-container" action="login_aksi.php" method="post">
      <p>
        <input type="username" placeholder="Username" name="username">
      </p>
      <p>
        <input type="password" placeholder="Password" name="password">
      </p>
      <p style="text-align: right;">
        Belum punya akun? <a href="daftar_akun.php">Daftar Disini</a>
      </p>
      <p>
        <input type="submit" value="Log in">
      </p>
    </form>
  </div>
</body>

</html>