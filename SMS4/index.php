
<!DOCTYPE html>
<html>
    <head>
        <Title>BCP LOGIN</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        
</head>
<body>
<form action="login.php" method="post">

<div class="login-container">

<div class="login-box">
    <img src="bcplogo.png" alt="Bestlink College" class="logo">
        <h2>Bestlink College of the Philippines</h2>
        <?php if (isset($_GET['error'])) { ?>

        <?php } ?> 
        <div class="input-group">
                 <label for="username">Username</label>
                 <input type="text" id="username" name="username" required>
            </div>
        <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
        <div class="input-group">
                <button type="submit">Sign in</button>
             </div>
</div>

</form>
</body>
</html>
