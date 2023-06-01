<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script>
        function login() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            
            // Cek username dan password
            if (username === "admin" && password === "admin") {
                // Redirect ke halaman Admin
                window.location.href = "admin.html";
            } else if (username === "user" && password === "user") {
                // Redirect ke halaman User
                window.location.href = "user.html";
            } else {
                // Menampilkan pesan kesalahan
                alert("Username atau password salah!");
            }
        }
        
        function checkAdminAccess() {
            var isAdmin = true; // Ganti dengan logika validasi admin
            
            if (!isAdmin) {
                // Menampilkan pesan jika bukan admin
                alert("Hanya admin yang bisa melakukan delete atau update");
            }
        }
    </script>
</head>
<body>
    <h1>Login</h1>
    <form>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        <input type="button" value="Login" onclick="login()">
    </form>
</body>
</html>

