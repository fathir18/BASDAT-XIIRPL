<html>
<head>
    <title>menggunakan metode post</title>
</head>
<body>
    <h1>Menggunakan Metode Post</h1>
    <form method="post">
        <div>
            <label>Email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <div>
            <button>Login</button>
        </div>
        <?php
        $email = @$_POST['email'];
        $password = @$_POST['password'];
        
        echo "Email = {$email}<br>";
        echo "Passwordnya = {$password}";
        ?>
    </form>
</body>
</html>