<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <section>
        <div class="form-container">
            <h1>login form</h1>
            <form action="login.php" method="POST">
                <?php if(isset($_GET['error'])) { ?>
                    <p class="error"> <?php echo $_GET['error'];?></p>
                    <?php } ?>
                
                <div class="control">
                    <label for="nm"><font>Username</label>
                    <input type="text" name="uname" placeholder="Enter Your Username" id="nm">
                </div>
                <div class="control">
                    <label for="pw">Password</label>
                    <input type="password" name="password" placeholder="Enter Your Password" id="pw">
                </div>
                <span><input type="checkbox"> Remember me.</span>
                <div class="control">
                    <input type="submit" value="Login" name="btn-login">
                </div>
            </form>
            <div class="link">
                <a href="#">Forgot Password ?</a>
            </div>
        </div>
    </section>
    
</body>
</html>
