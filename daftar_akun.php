<html>

<head>
  <title>Daftar Akun</title>
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

    .daftar {
      width: 400px;
      margin: 16px auto;
      font-size: 16px;
    }

    /* Reset top and bottom margins from certain elements */
    .daftar-header,
    .daftar p {
      margin-top: 0;
      margin-bottom: 0;
    }

    .daftar-header {
      background: #28d;
      padding: 20px;
      font-size: 1.4em;
      font-weight: normal;
      text-align: center;
      text-transform: uppercase;
      color: #fff;
    }

    .daftar-container {
      background: #ebebeb;
      padding: 12px;
    }

    /* Every row inside .daftar-container is defined with p tags */
    .daftar p {
      padding: 12px;
    }

    .daftar input {
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

    .daftar input[type="username"],
    .daftar input[type="password"] {
      background: #fff;
      border-color: #bbb;
      color: #555;
    }

    /* Text fields' focus effect */
    .daftar input[type="username"]:focus,
    .daftar input[type="password"]:focus {
      border-color: #888;
    }

    .daftar input[type="submit"] {
      background: #28d;
      border-color: transparent;
      color: #fff;
      cursor: pointer;
    }

    .daftar input[type="submit"]:hover {
      background: #17c;
    }

    /* Buttons' focus effect */
    .daftar input[type="submit"]:focus {
      border-color: #05a;
    }
  </style>
</head>

<body>
  <div class="daftar">
    <h2 class="daftar-header">Daftar Akun</h2>
    <form class="daftar-container" action="daftar_akun_aksi.php" method="post">
      <p>
        <input type="text" placeholder="NIK" name="nik">
      </p>
      <p>
        <input type="text" placeholder="Username" name="username">
      </p>
      <p>
        <input type="text" placeholder="Nama" name="nama">
      </p>
      <p>
        <input type="text" placeholder="Alamat" name="alamat">
      </p>
      <p>
        <input type="text" placeholder="No HP" name="telp">
      </p>
      <p>
        <input type="password" placeholder="Password" name="password">
      </p>
      <p>
        <input type="submit" value="Daftar">
      </p>
    </form>
  </div>
</body>

</html>